<?php
 
namespace NexaMerchant\Webhooks\Jobs\Products;
 
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use GuzzleHttp\Exception\ClientException;
use Illuminate\Support\Facades\Log;
 
class UpdateProductIndex implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $url;

    private $data;
 
    /**
     * Create a new job instance.
     *
     * @param  array  $productIds
     * @return void
     */
    public function __construct($url, $data)
    {
        $this->url = $url;
        $this->data = $data;
    }
 
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client();

        Log::error("Event fired");

        $data = [
            "order" => [
                "line_items" => [
                    [
                        "variant_id" => 447654529,
                        "quantity" => 1
                    ]
                ]
            ]
        ];

        // try {
        //     $response = $client->post($this->url.'/admin/api/2023-10/orders.json', [
        //         'http_errors' => true,
        //         'headers' => [
        //             'Content-Type' => 'application/json',
        //             'Accept' => 'application/json',
        //             'Access-Token' => "shpat_1b1",
        //         ],
        //         'body' => json_encode($data)
        //     ]);
        // }catch(ClientException $e) {
        //     var_dump($e->getResponse()->getBody()->getContents());

        //     Log::error($e->getResponse()->getBody()->getContents());
        // }

        
    }
}