<?php

namespace Towoju5\STP\Service;

use Towoju5\STP\Request\SoapHttpClient;

class SoapSTPService
{
    /** @var \Towoju5\STP\Request\HttpClient */
    protected $http;

    /**
     * Create a stp service instance.
     *
     * @param  \Towoju5\STP\Request\SoapHttpClient  $http
     *
     * @return void
     */
    public function __construct(SoapHttpClient $http)
    {
        $this->http = $http;
    }
}
