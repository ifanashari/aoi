<?php

namespace SmiCollateral\ChartDashboard;

use Laravel\Nova\Card;

class ChartDashboard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/2';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'chart-dashboard';
    }

    /**
     * Set the chart type.
     *
     * @return string
     */
    public function chartType($request)
    {
        return $this->withMeta([
            'chart_type' => $request
        ]);
    }

    /**
     * Set the chart name.
     *
     * @return string
     */
    public function chartName($request)
    {
        return $this->withMeta([
            'chart_name' => $request
        ]);
    }

    /**
     * Set the chart data.
     *
     * @return string
     */
    public function dataChart(array $request)
    {
        return $this->withMeta([
            'data_chart' => $request
        ]);
    }
}
