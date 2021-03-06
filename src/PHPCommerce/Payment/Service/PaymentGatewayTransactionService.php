<?php
namespace PHPCommerce\Payment\Service;
use PHPCommerce\Payment\Dto\PaymentRequestDTO;
use PHPCommerce\Payment\Dto\PaymentResponseDTO;
use PHPCommerce\Payment\Service\Exception\PaymentException;

/**
 * <p>This is a decoupled interface that provides
 * the basic functions needed to create the normal BILLABLE Credit Card Transactions</p>
 *
 * <p>The intention of these method implementations are to make a Server to Server API call.
 * Depending on the Gateway implementation, the overall goal and meaning of the method may vary:
 * For example, a module can implement the AUTHORIZE method:
 * <ul>
 * <li>Either to send Credit Card information directly (Server to Server) to the gateway to perform the transaction</li>
 * <li>Or to confirm an AUTHORIZATION process (some gateways dont handle a token based process through a Transparent Redirect)</li>
 * <li>OR handle both (the implementation will do one or the other based on the passed in parameters)</li>
 * </ul>
 * </p>
 *
 * <p>Please check the documentation of the implementing module to determine intended goal.</p>
 *
 * <p>Note: in the case where a gateway doesn't support confirming the transaction before it is submitted
 * (i.e. paymentGatewayConfigurationService.completeCheckoutOnCallback() == true)
 * The PaymentGatewayWebResponseService will handle translation of the final transaction response from the gateway.
 * There is no need to re-call this service if the gateway doesn't support confirming the transaction.</p>
 *
 * @see {@link PaymentGatewayWebResponseService}
 *
 * @author Elbert Bautista (elbertbautista)
 */
interface PaymentGatewayTransactionService {
    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function authorize(PaymentRequestDTO $paymentRequestDTO);

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function capture(PaymentRequestDTO $paymentRequestDTO);

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function authorizeAndCapture(PaymentRequestDTO $paymentRequestDTO);

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function reverseAuthorize(PaymentRequestDTO $paymentRequestDTO);

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function refund(PaymentRequestDTO $paymentRequestDTO);

    /**
     * @param PaymentRequestDTO $paymentRequestDTO
     * @throws PaymentException
     * @return PaymentResponseDTO
     */
    public function voidPayment(PaymentRequestDTO $paymentRequestDTO);
}
