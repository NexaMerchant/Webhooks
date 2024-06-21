<?php
namespace NexaMerchant\Webhooks\Console\Commands;

use Nicelizhi\Apps\Console\Commands\CommandInterface;

class UnInstall extends CommandInterface 

{
    protected $signature = 'Webhooks:uninstall';

    protected $description = 'Uninstall Webhooks an app';

    public function getAppVer() {
        return config("Webhooks.ver");
    }

    public function getAppName() {
        return config("Webhooks.name");
    }

    public function handle()
    {
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Webhooks UnInstall cannelled");
            return false;
        }
    }
}