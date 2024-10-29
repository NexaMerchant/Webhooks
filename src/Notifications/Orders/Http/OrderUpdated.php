<?php

namespace NexaMerchant\Webhooks\Notifications\Orders\Http;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;


class OrderUpdated extends Notification implements ShouldQueue
{
    use Queueable;

    /**
     * The order instance.
     *
     * @var \Webkul\Sales\Contracts\Order
     */
    protected $order;

    /**
     * Create a new notification instance.
     *
     * @param  \Webkul\Sales\Contracts\Order  $order
     * @return void
     */
    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['http'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\HttpMessage
     */
    public function toHttp($notifiable)
    {
        
        $client = new \GuzzleHttp\Client();

        try {
            $response = $client->request('POST', 'https://webhook.site/1b1b1b1b-1b1b-1b1b-1b1b-1b1b1b1b1b1b', [
                'json' => $this->toArray($notifiable)
            ]);
        } catch (\Exception $e) {
            report($e);
        }
        
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'order_id' => $this->order->id,
            'order_status' => $this->order->status,
            'order_total' => core()->formatBasePrice($this->order->base_grand_total),
            'order_date' => $this->order->created_at,
            'order_customer' => $this->order->customer_full_name,
            'order_email' => $this->order->customer_email,
            'order_shipping' => $this->order->shipping_title,
            'order_payment' => $this->order->payment_title,
            'order_currency' => $this->order->order_currency_code,
            'order_items' => $this->order->items->map(function ($item) {
                return [
                    'name' => $item->name,
                    'sku' => $item->sku,
                    'price' => core()->formatBasePrice($item->base_price),
                    'qty' => $item->qty_ordered,
                    'total' => core()->formatBasePrice($item->base_total),
                ];
            }),
        ];
    }
}