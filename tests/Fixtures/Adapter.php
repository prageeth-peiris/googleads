<?php

namespace Tests\Fixtures;

use Google\Ads\GoogleAds\Lib\V9\GoogleAdsClientBuilder;
use JoelButcher\GoogleAds\Adapters\AdapterAbstract;

class Adapter extends AdapterAbstract
{
    /**
     * @return GoogleAdsClientBuilder
     */
    protected function getClientBuilder(): GoogleAdsClientBuilder
    {
        return new GoogleAdsClientBuilder();
    }
}
