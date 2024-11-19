<?php

namespace NexaMerchant\Webhooks\Models;

use Illuminate\Database\Eloquent\Model;
use NexaMerchant\Webhooks\Contracts\Webhook as WebhookContract;

class Webhook extends Model implements WebhookContract
{
    protected $fillable = ['name', 'url', 'event'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}