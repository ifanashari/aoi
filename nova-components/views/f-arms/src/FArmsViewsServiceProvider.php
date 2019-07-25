<?php

namespace NovaCustomViews\FArmsViews;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Str;
use Illuminate\Support\ServiceProvider;

class FArmsViewsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            $this->provideToScript($this->attachCustomViews('f-arms'));
            Nova::script('f-arms-views', __DIR__.'/../dist/js/views.js');
            Nova::style('f-arms-views', __DIR__.'/../dist/css/views.css');
        });
    }

    private function attachCustomViews ($resource) {
        $resourceName = Str::plural(Str::snake($resource, '-'));
        return [$resourceName => json_decode('{"index":{"route":"index","component":"Index","name":"f-arms-index-view"}}', true)];
    }

    private function provideToScript($variables) {
        if (isset(Nova::$jsonVariables['novaCustomViews'])) {
            $variables = array_merge_recursive(Nova::$jsonVariables['novaCustomViews'], $variables);
        }
        Nova::provideToScript(['novaCustomViews' => $variables]);
    }
}
