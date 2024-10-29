<?php
namespace NexaMerchant\Webhooks\Notifications\Orders\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OrderUpdated extends Notification
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
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Order Updated')
            ->greeting('Hello!')
            ->line('Your order has been updated.')
            ->action('View Order', route('shop.sales.orders.view', $this->order->id));
    }
}