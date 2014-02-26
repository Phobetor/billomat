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
 * @method array deleteClient(array $args = array()) {@command Billomat DeleteClient}
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
 * @method array deleteArticle(array $args = array()) {@command Billomat DeleteArticle}
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
 * @method array deleteInvoice(array $args = array()) {@command Billomat DeleteInvoice}
 *
 * INVOICE ITEM RELATED METHODS:
 * @method array getInvoiceItems(array $args = array()) {@command Billomat GetInvoiceItems}
 * @method array getInvoiceItem(array $args = array()) {@command Billomat GetInvoiceItem}
 * @method array createInvoiceItem(array $args = array()) {@command Billomat CreateInvoiceItem}
 * @method array updateInvoiceItem(array $args = array()) {@command Billomat UpdateInvoiceItem}
 * @method array deleteInvoiceItem(array $args = array()) {@command Billomat DeleteInvoiceItem}
 *
 * TEMPLATE RELATED METHODS:
 * @method array getTemplates(array $args = array()) {@command Billomat GetTemplate}
 * @method array getTemplate(array $args = array()) {@command Billomat GetTemplate}
 * @method \Guzzle\Http\Message\Response getTemplatePreview(array $args = array()) {@command Billomat GetTemplatePreview}
 * @method array createTemplate(array $args = array()) {@command Billomat CreateTemplate}
 * @method array updateTemplate(array $args = array()) {@command Billomat UpdateTemplate}
 * @method array deleteTemplate(array $args = array()) {@command Billomat DeleteTemplate}
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
