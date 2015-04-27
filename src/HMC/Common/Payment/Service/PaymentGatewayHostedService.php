<?php
namespace HMC\Common\Payment\Service;
use HMC\Common\Payment\Dto\PaymentRequestDTO;
use HMC\Common\Payment\Dto\PaymentResponseDTO;
use HMC\Core\Payment\Service\Exception\PaymentException;

/**
 * <p>Certain Payment Integrations allow you to use a Hosted Solution,
 * such as PayPal Express and SagePay Form.
 * This API allows you to create the call to send a user to the Gateway's Hosted page
 * and to capture and record transaction responses back from them.</p>
 *
 * @author Elbert Bautista (elbertbautista)
 */
interface PaymentGatewayHostedService {

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function requestHostedEndpoint(PaymentRequestDTO $paymentRequestDTO);

}