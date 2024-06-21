<?php
namespace NexaMerchant\Webhooks\Console\Commands;

use Nicelizhi\Apps\Console\Commands\CommandInterface;

class Install extends CommandInterface 

{
    protected $signature = 'Webhooks:install';

    protected $description = 'Install Webhooks an app';

    public function getAppVer() {
        return config("Webhooks.ver");
    }

    public function getAppName() {
        return config("Webhooks.name");
    }

    public function handle()
    {
        $this->info("Install app: Webhooks");
        if (!$this->confirm('Do you wish to continue?')) {
            // ...
            $this->error("App Webhooks Install cannelled");
            return false;
        }
    }
}