<?php
namespace NexaMerchant\Webhooks\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\SerializesModels;
use GuzzleHttp\Client as Http;
use DateTime;

class SendWebhook implements ShouldQueue
{
    use Queueable;

    public $webhook;
    public $data;

    public $tries = 5; // number of times to retry the job

    public $timeout = 120; // number of seconds the job can run

    /**
     * Determine the time at which the job should timeout.
     */
    public function retryUntil(): DateTime
    {
        return now()->addMinutes(10);
    }

    public function __construct($webhook, $data)
    {
        $this->webhook = $webhook;
        $this->data = $data;
    }

    public function handle()
    {
        // send the webhook
        if($this->webhook->format == 'json') {
            $this->sendJsonWebhook();
        }
        if($this->webhook->format == 'xml') {
            $this->sendXmlWebhook();
        }
    }

    // send json webhook
    public function sendJsonWebhook()
    {
        $http = new Http();
        $http->post($this->webhook->url, [
            'json' => $this->data
        ]);
    }

    // send xml webhook
    public function sendXmlWebhook()
    {
        $http = new Http();
        $http->post($this->webhook->url, [
            'body' => $this->data
        ]);
    }
}