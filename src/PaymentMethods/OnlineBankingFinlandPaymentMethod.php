<?php declare(strict_types=1);

namespace Adyen\Shopware\PaymentMethods;

use Adyen\Shopware\Handlers\OnlineBankingFinlandPaymentMethodHandler;

class OnlineBankingFinlandPaymentMethod implements PaymentMethodInterface
{
    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getName(): string
    {
        return 'Online Banking Finland';
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getDescription(): string
    {
        return 'Online Banking Finland';
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getPaymentHandler(): string
    {
        return OnlineBankingFinlandPaymentMethodHandler::class;
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getGatewayCode(): string
    {
        return 'ADYEN_EBANKING_FI';
    }

    /**
     * {@inheritDoc}
     *
     * @return string|null
     */
    public function getTemplate(): ?string
    {
        return null;
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getLogo(): string
    {
        return 'ebanking_FI.png';
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getType(): string
    {
        return 'redirect';
    }
}