<?php

namespace Phobetor\Billomat\Client;

use Guzzle\Service\Client;
use Guzzle\Service\Description\ServiceDescription;
use Phobetor\Billomat\Client\Listener\ErrorHandlerListener;

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
 * @licence MIT
 */
class BillomatClient extends Client
{
    /**
     * Billomat API version
     */
    const LATEST_API_VERSION = '1.0';

    /**
     * @param string $billomatId
     * @param string $apiKey
     * @param string $version
     */
    public function __construct($billomatId, $apiKey, $version = self::LATEST_API_VERSION)
    {
        parent::__construct(
            '',
            array(
                'request.options' => array(
                    'headers' => array(
                        'Accept' => 'application/json'
                    ),
                ),
                'command.params' => array(
                        'api_key' => $apiKey
                )
            )
        );

        $this->setDescription(
            ServiceDescription::factory(
                sprintf(
                    __DIR__ . '/ServiceDescription/Billomat-%s.php',
                    $version
                )
            )
        );

        // Prefix the User-Agent by SDK version
        $this->setUserAgent('phobetor-billomat-php', true);

        // The base URL depends on the Billomat id
        $this->setBaseUrl(sprintf('https://%s.billomat.net', $billomatId));

        $this->getEventDispatcher()->addSubscriber(new ErrorHandlerListener());
    }

    /**
     * {@inheritdoc}
     */
    public function __call($method, $args = array())
    {
        $result = parent::__call(ucfirst($method), $args);

        switch ($method) {
            case 'getClients':
            case 'getClientPropertyValues':
            case 'getArticles':
            case 'getInvoices':
            case 'getInvoiceItems':
            case 'getTemplates':
            case 'getArticleProperties':
            case 'getClientProperties':
            case 'getUserProperties':
            case 'getTaxes':
            case 'getCountryTaxes':
            case 'getReminderTexts':
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
}
