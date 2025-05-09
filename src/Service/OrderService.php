<?php

namespace Towoju5\STP\Service;

use Towoju5\STP\Utils\Chain;
use Towoju5\STP\Exceptions\STPException;

class OrderService extends RestSTPService
{
    public function create(array $data): int
    {
        $signature = ($http = $this->http)->client->getSignature(
            Chain::generate($data)
        );

        $request = $http->makeRequest('put', 'ordenPago/registra', array_merge($data, [
            'firma' => $signature,
        ]));

        $result = json_decode($request->getBody())->resultado;

        if (isset($result->descripcionError)) {
            throw new STPException($result->descripcionError, $result->id);
        }

        return $result->id;
    }
}
