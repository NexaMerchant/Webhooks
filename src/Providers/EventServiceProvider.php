<?php

namespace NexaMerchant\Webhooks\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'customer.registration.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterCreated',
        ],

        'customer.password.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterPasswordUpdated',
        ],

        'customer.subscription.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterSubscribed',
        ],

        'customer.note-created.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterNoteCreated',
        ],

        'checkout.order.save.after' => [
            'NexaMerchant\Webhooks\Listeners\Order@afterCreated',
        ],

        'sales.order.cancel.after' => [
            'NexaMerchant\Webhooks\Listeners\Order@afterCanceled',
        ],

        'sales.order.comment.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Order@afterCommented',
        ],

        'sales.invoice.save.after' => [
            'NexaMerchant\Webhooks\Listeners\Invoice@afterCreated',
        ],

        'sales.shipment.save.after' => [
            'NexaMerchant\Webhooks\Listeners\Shipment@afterCreated',
        ],

        'sales.refund.save.after' => [
            'NexaMerchant\Webhooks\Listeners\Refund@afterCreated',
        ],

        'catalog.product.create.after'  => [
            'NexaMerchant\Webhooks\Listeners\Product@afterCreate',
        ],
        'catalog.product.update.after'  => [
            'NexaMerchant\Webhooks\Listeners\Product@afterUpdate',
        ],
        'catalog.product.delete.before' => [
            'NexaMerchant\Webhooks\Listeners\Product@beforeDelete',
        ],
    ];
}
