<?php

namespace NexaMerchant\Webhooks\Http\Controllers\Api;

use Illuminate\Foundation\Validation\ValidatesRequests;

class WebhookController extends Controller
{
    // create a new webhook
    public function create(Request $request) {
        $request->validate([
            'webhook' => 'required',
            'webhook.url' => 'required',
            'webhook.topic' => 'required',
            'webhook.format' => 'required',
            'webhook.fields' => 'required',
            'webhook.fields.*' => 'required',
        ]);

        $webhook = Webhook::create($request->webhook);

        return response()->json([
            'data' => $webhook
        ]);
    }

    // update a webhook
    public function update(Request $request, $id) {
        $request->validate([
            'webhook' => 'required',
            'webhook.url' => 'required',
            'webhook.topic' => 'required',
            'webhook.format' => 'required',
            'webhook.fields' => 'required',
            'webhook.fields.*' => 'required',
        ]);

        $webhook = Webhook::findOrFail($id);
        $webhook->update($request->webhook);

        return response()->json([
            'data' => $webhook
        ]);
    }
    // delete a webhook
    public function delete($id) {
        $webhook = Webhook::findOrFail($id);
        $webhook->delete();

        return response()->json([
            'data' => $webhook
        ]);
    }
    // list all webhooks
    public function list(Request $request) {
        $webhooks = Webhook::where("user_id", Auth()->user()->id)->get();

        return response()->json([
            'data' => $webhooks
        ]);
    }
    // get a webhook
    public function get($id) {
        $webhook = Webhook::findOrFail($id);

        return response()->json([
            'data' => $webhook
        ]);
    }
    // test a webhook
    public function test(Request $request, $id) {
        $webhook = Webhook::findOrFail($id);

        $response = Http::post($webhook->url, [
            'data' => [
                'message' => 'This is a test message'
            ]
        ]);

        return response()->json([
            'data' => $response->json()
        ]);
    }

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