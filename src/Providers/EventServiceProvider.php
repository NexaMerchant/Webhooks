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
        # Customer events
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

        'customer.delete.before' => [
            'NexaMerchant\Webhooks\Listeners\Customer@beforeDelete',
        ],

        'customer.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterDelete',
        ],

        'customer.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterUpdate',
        ],

        'customer.address.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterAddressCreated',
        ],

        'customer.address.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterAddressUpdated',
        ],

        'customer.address.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterAddressDeleted',
        ],
        #Order events
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

        'sales.order.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Order@afterUpdate',
        ],

        'sales.order.delete.before' => [
            'NexaMerchant\Webhooks\Listeners\Order@beforeDelete',
        ],

        'sales.order.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Order@afterDelete',
        ],

        'sales.order.invoice.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Invoice@afterCreated',
        ],

        'sales.order.shipment.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Shipment@afterCreated',
        ],

        'sales.order.refund.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Refund@afterCreated',
        ],

        #Product events
        'catalog.product.create.after'  => [
            'NexaMerchant\Webhooks\Listeners\Product@afterCreate',
        ],
        'catalog.product.update.after'  => [
            'NexaMerchant\Webhooks\Listeners\Product@afterUpdate',
        ],
        'catalog.product.delete.before' => [
            'NexaMerchant\Webhooks\Listeners\Product@beforeDelete',
        ],
        'catalog.product.delete.after'  => [
            'NexaMerchant\Webhooks\Listeners\Product@afterDelete',
        ],
        'catalog.product.save.after'    => [
            'NexaMerchant\Webhooks\Listeners\Product@afterSave',
        ],
        'catalog.product.status.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterStatusUpdate',
        ],
        'catalog.product.price.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterPriceUpdate',
        ],
        'catalog.product.attribute.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterAttributeCreate',
        ],
        'catalog.product.attribute.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterAttributeUpdate',
        ],
        'catalog.product.attribute.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterAttributeDelete',
        ],
        'catalog.product.category.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterCategoryCreate',
        ],
        'catalog.product.category.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterCategoryDelete',
        ],
        'catalog.product.image.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterImageCreate',
        ],
        'catalog.product.image.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterImageDelete',
        ],
        'catalog.product.link.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterLinkCreate',
        ],
        'catalog.product.link.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterLinkDelete',
        ],
        'catalog.product.option.create.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterOptionCreate',
        ],
        'catalog.product.option.update.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterOptionUpdate',
        ],
        'catalog.product.option.delete.after' => [
            'NexaMerchant\Webhooks\Listeners\Product@afterOptionDelete',
        ],
    ];
}
