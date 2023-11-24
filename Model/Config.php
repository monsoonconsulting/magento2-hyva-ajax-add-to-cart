<?php
/**
 * Copyright © Monsoon Consulting. All rights reserved.
 * See LICENSE_MONSOON.txt for license details
 */
declare(strict_types=1);

namespace Monsoon\HyvaAjaxAddToCart\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class Config
 */
class Config implements ConfigInterface
{
    /**
     * Config constructor
     *
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        private readonly ScopeConfigInterface $scopeConfig
    ) {
    }

    /**
     * Is the AJAX add to cart option enabled?
     *
     * @param null|int|string $scopeCode
     * @return bool
     */
    public function isAjaxAddToCartEnabled($scopeCode = null): bool
    {
        return (bool)$this->scopeConfig->isSetFlag(
            self::XML_PATH_ENABLE_AJAX_ADD_TO_CART,
            ScopeInterface::SCOPE_STORE,
            $scopeCode
        );
    }

    /**
     * Get Ajax Add To Cart Delay
     *
     * @param null|int|string $scopeCode
     * @return string
     */
    public function getAjaxAddToCartDelay($scopeCode = null): string
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_AJAX_ADD_TO_CART_DELAY,
            ScopeInterface::SCOPE_STORE,
            $scopeCode
        );
    }

    /**
     * Get Ajax Add To Cart Selectors
     *
     * @param null|int|string $scopeCode
     * @return string
     */
    public function getAjaxAddToCartSelectors($scopeCode = null): string
    {
        return (string)$this->scopeConfig->getValue(
            self::XML_PATH_AJAX_ADD_TO_CART_SELECTORS,
            ScopeInterface::SCOPE_STORE,
            $scopeCode
        );
    }
}
