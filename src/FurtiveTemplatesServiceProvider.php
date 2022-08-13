<?php

namespace Skys215\FurtiveTemplates;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class FurtiveTemplatesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'furtive-templates');
        $this->publishes([
            __DIR__.'/../views/common' => resource_path('views/vendor/furtive-templates/common'),
        ], 'furtive-views');

        $this->publishes([
            __DIR__.'/../views/templates' => resource_path('views/vendor/furtive-templates/templates'),
        ], 'furtive-templates');

        Paginator::defaultView('furtive-templates::common.paginator');
        Paginator::defaultSimpleView('furtive-templates::common.simple_paginator');

        Blade::directive('ocb', function () {
            return '<?php echo "{{ " ?>';
        });

        Blade::directive('ccb', function () {
            return '<?php echo " }}" ?>';
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
