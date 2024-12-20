<?php

namespace NexaMerchant\Webhooks\Listeners;

use Webkul\Shop\Mail\Order\CreatedNotification;
use Webkul\Shop\Mail\Order\CanceledNotification;
use Webkul\Shop\Mail\Order\CommentedNotification;
use GuzzleHttp\Client as Http;

class Order extends Base
{
    /**
     * After order is created
     *
     * @param  \Webkul\Sale\Contracts\Order  $order
     * @return void
     */
    public function afterCreated($order)
    {
        try {
            if (! core()->getConfigData('emails.general.notifications.emails.general.notifications.new_order')) {
                return;
            }

            $this->prepareMail($order, new CreatedNotification($order));

            // Use Api to send new order notification
            // select the webhook with topic 'order.created' and post the order data to the webhook url
            $webhooks = Webhook::where('topic', 'order.created')->select(['url','format','type'])->get();
            foreach ($webhooks as $webhook) {
                // add the the webhook to the queue
                $this->dispatch(new SendWebhook($webhook, $order))->onQueue('webhooks_'.$webhook->type);
            }

        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Send cancel order mail.
     *
     * @param  \Webkul\Sales\Contracts\Order  $order
     * @return void
     */
    public function afterCanceled($order)
    {
        try {
            if (! core()->getConfigData('emails.general.notifications.emails.general.notifications.cancel_order')) {
                return;
            }

            $this->prepareMail($order, new CanceledNotification($order));
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Send order comment mail.
     *
     * @param  \Webkul\Sales\Contracts\OrderComment  $comment
     * @return void
     */
    public function afterCommented($comment)
    {
        if (! $comment->customer_notified) {
            return;
        }

        try {
            /**
             * Email to customer.
             */
            $this->prepareMail($comment, new CommentedNotification($comment));
        } catch (\Exception $e) {
            report($e);
        }
    }

    /**
     * Order Updated
     *
     * @param  mixed  $object
     * @param  \Illuminate\Mail\Mailable  $mailable
     * @return void
     */
    public function afterUpdated($order) {
        try {
            if (! core()->getConfigData('emails.general.notifications.emails.general.notifications.order_updated')) {
                return;
            }

            //$this->prepareMail($order, new UpdatedNotification($order));

            // Use Api to send order updated notification
            
            


        } catch (\Exception $e) {
            report($e);
        }
    }

}