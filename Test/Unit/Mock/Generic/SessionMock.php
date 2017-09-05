<?php
/**
 * Yireo CheckoutTester2 for Magento
 *
 * @package     Yireo_CheckoutTester2
 * @author      Yireo (https://www.yireo.com/)
 * @copyright   Copyright 2017 Yireo (https://www.yireo.com/)
 * @license     Open Source License (OSL v3)
 */

declare(strict_types = 1);

namespace Yireo\CheckoutTester2\Test\Unit\Mock\Generic;

/**
 * Class SessionMock
 *
 * @package Yireo\CheckoutTester2\Test\Unit\Mock\Generic
 */
trait SessionMock
{
    /**
     * @return \Magento\Framework\Session\SessionManagerInterface
     */
    protected function getSessionMock()
    {
        $mock = $this->createMock('Magento\Framework\Session\SessionManagerInterface');

        return $mock;
    }
}