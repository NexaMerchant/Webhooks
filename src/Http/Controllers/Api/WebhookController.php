<?php

namespace NexaMerchant\Webhooks\Http\Controllers\Api;

use Illuminate\Foundation\Validation\ValidatesRequests;

class WebhookController extends Controller
{
    // create a new webhook

    // update a webhook

    // delete a webhook

    // list all webhooks

    // get a webhook

    // test a webhook

    // list all webhook types
    // https://shopify.dev/docs/api/webhooks?reference=toml
    public function types(Request $request) {
        return response()->json([
            'data' => [
                'types' => [
                    'order.created',
                    'order.updated',
                    'order.deleted',
                    'order.paid',
                    'order.cancelled',
                    'order.refunded',
                    'order.shipped',
                    'order.completed',
                    'order.fulfilled',
                    'order.partially_fulfilled',
                    'order.holded',
                    'order.unholded',
                    'order.voided',
                    'order.failed',
                    'order.pending',
                    'order.processing',
                    'order.completed',
                    'order.cancelled',
                    'order.refunded',
                    'order.shipped',
                    'order.partially_shipped',
                    'order.holded',
                    'order.unholded',
                    'order.voided',
                    'order.failed',
                    'order.pending',
                    'order.processing',
                    'order.completed',
                    'order.cancelled',
                    'order.refunded',
                    'order.shipped',
                    'order.partially_shipped',
                    'order.holded',
                    'order.unholded',
                    'order.voided',
                    'order.failed',
                    'order.pending',
                    'order.processing',
                    'order.completed',
                    'order.cancelled',
                    'order.refunded',
                    'order.shipped',
                    'order.partially_shipped',
                    'order.holded',
                    'order.unholded',
                    'order.voided',
                    'order.failed',
                    'order.pending',
                    'order.processing',
                    'order.completed',
                    'order.cancelled',
                    'order.refunded',
                    'order.shipped',
                    // products
                    'product.created',
                    'product.updated',
                    'product.deleted',
                    'product.stock.updated',
                    'product.price.updated',
                    'product.image.updated',
                    'product.attribute.updated',
                    'product.attribute.deleted',
                    'product.attribute.created',
                    'product.option.updated',
                    'product.option.deleted',
                    'product.option.created',
                    'product.option_value.updated',
                    'product.option_value.deleted',
                    'product.option_value.created',
                    'product.category.updated',
                    'product.category.deleted',
                    'product.category.created',
                    'product.brand.updated',
                    'product.brand.deleted',
                    'product.brand.created',
                    'product.featured',
                    'product.unfeatured',
                    'product.published',
                    'product.unpublished',
                    'product.archived',
                    'product.unarchived',
                    'product.hidden',
                    'product.visible',
                    'product.approved',
                    'product.disapproved',
                    'product.reviewed',
                    'product.unreviewed',
                    'product.approved',
                    'product.disapproved',
                    // customers
                    'customer.created',
                    'customer.updated',
                    'customer.deleted',
                    'customer.address.created',
                    'customer.address.updated',
                    'customer.address.deleted',
                    'customer.address.default',
                    'customer.address.undefault',
                    'customer.address.shipping',
                    'customer.address.billing',
                    'customer.address.deleted',
                    'customer.address.updated',
                    'customer.address.created',
                    'customer.address.default',
                    'customer.address.undefault',

                    // shipping
                    'shipping.created',
                    'shipping.updated',
                    'shipping.deleted',
                    'shipping.method.created',
                ]
            ]
        ]);

    }
}