<?php

namespace SmiCollateral\CardValueDashboard;

use Laravel\Nova\Card;

class CardValueDashboard extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = 'full';

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'card-value-dashboard';
    }

    public function dataValue (array $request)
    {
        return $this->withMeta([
            'data_value' => $request
        ]);
    }
}
