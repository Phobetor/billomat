<?php

namespace Phobetor\Billomat\Client;

use Guzzle\Service\Client;
use Phobetor\Billomat\Client\DescriptionLoader\BillomatServiceDescriptionForApiAppCredentialsLoader;
use Phobetor\Billomat\Client\DescriptionLoader\BillomatServiceDescriptionForApiKeyCredentialsLoader;
use Phobetor\Billomat\Client\Listener\ErrorHandlerListener;
use Phobetor\Billomat\Exception\TooManyRequestsException;

/**
 * Billomat client to interact with Billomat REST API
 *
 * CLIENT RELATED METHODS:
 * @method array getClients(array $args = array()) {@command Billomat GetClients}
 * @method array getClient(array $args = array()) {@command Billomat GetClient}
 * @method array getClientMyself(array $args = array()) {@command Billomat GetClientMyself}
 * @method array createClient(array $args = array()) {@command Billomat CreateClient}
 * @method array updateClient(array $args = array()) {@command Billomat UpdateClient}
 * @method void deleteClient(array $args = array()) {@command Billomat DeleteClient}
 *
 * CLIENT PROPERTY VALUE RELATED METHODS:
 * @method array getClientPropertyValues(array $args = array()) {@command Billomat GetClientPropertyValues}
 * @method array getClientPropertyValue(array $args = array()) {@command Billomat GetClientPropertyValue}
 * @method array setClientPropertyValue(array $args = array()) {@command Billomat SetClientPropertyValue}
 *
 * ARTICLE RELATED METHODS:
 * @method array getArticles(array $args = array()) {@command Billomat GetArticles}
 * @method array getArticle(array $args = array()) {@command Billomat GetArticle}
 * @method array createArticle(array $args = array()) {@command Billomat CreateArticle}
 * @method array updateArticle(array $args = array()) {@command Billomat UpdateArticle}
 * @method void deleteArticle(array $args = array()) {@command Billomat DeleteArticle}
 *
 * ARTICLE PROPERTY VALUE RELATED METHODS:
 * @method array getArticlePropertyValues(array $args = array()) {@command Billomat GetArticlePropertyValues}
 * @method array getArticlePropertyValue(array $args = array()) {@command Billomat GetArticlePropertyValue}
 * @method array setArticlePropertyValue(array $args = array()) {@command Billomat SetArticlePropertyValue}
 *
 * INVOICE RELATED METHODS:
 * @method array getInvoices(array $args = array()) {@command Billomat GetInvoices}
 * @method array getInvoice(array $args = array()) {@command Billomat GetInvoice}
 * @method array createInvoice(array $args = array()) {@command Billomat CreateInvoice}
 * @method array updateInvoice(array $args = array()) {@command Billomat UpdateInvoice}
 * @method array completeInvoice(array $args = array()) {@command Billomat CompleteInvoice}
 * @method \Guzzle\Http\Message\Response getInvoicePdf(array $args = array()) {@command Billomat GetInvoicePdf}
 * @method array signInvoice(array $args = array()) {@command Billomat SignInvoice}
 * @method array sendInvoiceEmail(array $args = array()) {@command Billomat SendInvoiceEmail}
 * @method array cancelInvoice(array $args = array()) {@command Billomat CancelInvoice}
 * @method array undoCancelInvoice(array $args = array()) {@command Billomat UndoCancelInvoice}
 * @method void deleteInvoice(array $args = array()) {@command Billomat DeleteInvoice}
 *
 * INVOICE ITEM RELATED METHODS:
 * @method array getInvoiceItems(array $args = array()) {@command Billomat GetInvoiceItems}
 * @method array getInvoiceItem(array $args = array()) {@command Billomat GetInvoiceItem}
 * @method array createInvoiceItem(array $args = array()) {@command Billomat CreateInvoiceItem}
 * @method array updateInvoiceItem(array $args = array()) {@command Billomat UpdateInvoiceItem}
 * @method void deleteInvoiceItem(array $args = array()) {@command Billomat DeleteInvoiceItem}
 *
 * INVOICE TAG RELATED METHODS:
 * @method array getInvoiceTagCloud(array $args = array()) {@command Billomat GetInvoiceTagCloud}
 * @method array getInvoiceTags(array $args = array()) {@command Billomat GetInvoiceTags}
 * @method array getInvoiceTag(array $args = array()) {@command Billomat GetInvoiceTag}
 * @method array createInvoiceTag(array $args = array()) {@command Billomat CreateInvoiceTag}
 * @method array deleteInvoiceTag(array $args = array()) {@command Billomat DeleteInvoiceTag}
 *
 * INVOICE PAYMENT RELATED METHODS:
 * @method array getInvoicePayments(array $args = array()) {@command Billomat GetInvoicePayments}
 * @method array getInvoicePayment(array $args = array()) {@command Billomat GetInvoicePayment}
 * @method array createInvoicePayment(array $args = array()) {@command Billomat CreateInvoicePayment}
 * @method array deleteInvoicePayment(array $args = array()) {@command Billomat DeleteInvoicePayment}
 *
 * CREDIT NOTE RELATED METHODS:
 * @method array getCreditNotes(array $args = array()) {@command Billomat GetCreditNotes}
 * @method array getCreditNote(array $args = array()) {@command Billomat GetCreditNote}
 * @method array createCreditNote(array $args = array()) {@command Billomat CreateCreditNote}
 * @method array updateCreditNote(array $args = array()) {@command Billomat UpdateCreditNote}
 * @method array completeCreditNote(array $args = array()) {@command Billomat CompleteCreditNote}
 * @method \Guzzle\Http\Message\Response getCreditNotePdf(array $args = array()) {@command Billomat GetCreditNotePdf}
 * @method array signCreditNote(array $args = array()) {@command Billomat SignCreditNote}
 * @method array sendCreditNoteEmail(array $args = array()) {@command Billomat SendCreditNoteEmail}
 * @method void deleteCreditNote(array $args = array()) {@command Billomat DeleteCreditNote}
 *
 * CREDIT NOTE ITEM RELATED METHODS:
 * @method array getCreditNoteItems(array $args = array()) {@command Billomat GetCreditNoteItems}
 * @method array getCreditNoteItem(array $args = array()) {@command Billomat GetCreditNoteItem}
 * @method array createCreditNoteItem(array $args = array()) {@command Billomat CreateCreditNoteItem}
 * @method array updateCreditNoteItem(array $args = array()) {@command Billomat UpdateCreditNoteItem}
 * @method void deleteCreditNoteItem(array $args = array()) {@command Billomat DeleteCreditNoteItem}
 *
 * CREDIT NOTE PAYMENT RELATED METHODS:
 * @method array getCreditNotePayments(array $args = array()) {@command Billomat GetCreditNotePayments}
 * @method array getCreditNotePayment(array $args = array()) {@command Billomat GetCreditNotePayment}
 * @method array createCreditNotePayment(array $args = array()) {@command Billomat CreateCreditNotePayment}
 * @method array deleteCreditNotePayment(array $args = array()) {@command Billomat DeleteCreditNotePayment}
 *
 * TEMPLATE RELATED METHODS:
 * @method array getTemplates(array $args = array()) {@command Billomat GetTemplate}
 * @method array getTemplate(array $args = array()) {@command Billomat GetTemplate}
 * @method \Guzzle\Http\Message\Response getTemplatePreview(array $args = array()) {@command Billomat GetTemplatePreview}
 * @method array createTemplate(array $args = array()) {@command Billomat CreateTemplate}
 * @method array updateTemplate(array $args = array()) {@command Billomat UpdateTemplate}
 * @method void deleteTemplate(array $args = array()) {@command Billomat DeleteTemplate}
 *
 * ARTICLE PROPERTY RELATED METHODS:
 * @method array getArticleProperties(array $args = array()) {@command Billomat GetArticleProperties}
 * @method array getArticleProperty(array $args = array()) {@command Billomat GetArticleProperty}
 * @method array createArticleProperty(array $args = array()) {@command Billomat CreateArticleProperty}
 * @method array updateArticleProperty(array $args = array()) {@command Billomat UpdateArticleProperty}
 * @method void deleteArticleProperty(array $args = array()) {@command Billomat DeleteArticleProperty}
 *
 * CLIENT PROPERTY RELATED METHODS:
 * @method array getClientProperties(array $args = array()) {@command Billomat GetClientProperties}
 * @method array getClientProperty(array $args = array()) {@command Billomat GetClientProperty}
 * @method array createClientProperty(array $args = array()) {@command Billomat CreateClientProperty}
 * @method array updateClientProperty(array $args = array()) {@command Billomat UpdateClientProperty}
 * @method void deleteClientProperty(array $args = array()) {@command Billomat DeleteClientProperty}
 *
 * USER PROPERTY RELATED METHODS:
 * @method array getUserProperties(array $args = array()) {@command Billomat GetUserProperties}
 * @method array getUserProperty(array $args = array()) {@command Billomat GetUserProperty}
 * @method array createUserProperty(array $args = array()) {@command Billomat CreateUserProperty}
 * @method array updateUserProperty(array $args = array()) {@command Billomat UpdateUserProperty}
 * @method void deleteUserProperty(array $args = array()) {@command Billomat DeleteUserProperty}
 *
 * TAX RELATED METHODS:
 * @method array getTaxes(array $args = array()) {@command Billomat GetTaxes}
 * @method array getTax(array $args = array()) {@command Billomat GetTax}
 * @method array createTax(array $args = array()) {@command Billomat CreateTax}
 * @method array updateTax(array $args = array()) {@command Billomat UpdateTax}
 * @method void deleteTax(array $args = array()) {@command Billomat DeleteTax}
 *
 * COUNTRY TAX RELATED METHODS:
 * @method array getCountryTaxes(array $args = array()) {@command Billomat GetCountryTaxes}
 * @method array getCountryTax(array $args = array()) {@command Billomat GetCountryTax}
 * @method array createCountryTax(array $args = array()) {@command Billomat CreateCountryTax}
 * @method array updateCountryTax(array $args = array()) {@command Billomat UpdateCountryTax}
 * @method void deleteCountryTax(array $args = array()) {@command Billomat DeleteCountryTax}
 *
 * REMINDER TEXT RELATED METHODS:
 * @method array getReminderTexts(array $args = array()) {@command Billomat GetReminderTexts}
 * @method array getReminderText(array $args = array()) {@command Billomat GetReminderText}
 * @method array createReminderText(array $args = array()) {@command Billomat CreateReminderText}
 * @method array updateReminderText(array $args = array()) {@command Billomat UpdateReminderText}
 * @method void deleteReminderText(array $args = array()) {@command Billomat DeleteReminderText}
 *
 * EMAIL TEMPLATE RELATED METHODS:
 * @method array getEmailTemplates(array $args = array()) {@command Billomat GetEmailTemplates}
 * @method array getEmailTemplate(array $args = array()) {@command Billomat GetEmailTemplate}
 * @method array createEmailTemplate(array $args = array()) {@command Billomat CreateEmailTemplate}
 * @method array updateEmailTemplate(array $args = array()) {@command Billomat UpdateEmailTemplate}
 * @method void deleteEmailTemplate(array $args = array()) {@command Billomat DeleteEmailTemplate}
 *
 * USER PROPERTY VALUE RELATED METHODS:
 * @method array getUserPropertyValues(array $args = array()) {@command Billomat GetUserPropertyValues}
 * @method array getUserPropertyValue(array $args = array()) {@command Billomat GetUserPropertyValue}
 * @method array setUserPropertyValue(array $args = array()) {@command Billomat SetUserPropertyValue}
 *
 * @licence MIT
 */
