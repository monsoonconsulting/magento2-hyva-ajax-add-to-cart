<?php
/**
 * Copyright © Monsoon Consulting. All rights reserved.
 * See LICENSE_MONSOON.txt for license details.
 */

declare(strict_types=1);

namespace Monsoon\HyvaAjaxAddToCart\Block;

use Magento\Framework\View\Element\Template;
use Monsoon\HyvaAjaxAddToCart\Model\ConfigInterface;

/**
 * Class AddToCart
 */
class AddToCart extends Template
{
    /**
     * AddToCart contructor
     *
     * @param Template\Context $context
     * @param ConfigInterface $config
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        private readonly ConfigInterface $config,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Render block HTML
     *
     * @return string
     */
    protected function _toHtml(): string
    {
        if (!$this->getTemplate() || !$this->config->isAjaxAddToCartEnabled()) {
            return '';
        }
        return $this->fetchView($this->getTemplateFile());
    }

    /**
     * Get Ajax Add To Cart Delay (in milliseconds)
     *
     * @return string
     */
    public function getDelay(): string
    {
        return $this->config->getAjaxAddToCartDelay();
    }

    /**
     * Get Ajax Add To Cart Selectors
     *
     * @return string
     */
    public function getSelectors(): string
    {
        return $this->config->getAjaxAddToCartSelectors();
    }
}
