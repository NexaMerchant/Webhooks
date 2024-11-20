<?php

namespace NexaMerchant\Webhooks\Helpers;

final class Utils {

    // Webhook topics for order
    const ORDER_CREATED = 'order.created';
    const ORDER_UPDATED = 'order.updated';
    const ORDER_DELETED = 'order.deleted';
    const ORDER_CANCELLED = 'order.cancelled';
    const ORDER_COMMENT = 'order.comment';
    const ORDER_SHIPPED = 'order.shipped';
    const ORDER_INVOICE = 'order.invoice';
    const ORDER_REFUND = 'order.refund';
    const ORDER_PAYMENT = 'order.payment';
    const ORDER_SHIPPING = 'order.shipping';

    // Webhook topics for product
    const PRODUCT_CREATED = 'product.created';
    const PRODUCT_UPDATED = 'product.updated';
    const PRODUCT_DELETED = 'product.deleted';
    const PRODUCT_STOCK_UPDATED = 'product.stock.updated';

    // Webhook topics for customer
    const CUSTOMER_CREATED = 'customer.created';
    const CUSTOMER_UPDATED = 'customer.updated';
    const CUSTOMER_DELETED = 'customer.deleted';

    // Webhook topics for customer address
    const CUSTOMER_ADDRESS_CREATED = 'customer.address.created';
    const CUSTOMER_ADDRESS_UPDATED = 'customer.address.updated';
    const CUSTOMER_ADDRESS_DELETED = 'customer.address.deleted';
    const CUSTOMER_ADDRESS_DEFAULT = 'customer.address.default';
    const CUSTOMER_ADDRESS_UNDEFAULT = 'customer.address.undefault';
    const CUSTOMER_ADDRESS_SHIPPING = 'customer.address.shipping';
    const CUSTOMER_ADDRESS_BILLING = 'customer.address.billing';

    // Webhook topics for shipping
    const SHIPPING_CREATED = 'shipping.created';
    const SHIPPING_UPDATED = 'shipping.updated';
    const SHIPPING_DELETED = 'shipping.deleted';

    // Webhook topics for product category
    const PRODUCT_CATEGORY_CREATED = 'product.category.created';
    const PRODUCT_CATEGORY_UPDATED = 'product.category.updated';
    const PRODUCT_CATEGORY_DELETED = 'product.category.deleted';

    // Webhook topics for product brand
    const PRODUCT_BRAND_CREATED = 'product.brand.created';
    const PRODUCT_BRAND_UPDATED = 'product.brand.updated';
    const PRODUCT_BRAND_DELETED = 'product.brand.deleted';

    // Webhook topics for product attribute
    const PRODUCT_ATTRIBUTE_CREATED = 'product.attribute.created';
    const PRODUCT_ATTRIBUTE_UPDATED = 'product.attribute.updated';
    const PRODUCT_ATTRIBUTE_DELETED = 'product.attribute.deleted';


    public static function getWebhookTopics() {
        return [
            self::ORDER_CREATED,
            self::ORDER_UPDATED,
            self::ORDER_DELETED,
            self::ORDER_CANCELLED,
            self::ORDER_COMMENT,
            self::ORDER_SHIPPED,
            self::ORDER_INVOICE,
            self::ORDER_REFUND,
            self::ORDER_PAYMENT,
            self::ORDER_SHIPPING,
            self::PRODUCT_CREATED,
            self::PRODUCT_UPDATED,
            self::PRODUCT_DELETED,
            self::PRODUCT_STOCK_UPDATED,
            self::CUSTOMER_CREATED,
            self::CUSTOMER_UPDATED,
            self::CUSTOMER_DELETED,
            self::CUSTOMER_ADDRESS_CREATED,
            self::CUSTOMER_ADDRESS_UPDATED,
            self::CUSTOMER_ADDRESS_DELETED,
            self::CUSTOMER_ADDRESS_DEFAULT,
            self::CUSTOMER_ADDRESS_UNDEFAULT,
            self::CUSTOMER_ADDRESS_SHIPPING,
            self::CUSTOMER_ADDRESS_BILLING,
            self::SHIPPING_CREATED,
            self::SHIPPING_UPDATED,
            self::SHIPPING_DELETED,
            self::PRODUCT_CATEGORY_CREATED,
            self::PRODUCT_CATEGORY_UPDATED,
            self::PRODUCT_CATEGORY_DELETED,
            self::PRODUCT_BRAND_CREATED,
            self::PRODUCT_BRAND_UPDATED,
            self::PRODUCT_BRAND_DELETED,
            self::PRODUCT_ATTRIBUTE_CREATED,
            self::PRODUCT_ATTRIBUTE_UPDATED,
            self::PRODUCT_ATTRIBUTE_DELETED,
        ];
    }
}
