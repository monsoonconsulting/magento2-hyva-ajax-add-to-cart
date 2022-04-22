<?php
/**
 * Copyright © Monsoon Consulting. All rights reserved.
 * See LICENSE_MONSOON.txt for license details
 */
declare(strict_types=1);

namespace Monsoon\HyvaAjaxAddToCart\Scope;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config
{
    private const XML_PATH_ENABLE_AJAX_ADD_TO_CART = 'checkout/options/enable_ajax_add_to_cart';

    /** @var ScopeConfigInterface */
    private ScopeConfigInterface $scopeConfig;

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig
    ) {
        $this->scopeConfig = $scopeConfig;
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
}
