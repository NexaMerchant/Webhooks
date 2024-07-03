<?php
return [
    /**
     * Webhooks Dashboard.
     */
    [
        'key'        => 'Webhooks',
        'name'       => 'Webhooks::app.Admin.Webhooks.demo',
        'route'      => 'webhooks.admin.example.demo',
        'sort'       => 1,
        'icon'       => 'icon-dashboard',
    ],
    [
        'key'        => 'Webhooks.Settings',
        'name'       => 'Webhooks::app.Admin.Webhooks.settings',
        'route'      => 'webhooks.admin.settings.index',
        'sort'       => 2,
        'icon'       => 'icon-dashboard',
    ],
];