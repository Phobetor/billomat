# A PHP Billomat API Client

[![Latest Stable Version](https://poser.pugx.org/phobetor/billomat/v/stable.png)](https://packagist.org/packages/phobetor/billomat) [![License](https://poser.pugx.org/phobetor/billomat/license.png)](https://packagist.org/packages/phobetor/billomat)

## Introduction

This is a Billomat PHP client for interacting with the REST Billomat API.

## Extend of this client

All methods on the following assets are supported:

* [Clients](http://www.billomat.com/en/api/clients)
  * [Properties](http://www.billomat.com/en/api/clients/properties)
* [Articles](http://www.billomat.com/en/api/articles)
  * [Properties](http://www.billomat.com/en/api/articles/properties)
* [Invoices](http://www.billomat.com/en/api/invoices)
  * [Items](http://www.billomat.com/en/api/invoices/items)
  * [Payments](http://www.billomat.com/en/api/invoices/payments)
  * [Tags](http://www.billomat.com/en/api/invoices/tags)
* [Credit Notes](http://www.billomat.com/en/api/credit-notes)
  * [Items](http://www.billomat.com/en/api/credit-notes/items)
* [Templates](http://www.billomat.com/en/api/templates)
* ~~Settings~~
  * [Article Properties](http://www.billomat.com/en/api/settings/article-properties)
  * [Client Properties](http://www.billomat.com/en/api/settings/client-properties)
  * [User Properties](http://www.billomat.com/en/api/settings/user-properties)
  * [Taxes](http://www.billomat.com/en/api/settings/taxes)
  * [Tax free countries](http://www.billomat.com/en/api/settings/tax-free-countries)
  * [Dunning Levels](http://www.billomat.com/en/api/settings/reminder-texts)
  * [Email Templates](http://www.billomat.com/en/api/settings/email-vorlagen)

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

The methods `get*Pdf` (when called with `'format' => 'pdf'`) and `getTemplatePreview` return a guzzle response. You can easily extract the file content:

```php
// Fetch an invoice pdf file
$response = $billomat->getInvoicePdf(array(
    'id' => 133713371337,
    'format' => 'pdf'
));
$content = (string)$response->getBody();
```

All the other methods return `array` values.

### Exception handling

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
catch (\Phobetor\Billomat\Exception\BadRequestException $e) {
    // Some of the given data must have been bad. $e->getMessage() could help.
}
catch (\Phobetor\Billomat\ExceptionInterface $e) {
    // Something else failed. Maybe there is no connection to the API servers.
}
```

### Complete reference

CLIENT RELATED METHODS [doc](http://www.billomat.com/en/api/clients):
* array getClients(array $args = array())
* array getClient(array $args = array())
* array getClientMyself(array $args = array())
* array createClient(array $args = array())
* array updateClient(array $args = array())
* void deleteClient(array $args = array())

CLIENT PROPERTY VALUE RELATED METHODS [doc](http://www.billomat.com/en/api/clients/properties):
* array getClientPropertyValues(array $args = array())
* array getClientPropertyValue(array $args = array())
* array setClientPropertyValue(array $args = array())

ARTICLE RELATED METHODS [doc](http://www.billomat.com/en/api/articles):
* array getArticles(array $args = array())
* array getArticle(array $args = array())
* array createArticle(array $args = array())
* array updateArticle(array $args = array())
* void deleteArticle(array $args = array())

ARTICLE PROPERTY VALUE RELATED METHODS [doc](http://www.billomat.com/en/api/articles/properties):
* array getArticlePropertyValues(array $args = array())
* array getArticlePropertyValue(array $args = array())
* array setArticlePropertyValue(array $args = array())

INVOICE RELATED METHODS [doc](http://www.billomat.com/en/api/invoices):
* array getInvoices(array $args = array())
* array getInvoice(array $args = array())
* array createInvoice(array $args = array())
* array updateInvoice(array $args = array())
* array completeInvoice(array $args = array())
* \Guzzle\Http\Message\Response getInvoicePdf(array $args = array())
* array signInvoice(array $args = array())
* array sendInvoiceEmail(array $args = array())
* array cancelInvoice(array $args = array())
* array undoCancelInvoice(array $args = array())
* void deleteInvoice(array $args = array())

INVOICE ITEM RELATED METHODS [doc](http://www.billomat.com/en/api/invoices/items):
* array getInvoiceItems(array $args = array())
* array getInvoiceItem(array $args = array())
* array createInvoiceItem(array $args = array())
* array updateInvoiceItem(array $args = array())
* void deleteInvoiceItem(array $args = array())

INVOICE PAYMENT RELATED METHODS [doc](http://www.billomat.com/en/api/invoices/payments):
* array getInvoicePayments(array $args = array())
* array getInvoicePayment(array $args = array())
* array createInvoicePayment(array $args = array())
* array deleteInvoicePayment(array $args = array())

INVOICE TAG RELATED METHODS [doc](http://www.billomat.com/en/api/invoices/tags):
* array getInvoiceTagCloud(array $args = array())
* array getInvoiceTags(array $args = array())
* array getInvoiceTag(array $args = array())
* array createInvoiceTag(array $args = array())
* array deleteInvoiceTag(array $args = array())

CREDIT NOTE RELATED METHODS [doc](http://www.billomat.com/en/api/credit-notes):
* array getCreditNotes(array $args = array())
* array getCreditNote(array $args = array())
* array createCreditNote(array $args = array())
* array updateCreditNote(array $args = array())
* array completeCreditNote(array $args = array())
* \Guzzle\Http\Message\Response getCreditNotePdf(array $args = array())
* array signCreditNote(array $args = array())
* array sendCreditNoteEmail(array $args = array())
* void deleteCreditNote(array $args = array())

CREDIT NOTE ITEM RELATED METHODS [doc](http://www.billomat.com/en/api/credit-notes/items):
* array getCreditNoteItems(array $args = array())
* array getCreditNoteItem(array $args = array())
* array createCreditNoteItem(array $args = array())
* array updateCreditNoteItem(array $args = array())
* void deleteCreditNoteItem(array $args = array())

TEMPLATE RELATED METHODS [doc](http://www.billomat.com/en/api/templates):
* array getTemplates(array $args = array())
* array getTemplate(array $args = array())
* \Guzzle\Http\Message\Response getTemplatePreview(array $args = array())
* array createTemplate(array $args = array())
* array updateTemplate(array $args = array())
* void deleteTemplate(array $args = array())

ARTICLE PROPERTY RELATED METHODS [doc](http://www.billomat.com/en/api/settings/article-properties):
* array getArticleProperties(array $args = array())
* array getArticleProperty(array $args = array())
* array createArticleProperty(array $args = array())
* array updateArticleProperty(array $args = array())
* void deleteArticleProperty(array $args = array())

CLIENT PROPERTY RELATED METHODS [doc](http://www.billomat.com/en/api/settings/client-properties):
* array getClientProperties(array $args = array())
* array getClientProperty(array $args = array())
* array createClientProperty(array $args = array())
* array updateClientProperty(array $args = array())
* void deleteClientProperty(array $args = array())

USER PROPERTY RELATED METHODS [doc](http://www.billomat.com/en/api/settings/user-properties):
* array getUserProperties(array $args = array())
* array getUserProperty(array $args = array())
* array createUserProperty(array $args = array())
* array updateUserProperty(array $args = array())
* void deleteUserProperty(array $args = array())

TAX RELATED METHODS [doc](http://www.billomat.com/en/api/settings/taxes):
* array getTaxes(array $args = array())
* array getTax(array $args = array())
* array createTax(array $args = array())
* array updateTax(array $args = array())
* void deleteTax(array $args = array())

COUNTRY TAX RELATED METHODS [doc](http://www.billomat.com/en/api/settings/tax-free-countries):
* array getCountryTaxes(array $args = array())
* array getCountryTax(array $args = array())
* array createCountryTax(array $args = array())
* array updateCountryTax(array $args = array())
* void deleteCountryTax(array $args = array())

REMINDER TEXT RELATED METHODS [doc](http://www.billomat.com/en/api/settings/reminder-texts):
* array getReminderTexts(array $args = array())
* array getReminderText(array $args = array())
* array createReminderText(array $args = array())
* array updateReminderText(array $args = array())
* void deleteReminderText(array $args = array())

EMAIL TEMPLATE RELATED METHODS [doc](http://www.billomat.com/en/api/settings/email-vorlagen):
* array getEmailTemplates(array $args = array())
* array getEmailTemplate(array $args = array())
* array createEmailTemplate(array $args = array())
* array updateEmailTemplate(array $args = array())
* void deleteEmailTemplate(array $args = array())

USER PROPERTY VALUE RELATED METHODS [doc](http://www.billomat.com/en/api/users/properties):
* array getUserPropertyValues(array $args = array())
* array getUserPropertyValue(array $args = array())
* array setUserPropertyValue(array $args = array())

### API glitches handled by this client internally

The Billomat API provides two data formats, xml and json. The json format is used here. Due to an xml to json conversion in the Billomat API lists have a data inconsistency in the json responses.

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

This issue is addressed by this client internally. You can be sure that lists are numeric arrays (like in the lower example) no matter how many elements are returned.

## Advanced usage

This client is built on top of Guzzle, so you can take advantage of all its features. Please refer to the [Guzzle documentation](http://docs.guzzlephp.org/en/latest/) to learn more …