class BillomatClient extends Client
{
    /**
     * Billomat API version
     */
    const LATEST_API_VERSION = '1.0';

    /**
     * @var null|int
     */
    private $rateLimitRemaining = null;

    /**
     * @var null|int
     */
    private $rateLimitReset = null;

    /**
     * @var bool
     */
    private $doWaitForRateLimitReset = false;

    /**
     * @param string $billomatId
     * @param string $apiKey
     * @param int $apiAppId
     * @param string $apiAppSecret
     * @param bool $doWaitForRateLimitReset
     * @param string $version
     */
    public function __construct($billomatId, $apiKey, $apiAppId = null, $apiAppSecret = null, $doWaitForRateLimitReset = false, $version = self::LATEST_API_VERSION)
    {
        if (!empty($apiAppId) && !empty($apiAppSecret)) {
            $descriptionLoader = new BillomatServiceDescriptionForApiAppCredentialsLoader();
            $commandParameters = array(
                'api_key' => $apiKey,
                'api_app_id' => $apiAppId,
                'api_app_secret' => $apiAppSecret
            );
        }
        else {
            $descriptionLoader = new BillomatServiceDescriptionForApiKeyCredentialsLoader();
            $commandParameters = array(
                'api_key' => $apiKey,
            );
        }

        parent::__construct(
            '',
            array(
                'request.options' => array(
                    'headers' => array(
                        'Accept' => 'application/json'
                    ),
                ),
                'command.params' => $commandParameters
            )
        );

        $this->setDescription(
            $descriptionLoader->load(
                sprintf('%s/ServiceDescription/Billomat-%s.php', __DIR__, $version)
            )
        );

        // Prefix the User-Agent by SDK version
        $this->setUserAgent('phobetor-billomat-php', true);

        // The base URL depends on the Billomat id
        $this->setBaseUrl(sprintf('https://%s.billomat.net', $billomatId));

        $this->getEventDispatcher()->addSubscriber(new ErrorHandlerListener());

        $this->doWaitForRateLimitReset = $doWaitForRateLimitReset;
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args = array())
    {
        // no automatic rate limit handling, just execute the command
        if (!$this->doWaitForRateLimitReset) {
            return $this->executeCommand($method, $args);
        }

        $result = null;
        do {
            $caughtRateLimitException = false;
            try {
                $result = $this->executeCommand($method, $args);
            }
            catch (TooManyRequestsException $e) {
                $caughtRateLimitException = true;

                if (null !== $e->getRateLimitReset()) {
                    // reset time was found, calculate exact interval to wait
                    $now = new \DateTime();
                    $now->setTimezone(new \DateTimeZone('UTC'));
                    $reset = new \DateTime(sprintf('@%d', $e->getRateLimitReset()));

                    $secondsToWait = $reset->getTimestamp() - $now->getTimestamp() + 1;
                }
                else {
                    // reset time was not found, best guess 5 minutes.
                    // if this is too short, the next loop will end here again.
                    $secondsToWait = 5 * 60;
                }

                // sleep until rate limit reset
                sleep($secondsToWait);
            }
            catch (\Exception $e) {
                throw $e;
            }
        }
        while ($caughtRateLimitException);

        return $result;
    }

