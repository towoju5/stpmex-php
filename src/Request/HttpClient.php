<?php

namespace Towoju5\STP\Request;

interface HttpClient
{
    public function httpClient();
    public function endpoint(): string;
}
