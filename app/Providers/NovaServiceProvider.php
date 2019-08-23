<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use SmiCollateral\ChartDashboard\ChartDashboard;
use SmiCollateral\CardValueDashboard\CardValueDashboard;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the cards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            (new ChartDashboard)
                ->chartType('chart-bar')
                ->chartName('Collateral')
                ->dataChart([
                    'Alpha' => 30,
                    'Bravo' => 70,
                    'Charlie' => 50,
                    'Delta' => 10,
                ]),

            (new ChartDashboard)
                ->chartType('chart-bar')
                ->chartName('Collateral')
                ->dataChart([
                    'Alpha' => 50,
                    'Bravo' => 10,
                    'Charlie' => 70,
                    'Delta' => 30,
                ]),

            (new ChartDashboard)
                ->chartType('chart-doughnut')
                ->chartName('Collateral')
                ->dataChart([
                    'Alpha' => 50,
                    'Bravo' => 10,
                    'Charlie' => 70,
                    'Delta' => 30,
                ]),
            (new ChartDashboard)
                ->chartType('chart-doughnut')
                ->chartName('Collateral')
                ->dataChart([
                    'Alpha' => 30,
                    'Bravo' => 70,
                    'Charlie' => 50,
                    'Delta' => 10,
                ]),
            (new CardValueDashboard)
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
