<?php
/*
 * This file is part of the prooph/service-bus.
 * (c) 2014-2015 prooph software GmbH <contact@prooph.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Date: 30.10.14 - 18:10
 */

namespace Prooph\ServiceBus\Container;

use Prooph\ServiceBus\EventBus;
use Prooph\ServiceBus\Plugin\Router\EventRouter;

/**
 * Class EventBusFactory
 *
 * @package Prooph\ServiceBus\Container
 * @author Alexander Miertsch <kontakt@codeliner.ws>
 */
class EventBusFactory extends AbstractBusFactory
{

    /**
     * @inheritdoc
     */
    protected function getBusClass()
    {
        return EventBus::class;
    }

    /**
     * @inheritdoc
     */
    protected function getBusConfigKey()
    {
        return 'event_bus';
    }

    /**
     * @inheritdoc
     */
    protected function getDefaultRouterClass()
    {
        return EventRouter::class;
    }
}