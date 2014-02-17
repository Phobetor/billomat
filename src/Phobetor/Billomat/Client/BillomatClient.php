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
 * ARTICLE RELATED METHODS:
 * @method array getArticles(array $args = array()) {@command Billomat GetArticles}
 * @method array getArticle(array $args = array()) {@command Billomat GetArticle}
 * @method array createArticle(array $args = array()) {@command Billomat CreateArticle}
 * @method array updateArticle(array $args = array()) {@command Billomat UpdateArticle}
 * @method array deleteArticle(array $args = array()) {@command Billomat DeleteArticle}
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
        return parent::__call(ucfirst($method), $args);
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
