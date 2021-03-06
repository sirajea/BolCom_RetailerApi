<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Test\Integration\Handler\Transport;

use BolCom\RetailerApi\Client\ClientConfig;
use BolCom\RetailerApi\Infrastructure\ClientPool;
use BolCom\RetailerApi\Model\Transport\Query\GetShippingLabel;
use BolCom\RetailerApi\Model\Transport\TransportId;

class GetShippingLabelTest extends \PHPUnit\Framework\TestCase
{
    public function test__invoke()
    {
        $this->markTestSkipped('Unable to fetch shipping label, contacted bol.com about this issue.');

        $clientPool = ClientPool::configure(new ClientConfig(
            BOL_CLIENT_ID,
            BOL_CLIENT_SECRET,
            'https://api.bol.com/retailer-demo/'
        ));
        $messageBus = new \BolCom\RetailerApi\Infrastructure\MessageBus($clientPool);

        $messageBus->dispatch(GetShippingLabel::with(TransportId::fromScalar(312778947)));
    }
}
