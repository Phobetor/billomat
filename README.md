# A PHP Billomat API Client

[![Latest Stable Version](https://poser.pugx.org/phobetor/billomat/v/stable.png)](https://packagist.org/packages/phobetor/billomat)

## Introduction

This is a Billomat PHP client for interacting with the REST Billomat API.

## Extend of this client

All methods on the following assets are supported:

* [Clients](http://www.billomat.com/en/api/clients)
** [Properties](http://www.billomat.com/en/api/clients/properties)
* [Articles](http://www.billomat.com/en/api/articles)
** [Properties](http://www.billomat.com/en/api/articles/properties)
* [Invoices](http://www.billomat.com/en/api/invoices)
** [Items](http://www.billomat.com/en/api/invoices/items)
* [Templates](http://www.billomat.com/en/api/templates)
* Settings
** [Article Properties](http://www.billomat.com/en/api/settings/article-properties)
** [Client Properties](http://www.billomat.com/en/api/settings/client-properties)
** [User Properties](http://www.billomat.com/en/api/settings/user-properties)
** [Taxes](http://www.billomat.com/en/api/settings/taxes)
** [Tax free countries](http://www.billomat.com/en/api/settings/tax-free-countries)
** [Dunning Levels](http://www.billomat.com/en/api/settings/reminder-texts)
** [Email Templates](http://www.billomat.com/en/api/settings/email-vorlagen)

## Dependencies

* [Guzzle library](http://guzzlephp.org): >= 3.5

## Integration with frameworks

If you want to use this client with Symfony 2, there is a ready-to-use bundle:

* [billomat-bundle](https://github.com/phobetor/billomat-bundle): a Symfony 2 bundle

## Installation via composer

```sh
php composer.phar require phobetor/billomat:~1.0
```

## How to use this

Instantiate the client:

```php
use Phobetor\Billomat\Client\BillomatClient;

$billomat = new BillomatClient('my-id', 'my-api-key');
```

The client will find the correct endpoint automatically based on your id.

All methods are accessible from that client object:

```php
// Get the client with id 133713371337
$client = $billomat->getClient(array(
    'id' => 133713371337
));

// Create a new client
$client = $billomat->createClient(array(
    'client' => array(
        'number' => 424242424242,
        'name' => 'client-name'
    )
));
```

### Calling methods

All method names are based on the Billomat API URLs and follow the [CRUD](http://de.wikipedia.org/wiki/CRUD) naming schema whenever possible.

All parameter names are exactly mapped. Therefore, you can refer to the [official API documentation](http://www.billomat.com/en/api).
Deep links are given in the asset list above and the method list below.

Here is the user update method as an example for the [client](http://www.billomat.com/en/api/clients) asset:

```php
// Update a client
$client = $billomat->updateClient(array(
    'id' => 133713371337,
    'client' => array(
        'number' => 424242424242,
        'name' => 'client-name'
    )
));
```

### Return values

All `delete*` methods return nothing.

`getInvoicePdf` (when called with `'format' => 'pdf'`) and `getTemplatePreview` return a guzzle response. You can easily extract the file content:

```php
// Fetch an invoice pdf file
$response = $billomat->getInvoicePdf(array(
    'id' => 133713371337,
    'format' => 'pdf'
));
$content = (string)$response->getBody();
```

All the other methods return `array` values.

### Exceptions handling

This client creates exceptions from Billomat errors based on the HTTP status code and filled with the error message provided by the Billomat API.
All exceptions implement the `Phobetor\Billomat\Exception\ExceptionInterface` interface, so you can catch this to handle everything.
You can find all exceptions in the `Phobetor\Billomat\Exception` folder.

Usage example:

```php
try {
    $client = $billomat->updateClient(array(
        'id' => 133713371337,
        'client' => array(
            'number' => 424242424242,
            'name' => 'client-name'
        )
    ));
}
catch (\Phobetor\Billomat\Exception\NotFoundException $e) {
    // There seems to be no such client.
}
catch (\Phobetor\Billomat\Exception\BadRequest $e) {
    // Some of the given data must have been bad. $e->getMessage() could help.
}
catch (\Phobetor\Billomat\ExceptionInterface $e) {
    // Something else failed. maybe no connection to the API servers.
}
```

### Complete reference

CLIENT RELATED METHODS:
* array getClients(array $args = array())      [doc](http://www.billomat.com/en/api/clients)
* array getClient(array $args = array())       [doc](http://www.billomat.com/en/api/clients)
* array getClientMyself(array $args = array()) [doc](http://www.billomat.com/en/api/clients)
* array createClient(array $args = array())    [doc](http://www.billomat.com/en/api/clients)
* array updateClient(array $args = array())    [doc](http://www.billomat.com/en/api/clients)
* void deleteClient(array $args = array())     [doc](http://www.billomat.com/en/api/clients)

CLIENT PROPERTY VALUE RELATED METHODS:
* array getClientPropertyValues(array $args = array()) [doc](http://www.billomat.com/en/api/clients/properties)
* array getClientPropertyValue(array $args = array())  [doc](http://www.billomat.com/en/api/clients/properties)
* array setClientPropertyValue(array $args = array())  [doc](http://www.billomat.com/en/api/clients/properties)

ARTICLE RELATED METHODS:
* array getArticles(array $args = array())   [doc](http://www.billomat.com/en/api/articles)
* array getArticle(array $args = array())    [doc](http://www.billomat.com/en/api/articles)
* array createArticle(array $args = array()) [doc](http://www.billomat.com/en/api/articles)
* array updateArticle(array $args = array()) [doc](http://www.billomat.com/en/api/articles)
* void deleteArticle(array $args = array())  [doc](http://www.billomat.com/en/api/articles)

ARTICLE PROPERTY VALUE RELATED METHODS:
* array getArticlePropertyValues(array $args = array()) [doc](http://www.billomat.com/en/api/articles/properties)
* array getArticlePropertyValue(array $args = array())  [doc](http://www.billomat.com/en/api/articles/properties)
* array setArticlePropertyValue(array $args = array())  [doc](http://www.billomat.com/en/api/articles/properties)

INVOICE RELATED METHODS:
* array getInvoices(array $args = array())                           [doc](http://www.billomat.com/en/api/invoices)
* array getInvoice(array $args = array())                            [doc](http://www.billomat.com/en/api/invoices)
* array createInvoice(array $args = array())                         [doc](http://www.billomat.com/en/api/invoices)
* array updateInvoice(array $args = array())                         [doc](http://www.billomat.com/en/api/invoices)
* array completeInvoice(array $args = array())                       [doc](http://www.billomat.com/en/api/invoices)
* \Guzzle\Http\Message\Response getInvoicePdf(array $args = array()) [doc](http://www.billomat.com/en/api/invoices)
* array signInvoice(array $args = array())                           [doc](http://www.billomat.com/en/api/invoices)
* array sendInvoiceEmail(array $args = array())                      [doc](http://www.billomat.com/en/api/invoices)
* array cancelInvoice(array $args = array())                         [doc](http://www.billomat.com/en/api/invoices)
* array undoCancelInvoice(array $args = array())                     [doc](http://www.billomat.com/en/api/invoices)
* void deleteInvoice(array $args = array())                          [doc](http://www.billomat.com/en/api/invoices)

INVOICE ITEM RELATED METHODS:
* array getInvoiceItems(array $args = array())   [doc](http://www.billomat.com/en/api/invoices/items)
* array getInvoiceItem(array $args = array())    [doc](http://www.billomat.com/en/api/invoices/items)
* array createInvoiceItem(array $args = array()) [doc](http://www.billomat.com/en/api/invoices/items)
* array updateInvoiceItem(array $args = array()) [doc](http://www.billomat.com/en/api/invoices/items)
* void deleteInvoiceItem(array $args = array())  [doc](http://www.billomat.com/en/api/invoices/items)

TEMPLATE RELATED METHODS:
* array getTemplates(array $args = array())                               [doc](http://www.billomat.com/en/api/templates)
* array getTemplate(array $args = array())                                [doc](http://www.billomat.com/en/api/templates)
* \Guzzle\Http\Message\Response getTemplatePreview(array $args = array()) [doc](http://www.billomat.com/en/api/templates)
* array createTemplate(array $args = array())                             [doc](http://www.billomat.com/en/api/templates)
* array updateTemplate(array $args = array())                             [doc](http://www.billomat.com/en/api/templates)
* void deleteTemplate(array $args = array())                              [doc](http://www.billomat.com/en/api/templates)

ARTICLE PROPERTY RELATED METHODS:
* array getArticleProperties(array $args = array())  [doc](http://www.billomat.com/en/api/settings/article-properties)
* array getArticleProperty(array $args = array())    [doc](http://www.billomat.com/en/api/settings/article-properties)
* array createArticleProperty(array $args = array()) [doc](http://www.billomat.com/en/api/settings/article-properties)
* array updateArticleProperty(array $args = array()) [doc](http://www.billomat.com/en/api/settings/article-properties)
* void deleteArticleProperty(array $args = array())  [doc](http://www.billomat.com/en/api/settings/article-properties)

CLIENT PROPERTY RELATED METHODS:
* array getClientProperties(array $args = array())  [doc](http://www.billomat.com/en/api/settings/client-properties)
* array getClientProperty(array $args = array())    [doc](http://www.billomat.com/en/api/settings/client-properties)
* array createClientProperty(array $args = array()) [doc](http://www.billomat.com/en/api/settings/client-properties)
* array updateClientProperty(array $args = array()) [doc](http://www.billomat.com/en/api/settings/client-properties)
* void deleteClientProperty(array $args = array())  [doc](http://www.billomat.com/en/api/settings/client-properties)

USER PROPERTY RELATED METHODS:
* array getUserProperties(array $args = array())  [doc](http://www.billomat.com/en/api/settings/user-properties)
* array getUserProperty(array $args = array())    [doc](http://www.billomat.com/en/api/settings/user-properties)
* array createUserProperty(array $args = array()) [doc](http://www.billomat.com/en/api/settings/user-properties)
* array updateUserProperty(array $args = array()) [doc](http://www.billomat.com/en/api/settings/user-properties)
* void deleteUserProperty(array $args = array())  [doc](http://www.billomat.com/en/api/settings/user-properties)

TAX RELATED METHODS:
* array getTaxes(array $args = array())  [doc](http://www.billomat.com/en/api/settings/taxes)
* array getTax(array $args = array())    [doc](http://www.billomat.com/en/api/settings/taxes)
* array createTax(array $args = array()) [doc](http://www.billomat.com/en/api/settings/taxes)
* array updateTax(array $args = array()) [doc](http://www.billomat.com/en/api/settings/taxes)
* void deleteTax(array $args = array())  [doc](http://www.billomat.com/en/api/settings/taxes)

COUNTRY TAX RELATED METHODS:
* array getCountryTaxes(array $args = array())  [doc](http://www.billomat.com/en/api/settings/tax-free-countries)
* array getCountryTax(array $args = array())    [doc](http://www.billomat.com/en/api/settings/tax-free-countries)
* array createCountryTax(array $args = array()) [doc](http://www.billomat.com/en/api/settings/tax-free-countries)
* array updateCountryTax(array $args = array()) [doc](http://www.billomat.com/en/api/settings/tax-free-countries)
* void deleteCountryTax(array $args = array())  [doc](http://www.billomat.com/en/api/settings/tax-free-countries)

REMINDER TEXT RELATED METHODS:
* array getReminderTexts(array $args = array())   [doc](http://www.billomat.com/en/api/settings/reminder-texts)
* array getReminderText(array $args = array())    [doc](http://www.billomat.com/en/api/settings/reminder-texts)
* array createReminderText(array $args = array()) [doc](http://www.billomat.com/en/api/settings/reminder-texts)
* array updateReminderText(array $args = array()) [doc](http://www.billomat.com/en/api/settings/reminder-texts)
* void deleteReminderText(array $args = array())  [doc](http://www.billomat.com/en/api/settings/reminder-texts)

EMAIL TEMPLATE RELATED METHODS:
* array getEmailTemplates(array $args = array())   [doc](http://www.billomat.com/en/api/settings/email-vorlagen)
* array getEmailTemplate(array $args = array())    [doc](http://www.billomat.com/en/api/settings/email-vorlagen)
* array createEmailTemplate(array $args = array()) [doc](http://www.billomat.com/en/api/settings/email-vorlagen)
* array updateEmailTemplate(array $args = array()) [doc](http://www.billomat.com/en/api/settings/email-vorlagen)
* void deleteEmailTemplate(array $args = array())  [doc](http://www.billomat.com/en/api/settings/email-vorlagen)

USER PROPERTY VALUE RELATED METHODS:
* array getUserPropertyValues(array $args = array()) [doc](http://www.billomat.com/en/api/users/properties)
* array getUserPropertyValue(array $args = array())  [doc](http://www.billomat.com/en/api/users/properties)
* array setUserPropertyValue(array $args = array())  [doc](http://www.billomat.com/en/api/users/properties)

### API glitches handled by this client internally

The Billomat API provides two data formats, xml and json. The json format is used here. Due to an xml to json conversion in the Billomat API lists have a data inconsistencies in the json responses.

If there is ony one element in a list the API returns something like this:
```php
array(
    'clients' => array(
        'client' => array(
            'id' => 133713371337,
            /* […] */
        ),
    ),
)
```

If there are more elements in a list the API returns something like this:
```php
array(
    'clients' => array(
        'client' => array(
            array(
                'id' => 133713371337,
                /* […] */
            ),
            array(
                'id' => 133713371338,
                /* […] */
            ),
            /* […] */
        ),
    ),
)
```

The type of `$result['clients']['client']` changes from an associative array to a numeric array of associative arrays.

This issue is addressed by this client internally. You can be sure that lists ar numeric arrays no matter how many elements are returned.

## Advanced usage

This client is built on top of Guzzle, so you can take advantage of all its features. Please refer to the [Guzzle documentation](http://docs.guzzlephp.org/en/latest/) to learn more …