    private function executeCommand($method, $args = array()) {
        $command = $this->getCommand(ucfirst($method), isset($args[0]) ? $args[0] : array());

        // take over rate limit data for public access
        if ($command->getResponse()->hasHeader('X-Rate-Limit-Remaining')) {
            $this->rateLimitRemaining = (int)(string)$command->getResponse()->getHeader('X-Rate-Limit-Remaining');
        }
        if ($command->getResponse()->hasHeader('X-Rate-Limit-Reset')) {
            $this->rateLimitReset = (int)(string)$command->getResponse()->getHeader('X-Rate-Limit-Reset');
        }

        $result = $command->getResult();

        switch ($method) {
            case 'getClients':
            case 'getClientPropertyValues':
            case 'getArticles':
            case 'getArticlePropertyValues':
            case 'getInvoices':
            case 'getInvoiceItems':
            case 'getInvoiceTagCloud':
            case 'getInvoiceTags':
            case 'getInvoicePayments':
            case 'getCreditNotes':
            case 'getCreditNoteItems':
            case 'getCreditNotePayments':
            case 'getTemplates':
            case 'getArticleProperties':
            case 'getClientProperties':
            case 'getUserProperties':
            case 'getTaxes':
            case 'getCountryTaxes':
            case 'getReminderTexts':
            case 'getEmailTemplates':
            case 'getUserPropertyValues':
                foreach ($result as $listKey => $list) {
                    if (is_array($list)) {
                        foreach ($list as $itemKey => $item) {
                            // this is an object
                            if (!empty($item['id'])) {
                                // make it a list
                                $result[$listKey][$itemKey] = array($item);
                            }
                        }
                    }
                }
                break;
        }

        return $result;
    }

    /**
     * Get current Billomat API version
     *
     * @return string
     */
    public function getApiVersion()
    {
        return $this->serviceDescription->getApiVersion();
    }

    /**
     * @return int|null
     */
    public function getRateLimitRemaining()
    {
        return $this->rateLimitRemaining;
    }

    /**
     * @return int|null
     */
    public function getRateLimitReset()
    {
        return $this->rateLimitReset;
    }

    /**
     * @param boolean $doWaitForRateLimitReset
     */
    public function setDoWaitForRateLimitReset($doWaitForRateLimitReset)
    {
        $this->doWaitForRateLimitReset = (bool)$doWaitForRateLimitReset;
    }
}
