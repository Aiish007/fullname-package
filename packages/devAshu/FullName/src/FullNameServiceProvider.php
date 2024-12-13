<?php 

namespace DevAshu\FullName;

use Illuminate\Support\ServiceProvider;
class FullNameServiceProvider extends ServiceProvider
{
    public function register()
    {
        // Register your helper or service
        $this->app->singleton('fullname', function () {
            return new FullNameService();
        });
    }

    public function boot()
    {
        // Example: Publish a configuration file
        $this->publishes([
            __DIR__.'/../config/fullname.php' => config_path('fullname.php'),
        ], 'config');
    }
}
