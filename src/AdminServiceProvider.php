<?php



namespace  Elyt\Admin;


use Carbon\Laravel\ServiceProvider;
use Monolog\Logger;


class AdminServiceProvider extends  ServiceProvider
{
    public function register()
    {

//TEST
            $logger=new Logger('wjh');
            $logger->log('100','elyt/admin');
        $this->app->singleton('Test', function () {
            return new Test();
        });

    }


    public function boot()
    {
        return parent::boot(); // TODO: Change the autogenerated stub
    }
}