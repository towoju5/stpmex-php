<?php

namespace Towoju5\STP\Service;

use Towoju5\STP\Request\RestHttpClient;

class RestSTPService
{
    /** @var \Towoju5\STP\Request\RestHttpClient */
    protected $http;

    /**
     * Create a stp service instance.
     *
     * @param  \Towoju5\STP\Request\RestHttpClient  $http
     *
     * @return void
     */
    public function __construct(RestHttpClient $http)
    {
        $this->http = $http;
    }
}
