<?php
/**
 * Copyright © Reach Digital (https://www.reachdigital.io/)
 * See LICENSE.txt for license details.
 */
declare(strict_types=1);

namespace BolCom\RetailerApi\Model\Offer\CommandHandler;

use BolCom\RetailerApi\Model\Offer\Command\UpdateOffer;
use BolCom\RetailerApi\Model\ProcessStatus\ProcessStatus;

interface UpdateOfferHandlerInterface
{
    /**
     * @param UpdateOffer $updateOffer
     *
     * @return ProcessStatus
     */
    public function __invoke(UpdateOffer $updateOffer): ProcessStatus;
}
