<?php
/**
 * Copyright © Monsoon Consulting. All rights reserved.
 * See LICENSE_MONSOON.txt for license details
 */
declare(strict_types=1);

namespace Monsoon\HyvaAjaxAddToCart\Model;

/**
 * Interface ConfigInterface
 */
interface ConfigInterface
{
    public const XML_PATH_ENABLE_AJAX_ADD_TO_CART = 'checkout/options/enable_ajax_add_to_cart';
    public const XML_PATH_AJAX_ADD_TO_CART_DELAY = 'checkout/options/ajax_add_to_cart_delay';

    /**
     * Is the AJAX add to cart option enabled?
     *
     * @param null|int|string $scopeCode
     * @return bool
     */

    public function isAjaxAddToCartEnabled($scopeCode = null): bool;

    /**
     * Get Ajax Add To Cart Delay
     *
     * @param null|int|string $scopeCode
     * @return string
     */
    public function getAjaxAddToCartDelay($scopeCode = null): string;
}
