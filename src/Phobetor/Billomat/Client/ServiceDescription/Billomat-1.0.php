<?php

$clientParameter = array(
    'description' => 'Client',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'client',
    'required' => true,
    'properties' => array(
        'archived' => array(
            'description' => 'State of archival storage (1=archived, 0=active)',
            'type' => 'integer',
            'enum' => array(1, 0),
            'sentAs' => 'archived',
            'required' => false,
        ),
        'number_pre' => array(
            'description' => 'Prefix. Default: Value from settings',
            'type' => 'string',
            'sentAs' => 'number_pre',
            'required' => false,
        ),
        'number' => array(
            'description' => 'Sequential number. Default: Next free number',
            'type' => 'integer',
            'sentAs' => 'number',
            'required' => false,
        ),
        'number_length' => array(
            'description' => 'Minimum length of the customer number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ),
        'name' => array(
            'description' => 'Company name',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false,
        ),
        'street' => array(
            'description' => 'Street',
            'type' => 'string',
            'sentAs' => 'street',
            'required' => false,
        ),
        'zip' => array(
            'description' => 'Zip code',
            'type' => 'string',
            'sentAs' => 'zip',
            'required' => false,
        ),
        'city' => array(
            'description' => 'City',
            'type' => 'string',
            'sentAs' => 'city',
            'required' => false,
        ),
        'state' => array(
            'description' => 'State, county, district, region',
            'type' => 'string',
            'sentAs' => 'state',
            'required' => false,
        ),
        'country_code' => array(
            'description' => 'Country code as ISO 3166 Alpha-2. Default: Value from your own company',
            'type' => 'string',
            'sentAs' => 'country_code',
            'required' => false,
        ),
        'first_name' => array(
            'description' => 'First name',
            'type' => 'string',
            'sentAs' => 'first_name',
            'required' => false,
        ),
        'last_name' => array(
            'description' => 'Last name',
            'type' => 'string',
            'sentAs' => 'last_name',
            'required' => false,
        ),
        'salutation' => array(
            'description' => 'Salutation',
            'type' => 'string',
            'sentAs' => 'salutation',
            'required' => false,
        ),
        'phone' => array(
            'description' => 'Phone number',
            'type' => 'string',
            'sentAs' => 'phone',
            'required' => false,
        ),
        'fax' => array(
            'description' => 'Fax number',
            'type' => 'string',
            'sentAs' => 'fax',
            'required' => false,
        ),
        'mobile' => array(
            'description' => 'Mobile number',
            'type' => 'string',
            'sentAs' => 'mobile',
            'required' => false,
        ),
        'email' => array(
            'description' => 'Valid email address',
            'type' => 'string',
            'sentAs' => 'email',
            'required' => false,
        ),
        'www' => array(
            'description' => 'Website URL (w/o http)',
            'type' => 'string',
            'sentAs' => 'www',
            'required' => false,
        ),
        'tax_number' => array(
            'description' => 'Tax number',
            'type' => 'string',
            'sentAs' => 'tax_number',
            'required' => false,
        ),
        'vat_number' => array(
            'description' => 'VAT number',
            'type' => 'string',
            'sentAs' => 'vat_number',
            'required' => false,
        ),
        'bank_account_number' => array(
            'description' => 'Bank account number',
            'type' => 'string',
            'sentAs' => 'bank_account_number',
            'required' => false,
        ),
        'bank_account_owner' => array(
            'description' => 'Bank account owner',
            'type' => 'string',
            'sentAs' => 'bank_account_owner',
            'required' => false,
        ),
        'bank_number' => array(
            'description' => 'Bank identifier code',
            'type' => 'string',
            'sentAs' => 'bank_number',
            'required' => false,
        ),
        'bank_name' => array(
            'description' => 'Bank name',
            'type' => 'string',
            'sentAs' => 'bank_name',
            'required' => false,
        ),
        'bank_swift' => array(
            'description' => 'SWIFT/BIC',
            'type' => 'string',
            'sentAs' => 'bank_swift',
            'required' => false,
        ),
        'bank_iban' => array(
            'description' => 'IBAN',
            'type' => 'string',
            'sentAs' => 'bank_iban',
            'required' => false,
        ),
        'sepa_mandate' => array(
            'description' => 'Mandate reference of a SEPA Direct Debit mandate',
            'type' => 'string',
            'sentAs' => 'sepa_mandate',
            'required' => false,
        ),
        'sepa_mandate_date' => array(
            'description' => 'Date of issue of the SEPA Direct Debit mandate',
            'type' => 'string',
            'sentAs' => 'sepa_mandate_date',
            'required' => false,
        ),
        'tax_rule' => array(
            'description' => 'Tax Rule',
            'type' => 'string',
            'enum' => array('TAX', 'NO_TAX', 'COUNTRY', 'BALLZ'),
            'sentAs' => 'tax_rule',
            'required' => false,
        ),
        'net_gross' => array(
            'description' => 'Price basis (net, gross, according to account settings)',
            'type' => 'string',
            'enum' => array('NET', 'GROSS', 'SETTINGS'),
            'sentAs' => 'net_gross',
            'required' => false,
        ),
        'note' => array(
            'description' => 'Note',
            'type' => 'string',
            'sentAs' => 'note',
            'required' => false,
        ),
        'discount_rate_type' => array(
            'description' => 'Type of the default value for discount rate',
            'type' => 'string',
            'enum' => array('SETTINGS', 'ABSOLUTE', 'RELATIVE'),
            'sentAs' => 'discount_rate_type',
            'required' => false,
        ),
        'discount_rate' => array(
            'description' => 'Discount rate',
            'type' => 'number',
            'sentAs' => 'discount_rate',
            'required' => false,
        ),
        'discount_days_type' => array(
            'description' => 'Type of the default value for discount interval',
            'type' => 'string',
            'enum' => array('SETTINGS', 'ABSOLUTE', 'RELATIVE'),
            'sentAs' => 'discount_days_type',
            'required' => false,
        ),
        'discount_days' => array(
            'description' => 'Discount period in days',
            'type' => 'integer',
            'sentAs' => 'discount_days',
            'required' => false,
        ),
        'due_days_type' => array(
            'description' => 'Type of the default value for maturity',
            'type' => 'string',
            'enum' => array('SETTINGS', 'ABSOLUTE', 'RELATIVE'),
            'sentAs' => 'due_days_type',
            'required' => false,
        ),
        'due_days' => array(
            'description' => 'Maturity in days from invoice date',
            'type' => 'integer',
            'sentAs' => 'due_days',
            'required' => false,
        ),
        'reminder_due_days_type' => array(
            'description' => 'Type of the default value for reminder maturity',
            'type' => 'string',
            'enum' => array('SETTINGS', 'ABSOLUTE', 'RELATIVE'),
            'sentAs' => 'reminder_due_days_type',
            'required' => false,
        ),
        'reminder_due_days' => array(
            'description' => 'Reminder maturity',
            'type' => 'integer',
            'sentAs' => 'reminder_due_days',
            'required' => false,
        ),
        'offer_validity_days_type' => array(
            'description' => 'Type of the default value for validity of estimates',
            'type' => 'string',
            'enum' => array('SETTINGS', 'ABSOLUTE', 'RELATIVE'),
            'sentAs' => 'offer_validity_days_type',
            'required' => false,
        ),
        'offer_validity_days' => array(
            'description' => 'Validity of estimates',
            'type' => 'integer',
            'sentAs' => 'offer_validity_days',
            'required' => false,
        ),
        'price_group' => array(
            'description' => 'Articles can have several prices. The pricegroup defines which price applies to the client.',
            'type' => 'integer',
            'sentAs' => 'price_group',
            'required' => false,
        ),
    )
);

$articleParameter = array(
    'description' => 'Article',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'article',
    'required' => true,
    'properties' => array(
        'number_pre' => array(
            'description' => 'Prefix. Default: Value from settings',
            'type' => 'string',
            'sentAs' => 'number_pre',
            'required' => false,
        ),
        'number' => array(
            'description' => 'Sequential number. Default: Next free number',
            'type' => 'integer',
            'sentAs' => 'number',
            'required' => false,
        ),
        'number_length' => array(
            'description' => 'Minimum length of the article number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ),
        'title' => array(
            'description' => 'Title',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ),
        'description' => array(
            'description' => 'Description',
            'type' => 'string',
            'sentAs' => 'description',
            'required' => false,
        ),
        'sales_price' => array(
            'description' => 'Price',
            'type' => 'number',
            'sentAs' => 'sales_price',
            'required' => false,
        ),
        'sales_price2' => array(
            'description' => 'Price for clients which are members of pricegroup 2. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price2',
            'required' => false,
        ),
        'sales_price3' => array(
            'description' => 'Price for clients which are members of pricegroup 3. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price3',
            'required' => false,
        ),
        'sales_price4' => array(
            'description' => 'Price for clients which are members of pricegroup 4. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price4',
            'required' => false,
        ),
        'sales_price5' => array(
            'description' => 'Price for clients which are members of pricegroup 5. The normal price is used if no price is defined.',
            'type' => 'number',
            'sentAs' => 'sales_price5',
            'required' => false,
        ),
        'currency_code' => array(
            'description' => 'ISO currency code',
            'type' => 'string',
            'sentAs' => 'currency_code',
            'required' => false,
        ),
        'unit_id' => array(
            'description' => 'ID of the chosen unit',
            'type' => 'integer',
            'sentAs' => 'unit_id',
            'required' => false,
        ),
        'tax_id' => array(
            'description' => 'ID of the chosen tax rate',
            'type' => 'integer',
            'sentAs' => 'tax_id',
            'required' => false,
        ),
    )
);

$invoiceItemParameter = array(
    'description' => 'Invoice item',
    'location' => 'json',
    'type' => 'object',
    'properties' => array(
        'invoice_id' => array(
            'description' => 'ID of the invoice',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => false,
        ),
        'article_id' => array(
            'description' => 'ID of the article, sets additionally the values from the article on creation',
            'type' => 'integer',
            'sentAs' => 'article_id',
            'required' => false,
        ),
        'unit' => array(
            'description' => 'Unit',
            'type' => 'string',
            'sentAs' => 'unit',
            'required' => false,
        ),
        'quantity' => array(
            'description' => 'Quantity',
            'type' => 'number',
            'sentAs' => 'quantity',
            'required' => false,
        ),
        'unit_price' => array(
            'description' => 'Price per unit. Default: 0.0000',
            'type' => 'number',
            'sentAs' => 'unit_price',
            'required' => false,
        ),
        'tax_name' => array(
            'description' => 'Name of the tax. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'tax_name',
            'required' => false,
        ),
        'tax_rate' => array(
            'description' => 'Rate of taxation. Default: Value taken from the settings',
            'type' => 'number',
            'sentAs' => 'tax_rate',
            'required' => false,
        ),
        'title' => array(
            'description' => 'Title',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ),
        'description' => array(
            'description' => 'Description',
            'type' => 'string',
            'sentAs' => 'description',
            'required' => false,
        ),
        'reduction' => array(
            'description' => 'Reduction (absolute or percent: 10/10%)',
            'type' => 'string',
            'sentAs' => 'reduction',
            'required' => false,
        ),
    ),
);

// special case when invoice item is created directly
$invoiceItemParameterCreate = $invoiceItemParameter;
$invoiceItemParameterCreate['properties']['invoice_id']['required'] = true;

$invoiceParameter = array(
    'description' => 'Invoice',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'invoice',
    'required' => true,
    'properties' => array(
        'client_id'  => array(
            'description' => 'ID of the client',
            'type'        => 'integer',
            'sentAs'      => 'client_id',
            'required'    => true
        ),
        'contact_id'  => array(
            'description' => 'ID of the contact',
            'type'        => 'integer',
            'sentAs'      => 'contact_id',
            'required'    => false
        ),
        'address' => array(
            'description' => 'Address. Default: the client’s address',
            'type' => 'string',
            'sentAs' => 'address',
            'required' => false,
        ),
        'number_pre' => array(
            'description' => 'Invoice number prefix. Default: Value from settings',
            'type' => 'string',
            'sentAs' => 'number_pre',
            'required' => false,
        ),
        'number' => array(
            'description' => 'Sequential number. Default: Next free number',
            'type' => 'integer',
            'sentAs' => 'number',
            'required' => false,
        ),
        'number_length' => array(
            'description' => 'Minimum length of the invoice number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ),
        'date' => array(
            'description' => 'Invoice date. Default: today',
            'type' => 'string',
            'sentAs' => 'date',
            'required' => false,
        ),
        'supply_date' => array(
            'description' => 'supply/delivery date',
            'type' => 'string',
            'sentAs' => 'supply_date',
            'required' => false,
        ),
        'supply_date_type' => array(
            'description' => 'Type of supply/delivery date',
            'type' => 'string',
            'enum' => array('SUPPLY_DATE', 'DELIVERY_DATE', 'SUPPLY_TEXT', 'DELIVERY_TEXT'),
            'sentAs' => 'supply_date_type',
            'required' => false,
        ),
        'due_date' => array(
            'description' => 'Due date. Default: date + due days taken from the settings',
            'type' => 'string',
            'sentAs' => 'due_date',
            'required' => false,
        ),
        'discount_rate' => array(
            'description' => 'Cash discount. Default: Value from the settings',
            'type' => 'number',
            'sentAs' => 'discount_rate',
            'required' => false,
        ),
        'discount_date' => array(
            'description' => 'Cash discount date. Default: date + cash discount days taken from the settings',
            'type' => 'string',
            'sentAs' => 'discount_date',
            'required' => false,
        ),
        'title' => array(
            'description' => 'Title of the document',
            'type' => 'string',
            'sentAs' => 'title',
            'required' => false,
        ),
        'label' => array(
            'description' => 'Label text to describe the project',
            'type' => 'string',
            'sentAs' => 'label',
            'required' => false,
        ),
        'intro' => array(
            'description' => 'Introductory text. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'intro',
            'required' => false,
        ),
        'note' => array(
            'description' => 'Explanatory notes. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'note',
            'required' => false,
        ),
        'reduction' => array(
            'description' => 'Reduction (absolute or percent: 10/10%)',
            'type' => 'string',
            'sentAs' => 'reduction',
            'required' => false,
        ),
        'currency_code' => array(
            'description' => 'ISO currency code. Default: default currency',
            'type' => 'string',
            'sentAs' => 'currency_code',
            'required' => false,
        ),
        'net_gross' => array(
            'description' => 'Price basis (gross or net prices). Default: Value taken from the settings',
            'type' => 'string',
            'enum' => array('NET', 'GROSS'),
            'sentAs' => 'net_gross',
            'required' => false,
        ),
        'quote' => array(
            'description' => 'Currency quote (for conversion into standard currency). Default: 1.0000',
            'type' => 'number',
            'sentAs' => 'quote',
            'required' => false,
        ),
        'payment_types' => array(
            'description' => 'Comma separated list of all accepted payment types. Default: Value taken from the settings',
            'type' => 'string',
            'sentAs' => 'payment_types',
            'required' => false,
        ),
        'invoice_id' => array(
            'description' => 'The ID of the corrected invoice, if it is an invoice correction.',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => false,
        ),
        'offer_id' => array(
            'description' => 'The ID of the estimate, if the invoice was created from an estimate.',
            'type' => 'integer',
            'sentAs' => 'offer_id',
            'required' => false,
        ),
        'confirmation_id' => array(
            'description' => 'The ID of the confirmation, if the invoice was created from a confirmation.',
            'type' => 'integer',
            'sentAs' => 'confirmation_id',
            'required' => false,
        ),
        'recurring_id' => array(
            'description' => 'The ID of the recurring, if the invoice was created from a recurring.',
            'type' => 'integer',
            'sentAs' => 'recurring_id',
            'required' => false,
        ),
        'invoice-items' => array(
            'description' => 'Invoice items',
            'type' => 'object',
            'sentAs' => 'invoice-items',
            'required' => false,
            'properties' => array(
                'invoice-item' => array(
                    'description' => 'Invoice items',
                    'type' => 'array',
                    'sentAs' => 'invoice-item',
                    'required' => false,
                    'items' => $invoiceItemParameter,
                ),
            ),
        )
    )
);

return array(
    'name'        => 'Billomat',
    'apiVersion'  => '1.0',
    'description' => 'Billomat is an online service for quoting, billing and more.',
    'operations'  => array(
        /**
         * --------------------------------------------------------------------------------
         * CLIENT RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetClients' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/clients',
            'summary'          => 'List all clients',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'name'  => array(
                    'description' => 'Company name',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'name',
                    'required'    => false
                ),
                'client_number'  => array(
                    'description' => 'Client number',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'client_number',
                    'required'    => false
                ),
                'email'  => array(
                    'description' => 'E-mail address',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'email',
                    'required'    => false
                ),
                'first_name'  => array(
                    'description' => 'First name of the contact person',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'first_name',
                    'required'    => false
                ),
                'last_name'  => array(
                    'description' => 'Last name of the contact person',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'last_name',
                    'required'    => false
                ),
                'country_code'  => array(
                    'description' => 'Country code as ISO 3166 Alpha-2',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'country_code',
                    'required'    => false
                ),
                'note'  => array(
                    'description' => 'Note',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'note',
                    'required'    => false
                ),
                'invoice_id'  => array(
                    'description' => 'ID of an invoice of this client, multiple values separated with commas',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'invoice_id',
                    'required'    => false
                ),
                'tags'  => array(
                    'description' => 'Comma separated list of tags',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'tags',
                    'required'    => false
                )
            )
        ),

        'GetClient' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/clients/{id}',
            'summary'          => 'Get a specific client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Client id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'GetClientMyself' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/clients/myself',
            'summary'          => 'Your own account info',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                )
            )
        ),

        'CreateClient' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/clients',
            'summary'          => 'Create a client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'client'  => $clientParameter
            )
        ),

        'UpdateClient' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/clients/{id}',
            'summary'          => 'Update a client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Client id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'client'  => $clientParameter
            )
        ),

        'DeleteClient' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/clients/{id}',
            'summary'          => 'Delete a client',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Client id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * ARTICLE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetArticles' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/articles',
            'summary'          => 'List all articles',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'article_number'  => array(
                    'description' => 'Article number',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'article_number',
                    'required'    => false
                ),
                'title'  => array(
                    'description' => 'Title',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'title',
                    'required'    => false
                ),
                'description'  => array(
                    'description' => 'Description',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'description',
                    'required'    => false
                ),
                'currency_code'  => array(
                    'description' => 'ISO code of the currency',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'currency_code',
                    'required'    => false
                ),
                'unit_id'  => array(
                    'description' => 'ID of the chosen unit',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'unit_id',
                    'required'    => false
                ),
                'tags'  => array(
                    'description' => 'Comma separated list of tags',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'tags',
                    'required'    => false
                )
            )
        ),

        'GetArticle' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/articles/{id}',
            'summary'          => 'Get a specific article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Article id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateArticle' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/articles',
            'summary'          => 'Create an article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'article'  => $articleParameter
            )
        ),

        'UpdateArticle' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/articles/{id}',
            'summary'          => 'Update an article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Article id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'article'  => $articleParameter
            )
        ),

        'DeleteArticle' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/articles/{id}',
            'summary'          => 'Delete an article',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Article id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * INVOICE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetInvoices' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/invoices',
            'summary'          => 'List all invoices',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'client_id'  => array(
                    'description' => 'ID of the client',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'client_id',
                    'required'    => false
                ),
                'contact_id'  => array(
                    'description' => 'ID of the contact',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'contact_id',
                    'required'    => false
                ),
                'invoice_number'  => array(
                    'description' => 'Invoice number',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'invoice_number',
                    'required'    => false
                ),
                'status'  => array(
                    'description' => 'Comma separated list of logically OR-connected statuses',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'status',
                    'required'    => false
                ),
                'payment_type'  => array(
                    'description' => 'Comma separated list of logically OR-connected payment types',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'payment_type',
                    'required'    => false
                ),
                'from'  => array(
                    'description' => 'Only list invoices since this date (format YYYY-MM-DD)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'from',
                    'required'    => false
                ),
                'to'  => array(
                    'description' => 'Only list invoices up to this date (format YYYY-MM-DD)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'to',
                    'required'    => false
                ),
                'label'  => array(
                    'description' => 'Free text search in label text',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'label',
                    'required'    => false
                ),
                'intro'  => array(
                    'description' => 'Free text search in introductory text',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'intro',
                    'required'    => false
                ),
                'note'  => array(
                    'description' => 'Free text search in explanatory notes',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'note',
                    'required'    => false
                ),
                'tags'  => array(
                    'description' => 'Comma separated list of tags',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'tags',
                    'required'    => false
                ),
                'group_by'  => array(
                    'description' => 'Grouping parameter',
                    'location'    => 'query',
                    'type'        => 'string',
                    'enum' => array('client', 'status', 'day', 'week', 'month', 'year'),
                    'sentAs'      => 'group_by',
                    'required'    => false
                )
            )
        ),

        'GetInvoice' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/invoices/{id}',
            'summary'          => 'Get a specific invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateInvoice' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/invoices',
            'summary'          => 'Create an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'invoice'  => $invoiceParameter
            )
        ),

        'UpdateInvoice' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/invoices/{id}',
            'summary'          => 'Update an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'invoice'  => $invoiceParameter
            )
        ),

        'CompleteInvoice' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/invoices/{id}/complete',
            'summary'          => 'Complete an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'complete'  => array(
                    'description' => 'Invoice complete data',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'complete',
                    'required' => true,
                    'properties' => array(
                        'template_id' => array(
                            'description' => 'ID of the template to complete the invoice with',
                            'type' => 'integer',
                            'sentAs' => 'template_id',
                            'required' => false,
                        )
                    )
                )
            )
        ),

        'GetInvoicePdf' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/invoices/{id}/pdf',
            'summary'          => 'Open pdf of an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'accept'  => array(
                    'description' => 'Accept header',
                    'location'    => 'header',
                    'type'        => 'string',
                    'enum' => array('application/pdf'),
                    'sentAs'      => 'Accept',
                    'required'    => false
                ),
                'format'  => array(
                    'description' => 'Response format',
                    'location'    => 'query',
                    'type'        => 'string',
                    'enum' => array('pdf'),
                    'sentAs'      => 'format',
                    'required'    => false
                )
            )
        ),

        'SignInvoice' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/invoices/{id}/upload-signature',
            'summary'          => 'Upload a digital signature for a given invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'signature'  => array(
                    'description' => 'Digital signature',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'signature',
                    'required' => true,
                    'properties' => array(
                        'base64file' => array(
                            'description' => 'Base64 encoded PDF with digital signature',
                            'type' => 'string',
                            'sentAs' => 'base64file',
                            'required' => true,
                        )
                    )
                )
            )
        ),

        'SendInvoiceEmail' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/invoices/{id}/email',
            'summary'          => 'Send invoice by e-mail',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'email'  => array(
                    'description' => 'Email data',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'email',
                    'required' => true,
                    'properties' => array(
                        'from' => array(
                            'description' => 'Sender email address. Default: email from the settings',
                            'type' => 'string',
                            'sentAs' => 'from',
                            'required' => false,
                        ),
                        'recipients' => array(
                            'description' => 'Recipients of the e-mail. There must be at least one of "to", "cc" and/or "bcc"',
                            'type' => 'object',
                            'sentAs' => 'recipients',
                            'required' => true,
                            'properties' => array(
                                'to' => array(
                                    'description' => 'Recipient email address',
                                    'type' => 'string',
                                    'sentAs' => 'to',
                                    'required' => false,
                                ),
                                'cc' => array(
                                    'description' => 'CC Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'cc',
                                    'required' => false,
                                ),
                                'bcc' => array(
                                    'description' => 'BCC Recipient',
                                    'type' => 'string',
                                    'sentAs' => 'bcc',
                                    'required' => false,
                                ),
                            ),
                        ),
                        'subject' => array(
                            'description' => 'Subject of the e-mail (may include placeholders). Default: Value taken from the settings',
                            'type' => 'string',
                            'sentAs' => 'subject',
                            'required' => false,
                        ),
                        'body' => array(
                            'description' => 'Text of the e-mail (may include placeholders). Default: Value taken from the settings',
                            'type' => 'string',
                            'sentAs' => 'body',
                            'required' => false,
                        ),
                        'filename' => array(
                            'description' => 'Name of the PDF file (without .pdf). Default: invoice_{id}',
                            'type' => 'string',
                            'sentAs' => 'filename',
                            'required' => false,
                        ),
                        'attachments' => array(
                            'description' => 'Further files',
                            'type' => 'array',
                            'sentAs' => 'attachments',
                            'required' => false,
                            'items' => array(
                                'type' => 'object',
                                'sendAs' => 'attachment',
                                'properties' => array(
                                    'filename' => array(
                                        'description' => 'Filename',
                                        'type' => 'string',
                                        'sentAs' => 'filename',
                                        'required' => true,
                                    ),
                                    'mimetype' => array(
                                        'description' => 'Mime type',
                                        'type' => 'string',
                                        'sentAs' => 'mimetype',
                                        'required' => true,
                                    ),
                                    'base64file' => array(
                                        'description' => 'Base64 encoded file',
                                        'type' => 'string',
                                        'sentAs' => 'base64file',
                                        'required' => true,
                                    ),
                                ),
                            ),
                        )
                    )
                )
            )
        ),

        'CancelInvoice' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/invoices/{id}/cancel',
            'summary'          => 'Cancel an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'UndoCancelInvoice' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/invoices/{id}/uncancel',
            'summary'          => 'Undo invoice cancellation',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'DeleteInvoice' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/invoices/{id}',
            'summary'          => 'Delete an invoice',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * INVOICE ITEM RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetInvoiceItems' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/invoice-items',
            'summary'          => 'List all invoice items',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'invoice_id'  => array(
                    'description' => 'ID of the invoice',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'invoice_id',
                    'required'    => true
                )
            )
        ),

        'GetInvoiceItem' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/invoice-items/{id}',
            'summary'          => 'Get a specific invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice item id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateInvoiceItem' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/invoice-items',
            'summary'          => 'Create an invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'invoice-item'  => $invoiceItemParameterCreate
            )
        ),

        'UpdateInvoiceItem' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/invoice-items/{id}',
            'summary'          => 'Update an invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice item id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'invoice-item'  => $invoiceItemParameter
            )
        ),

        'DeleteInvoiceItem' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/invoice-items/{id}',
            'summary'          => 'Delete an invoice item',
            'documentationUrl' => 'http://www.billomat.com/en/api/invoices',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Invoice item id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

    ),
);
