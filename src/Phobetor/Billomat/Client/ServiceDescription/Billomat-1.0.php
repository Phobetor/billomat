<?php

$clientParameter = array(
    'description' => 'Client id',
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
            'type' => 'double',
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
            'summary'          => 'Show a specific client',
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

    ),
);
