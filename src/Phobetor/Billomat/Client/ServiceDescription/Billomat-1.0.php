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
            'enum' => array('TAX', 'NO_TAX', 'COUNTRY'),
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

$clientPropertyValueParameter = array(
    'description' => 'Client property value',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'client-property-value',
    'required' => true,
    'properties' => array(
        'client_id' => array(
            'description' => 'ID of the client',
            'type' => 'integer',
            'sentAs' => 'client_id',
            'required' => true,
        ),
        'client_property_id' => array(
            'description' => 'ID of the property',
            'type' => 'integer',
            'sentAs' => 'client_property_id',
            'required' => true,
        ),
        'value' => array(
            'description' => 'Property value',
            'type' => 'string',
            'sentAs' => 'value',
            'required' => true,
        )
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

$articlePropertyValueParameter = array(
    'description' => 'Article property value',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'article-property-value',
    'required' => true,
    'properties' => array(
        'article_id' => array(
            'description' => 'ID of the article',
            'type' => 'integer',
            'sentAs' => 'article_id',
            'required' => true,
        ),
        'article_property_id' => array(
            'description' => 'ID of the property',
            'type' => 'integer',
            'sentAs' => 'article_property_id',
            'required' => true,
        ),
        'value' => array(
            'description' => 'Property value',
            'type' => 'string',
            'sentAs' => 'value',
            'required' => true,
        )
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

$creditNoteItemParameter = array(
    'description' => 'Credit note item',
    'location' => 'json',
    'type' => 'object',
    'properties' => array(
        'credit_note_id' => array(
            'description' => 'ID of the credit note',
            'type' => 'integer',
            'sentAs' => 'credit_note_id',
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

// special case when credit note item is created directly
$creditNoteItemParameterCreate = $creditNoteItemParameter;
$creditNoteItemParameterCreate['properties']['credit_note_id']['required'] = true;

$creditNoteParameter = array(
    'description' => 'Credit note',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'credit-note',
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
            'description' => 'Credit note number prefix. Default: Value from settings',
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
            'description' => 'Minimum length of the credit note number (to be filled with leading zeros). Default: Value from settings',
            'type' => 'integer',
            'sentAs' => 'number_length',
            'required' => false,
        ),
        'date' => array(
            'description' => 'Credit note date. Default: today',
            'type' => 'string',
            'sentAs' => 'date',
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
        'invoice_id' => array(
            'description' => 'The ID of the invoice, if the credit note was created from an invoice.',
            'type' => 'integer',
            'sentAs' => 'invoice_id',
            'required' => false,
        ),
        'credit-note-items' => array(
            'description' => 'Credit note items',
            'type' => 'object',
            'sentAs' => 'credit-note-items',
            'required' => false,
            'properties' => array(
                'credit-note-item' => array(
                    'description' => 'Credit note item',
                    'type' => 'array',
                    'sentAs' => 'credit-note-item',
                    'required' => false,
                    'items' => $creditNoteItemParameter,
                ),
            ),
        )
    )
);

$templateParameter = array(
    'description' => 'Template',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'template',
    'required' => true,
    'properties' => array(
        'name'  => array(
            'description' => 'Name of the template',
            'type'        => 'string',
            'sentAs'      => 'name',
            'required'    => false
        ),
        'type'  => array(
            'description' => 'Template type',
            'type'        => 'string',
            'enum'        => array('INVOICE', 'OFFER', 'CONFIRMATION', 'REMINDER', 'DELIVERY_NOTE', 'CREDIT_NOTE'),
            'sentAs'      => 'type',
            'required'    => false
        ),
        'format'  => array(
            'description' => 'Format',
            'type'        => 'string',
            'enum'        => array('doc', 'docx', 'rtf'),
            'sentAs'      => 'format',
            'required'    => false
        ),
        'base64file'  => array(
            'description' => 'base64 coded template file',
            'type'        => 'string',
            'sentAs'      => 'base64file',
            'required'    => false
        ),
    )
);

$templateParameterCreate = $templateParameter;
foreach ($templateParameterCreate['properties'] as $key => $property) {
    $templateParameterCreate['properties'][$key]['required'] = true;
}



$assetPropertyParameter = array(
    'description' => '',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => '',
    'required' => true,
    'properties' => array(
        'name' => array(
            'description' => 'Name',
            'type' => 'string',
            'sentAs' => 'name',
            'required' => false,
        ),
        'type' => array(
            'description' => 'Type',
            'type' => 'string',
            'enum' => array('TEXTFIELD', 'TEXTAREA', 'CHECKBOX'),
            'sentAs' => 'type',
            'required' => false,
        ),
        'default_value' => array(
            'description' => 'Default value',
            'type' => 'string',
            'sentAs' => 'default_value',
            'required' => false,
        ),
        'is_nvl' => array(
            'description' => 'Should the default value be used if there is no other value?',
            'type' => 'integer',
            'sentAs' => 'is_nvl',
            'required' => false,
        )
    )
);

$articlePropertyParameter = $assetPropertyParameter;
$articlePropertyParameter['description'] = 'Article property';
$articlePropertyParameter['sentAs'] = 'article-property';

$articlePropertyParameterCreate = $articlePropertyParameter;
$articlePropertyParameterCreate['properties']['name']['required'] = true;
$articlePropertyParameterCreate['properties']['type']['required'] = true;

$clientPropertyParameter = $assetPropertyParameter;
$clientPropertyParameter['description'] = 'Client property';
$clientPropertyParameter['sentAs'] = 'client-property';

$clientPropertyParameterCreate = $clientPropertyParameter;
$clientPropertyParameterCreate['properties']['name']['required'] = true;
$clientPropertyParameterCreate['properties']['type']['required'] = true;

$userPropertyParameter = $assetPropertyParameter;
$userPropertyParameter['description'] = 'User property';
$userPropertyParameter['sentAs'] = 'user-property';

$userPropertyParameterCreate = $userPropertyParameter;
$userPropertyParameterCreate['properties']['name']['required'] = true;
$userPropertyParameterCreate['properties']['type']['required'] = true;



$taxParameter = array(
    'description' => 'Tax',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'tax',
    'required' => true,
    'properties' => array(
        'name'  => array(
            'description' => 'Name of the tax',
            'type'        => 'string',
            'sentAs'      => 'name',
            'required'    => false
        ),
        'rate'  => array(
            'description' => 'Tax rate in percent',
            'type'        => 'numeric',
            'sentAs'      => 'rate',
            'required'    => false
        ),
        'is_default'  => array(
            'description' => 'Specifies whether this is the standard tax rate',
            'type'        => 'integer',
            'enum'        => array(0, 1),
            'sentAs'      => 'is_default',
            'required'    => false
        )
    )
);

$taxParameterCreate = $taxParameter;
foreach ($taxParameterCreate['properties'] as $key => $property) {
    $taxParameterCreate['properties'][$key]['required'] = true;
}

$countryTaxParameter = array(
    'description' => 'Tax free country',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'country-tax',
    'required' => true,
    'properties' => array(
        'country_code'  => array(
            'description' => 'Country code as ISO 3166 Alpha-2',
            'type'        => 'string',
            'sentAs'      => 'country_code',
            'required'    => true
        )
    )
);

$reminderTextParameter = array(
    'description' => 'Reminder text',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'reminder-text',
    'required' => true,
    'properties' => array(
        'sorting'  => array(
            'description' => 'Sorting of this reminder text. Default: at the end of the list',
            'type'        => 'integer',
            'sentAs'      => 'sorting',
            'required'    => false
        ),
        'name'  => array(
            'description' => 'Name (for internal use)',
            'type'        => 'string',
            'sentAs'      => 'name',
            'required'    => false
        ),
        'subject'  => array(
            'description' => 'Subject',
            'type'        => 'string',
            'sentAs'      => 'subject',
            'required'    => false
        ),
        'header'  => array(
            'description' => 'Introductory text',
            'type'        => 'string',
            'sentAs'      => 'header',
            'required'    => false
        ),
        'footer'  => array(
            'description' => 'Explanatory notes',
            'type'        => 'string',
            'sentAs'      => 'footer',
            'required'    => false
        ),
        'charge_name'  => array(
            'description' => 'Name of charge (if present)',
            'type'        => 'string',
            'sentAs'      => 'charge_name',
            'required'    => false
        ),
        'charge_description'  => array(
            'description' => 'Description of charge (if present)',
            'type'        => 'string',
            'sentAs'      => 'charge_description',
            'required'    => false
        ),
        'charge_amount'  => array(
            'description' => 'Amount of charge (if present)',
            'type'        => 'numeric',
            'sentAs'      => 'charge_amount',
            'required'    => false
        )
    )
);

$emailTemplateParameter = array(
    'description' => 'Email template',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'email-template',
    'required' => true,
    'properties' => array(
        'name'  => array(
            'description' => 'Name (for internal use)',
            'type'        => 'string',
            'sentAs'      => 'name',
            'required'    => false
        ),
        'type'  => array(
            'description' => 'Document type',
            'type'        => 'string',
            'enum' => array('INVOICES', 'OFFERS', 'CONFIRMATIONS', 'CREDIT_NOTES', 'DELIVERY_NOTES', 'REMINDERS'),
            'sentAs'      => 'type',
            'required'    => false
        ),
        'subject'  => array(
            'description' => 'Subject',
            'type'        => 'string',
            'sentAs'      => 'subject',
            'required'    => false
        ),
        'text'  => array(
            'description' => 'Message text',
            'type'        => 'string',
            'sentAs'      => 'text',
            'required'    => false
        ),
        'bcc'  => array(
            'description' => 'Specifies whether the sender should get a copy as BCC',
            'type'        => 'integer',
            'enum' => array(0, 1),
            'sentAs'      => 'bcc',
            'required'    => false
        ),
        'is_default'  => array(
            'description' => 'Specifies whether this is the standard template ',
            'type'        => 'integer',
            'enum' => array(0, 1),
            'sentAs'      => 'is_default',
            'required'    => false
        )
    )
);

$emailTemplateParameterCreate = $emailTemplateParameter;
$emailTemplateParameterCreate['properties']['name']['required'] = true;
$emailTemplateParameterCreate['properties']['type']['required'] = true;
$emailTemplateParameterCreate['properties']['bcc']['required'] = true;
$emailTemplateParameterCreate['properties']['is_default']['required'] = true;

$userPropertyValueParameter = array(
    'description' => 'User property value',
    'location' => 'json',
    'type' => 'object',
    'sentAs' => 'user-property-value',
    'required' => true,
    'properties' => array(
        'user_id' => array(
            'description' => 'ID of the user',
            'type' => 'integer',
            'sentAs' => 'user_id',
            'required' => true,
        ),
        'user_property_id' => array(
            'description' => 'ID of the property',
            'type' => 'integer',
            'sentAs' => 'user_property_id',
            'required' => true,
        ),
        'value' => array(
            'description' => 'Property value',
            'type' => 'string',
            'sentAs' => 'value',
            'required' => true,
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
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
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
         * CLIENT PROPERTY VALUE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetClientPropertyValues' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/client-property-values',
            'summary'          => 'List all client property values',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                ),
                'client_id'  => array(
                    'description' => 'ID of a client',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'client_id',
                    'required'    => false
                ),
                'client_property_id'  => array(
                    'description' => 'ID of a property',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'client_property_id',
                    'required'    => false
                )
            )
        ),

        'GetClientPropertyValue' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/client-property-values/{id}',
            'summary'          => 'Get a specific property',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Client property value id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'SetClientPropertyValue' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/client-property-values',
            'summary'          => 'Set a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/clients/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'client-property-value'  => $clientPropertyValueParameter
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
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
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
         * ARTICLE PROPERTY VALUE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetArticlePropertyValues' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/article-property-values',
            'summary'          => 'List all article property values',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                ),
                'article_id'  => array(
                    'description' => 'ID of a article',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'article_id',
                    'required'    => false
                ),
                'article_property_id'  => array(
                    'description' => 'ID of a property',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'article_property_id',
                    'required'    => false
                )
            )
        ),

        'GetArticlePropertyValue' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/article-property-values/{id}',
            'summary'          => 'Get a specific property',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Article property value id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'SetArticlePropertyValue' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/article-property-values',
            'summary'          => 'Set a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/articles/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'article-property-value'  => $articlePropertyValueParameter
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
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
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
                ),
                'type'  => array(
                    'description' => 'Response type',
                    'location'    => 'query',
                    'type'        => 'string',
                    'enum' => array('print'),
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
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
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
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * CREDIT NOTE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetCreditNotes' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/credit-notes',
            'summary'          => 'List all credit notes',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
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
                'credit_note_number'  => array(
                    'description' => 'Credit note number',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'credit_note_number',
                    'required'    => false
                ),
                'status'  => array(
                    'description' => 'Comma separated list of logically OR-connected statuses',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'status',
                    'required'    => false
                ),
                'from'  => array(
                    'description' => 'Only list credit notes since this date (format YYYY-MM-DD)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'from',
                    'required'    => false
                ),
                'to'  => array(
                    'description' => 'Only list credit notes up to this date (format YYYY-MM-DD)',
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

        'GetCreditNote' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/credit-notes/{id}',
            'summary'          => 'Get a specific credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateCreditNote' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/credit-notes',
            'summary'          => 'Create an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'credit-note'  => $creditNoteParameter
            )
        ),

        'UpdateCreditNote' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/credit-notes/{id}',
            'summary'          => 'Update an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'credit-note'  => $creditNoteParameter
            )
        ),

        'CompleteCreditNote' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/credit-notes/{id}/complete',
            'summary'          => 'Complete an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'complete'  => array(
                    'description' => 'Credit note complete data',
                    'location' => 'json',
                    'type' => 'object',
                    'sentAs' => 'complete',
                    'required' => true,
                    'properties' => array(
                        'template_id' => array(
                            'description' => 'ID of the template to complete the credit note with',
                            'type' => 'integer',
                            'sentAs' => 'template_id',
                            'required' => false,
                        )
                    )
                )
            )
        ),

        'GetCreditNotePdf' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/credit-notes/{id}/pdf',
            'summary'          => 'Open pdf of an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note id',
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
                ),
                'type'  => array(
                    'description' => 'Response type',
                    'location'    => 'query',
                    'type'        => 'string',
                    'enum' => array('print'),
                    'sentAs'      => 'type',
                    'required'    => false
                )
            )
        ),

        'SignCreditNote' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/credit-notes/{id}/upload-signature',
            'summary'          => 'Upload a digital signature for a given credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note id',
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

        'SendCreditNoteEmail' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/credit-notes/{id}/email',
            'summary'          => 'Send credit note by e-mail',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note id',
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

        'DeleteCreditNote' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/credit-notes/{id}',
            'summary'          => 'Delete an credit note',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * CREDIT NOTE ITEM RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetCreditNoteItems' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/credit-note-items',
            'summary'          => 'List all credit note items',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                ),
                'credit_note_id'  => array(
                    'description' => 'ID of the credit note',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'credit_note_id',
                    'required'    => true
                )
            )
        ),

        'GetCreditNoteItem' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/credit-note-items/{id}',
            'summary'          => 'Get a specific credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note item id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateCreditNoteItem' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/credit-note-items',
            'summary'          => 'Create an credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'credit-note-item'  => $creditNoteItemParameterCreate
            )
        ),

        'UpdateCreditNoteItem' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/credit-note-items/{id}',
            'summary'          => 'Update an credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note item id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'credit-note-item'  => $creditNoteItemParameter
            )
        ),

        'DeleteCreditNoteItem' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/credit-note-items/{id}',
            'summary'          => 'Delete an credit note item',
            'documentationUrl' => 'http://www.billomat.com/en/api/credit-notes/items',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Credit note item id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * TEMPLATE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetTemplates' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/templates',
            'summary'          => 'List all templates',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                ),
                'type'  => array(
                    'description' => 'Type of the template',
                    'location'    => 'query',
                    'type'        => 'string',
                    'enum' => array('INVOICE', 'OFFER', 'CONFIRMATION', 'REMINDER', 'DELIVERY_NOTE', 'CREDIT_NOTE'),
                    'sentAs'      => 'type',
                    'required'    => false
                )
            )
        ),

        'GetTemplate' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/templates/{id}',
            'summary'          => 'Get a specific template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Template id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'GetTemplatePreview' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/templates/{id}/thumb',
            'summary'          => 'Get a specific template’s preview',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Template id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'format'  => array(
                    'description' => 'Format',
                    'location'    => 'query',
                    'type'        => 'string',
                    'enum'        => array('png', 'gif', 'jpg'),
                    'sentAs'      => 'format',
                    'required'    => false
                )
            )
        ),

        'CreateTemplate' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/templates',
            'summary'          => 'Create a template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'template'  => $templateParameterCreate
            )
        ),

        'UpdateTemplate' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/templates/{id}',
            'summary'          => 'Update a template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Template id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'template'  => $templateParameter
            )
        ),

        'DeleteTemplate' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/templates/{id}',
            'summary'          => 'Delete a template',
            'documentationUrl' => 'http://www.billomat.com/en/api/templates',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Template id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * ARTICLE PROPERTY RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetArticleProperties' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/article-properties',
            'summary'          => 'List all article properties',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                )
            )
        ),

        'GetArticleProperty' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/article-properties/{id}',
            'summary'          => 'Get a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Article property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateArticleProperty' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/article-properties',
            'summary'          => 'Create a article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'article-property'  => $articlePropertyParameterCreate
            )
        ),

        'UpdateArticleProperty' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/article-properties/{id}',
            'summary'          => 'Update a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Article property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'article-property'  => $articlePropertyParameter
            )
        ),

        'DeleteArticleProperty' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/article-properties/{id}',
            'summary'          => 'Delete a specific article property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/article-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Article property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * CLIENT PROPERTY RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetClientProperties' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/client-properties',
            'summary'          => 'List all client properties',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                )
            )
        ),

        'GetClientProperty' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/client-properties/{id}',
            'summary'          => 'Get a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Client property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateClientProperty' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/client-properties',
            'summary'          => 'Create a client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'client-property'  => $clientPropertyParameterCreate
            )
        ),

        'UpdateClientProperty' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/client-properties/{id}',
            'summary'          => 'Update a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Client property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'client-property'  => $clientPropertyParameter
            )
        ),

        'DeleteClientProperty' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/client-properties/{id}',
            'summary'          => 'Delete a specific client property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/client-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Client property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * USER PROPERTY RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetUserProperties' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/user-properties',
            'summary'          => 'List all user properties',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                )
            )
        ),

        'GetUserProperty' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/user-properties/{id}',
            'summary'          => 'Get a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'User property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateUserProperty' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/user-properties',
            'summary'          => 'Create a user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'user-property'  => $userPropertyParameterCreate
            )
        ),

        'UpdateUserProperty' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/user-properties/{id}',
            'summary'          => 'Update a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'User property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'user-property'  => $userPropertyParameter
            )
        ),

        'DeleteUserProperty' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/user-properties/{id}',
            'summary'          => 'Delete a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/user-properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'User property id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * TAX RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetTaxes' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/taxes',
            'summary'          => 'List all taxes',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                )
            )
        ),

        'GetTax' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/taxes/{id}',
            'summary'          => 'Get a specific tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Tax id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateTax' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/taxes',
            'summary'          => 'Create a tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'tax'  => $taxParameterCreate
            )
        ),

        'UpdateTax' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/taxes/{id}',
            'summary'          => 'Update a tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Tax id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'tax'  => $taxParameter
            )
        ),

        'DeleteTax' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/taxes/{id}',
            'summary'          => 'Delete a tax',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/taxes',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Tax id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * COUNTRY TAX RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetCountryTaxes' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/country-taxes',
            'summary'          => 'List all tax free countries',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                )
            )
        ),

        'GetCountryTax' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/country-taxes/{id}',
            'summary'          => 'Get a specific tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Tax free country id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateCountryTax' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/country-taxes',
            'summary'          => 'Create a tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'country-tax'  => $countryTaxParameter
            )
        ),

        'UpdateCountryTax' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/country-taxes/{id}',
            'summary'          => 'Update a tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Tax free country id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'country-tax'  => $countryTaxParameter
            )
        ),

        'DeleteCountryTax' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/country-taxes/{id}',
            'summary'          => 'Delete a tax free country',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/tax-free-countries',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Tax free country id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * REMINDER TEXT RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetReminderTexts' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/reminder-texts',
            'summary'          => 'List all reminder texts',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                )
            )
        ),

        'GetReminderText' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/reminder-texts/{id}',
            'summary'          => 'Get a specific reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Reminder text id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateReminderText' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/reminder-texts',
            'summary'          => 'Create a reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'reminder-text'  => $reminderTextParameter
            )
        ),

        'UpdateReminderText' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/reminder-texts/{id}',
            'summary'          => 'Update a reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Reminder text id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'reminder-text'  => $reminderTextParameter
            )
        ),

        'DeleteReminderText' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/reminder-texts/{id}',
            'summary'          => 'Delete a reminder text',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/reminder-texts',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Reminder text id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * EMAIL TEMPLATE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetEmailTemplates' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/email-templates',
            'summary'          => 'List all email templates',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                )
            )
        ),

        'GetEmailTemplate' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/email-templates/{id}',
            'summary'          => 'Get a specific email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Email template id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'CreateEmailTemplate' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/email-templates',
            'summary'          => 'Create a email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'email-template'  => $emailTemplateParameterCreate
            )
        ),

        'UpdateEmailTemplate' => array(
            'httpMethod'       => 'PUT',
            'uri'              => '/api/email-templates/{id}',
            'summary'          => 'Update a email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Email template id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                ),
                'email-template'  => $emailTemplateParameter
            )
        ),

        'DeleteEmailTemplate' => array(
            'httpMethod'       => 'DELETE',
            'uri'              => '/api/email-templates/{id}',
            'summary'          => 'Delete a email template',
            'documentationUrl' => 'http://www.billomat.com/en/api/settings/email-vorlagen',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'Email template id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        /**
         * --------------------------------------------------------------------------------
         * USER PROPERTY VALUE RELATED OPERATIONS
         * --------------------------------------------------------------------------------
         */

        'GetUserPropertyValues' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/user-property-values',
            'summary'          => 'List all user property values',
            'documentationUrl' => 'http://www.billomat.com/en/api/users/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'per_page'  => array(
                    'description' => 'Rows per page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'per_page',
                    'required'    => false
                ),
                'page'  => array(
                    'description' => 'Page',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'page',
                    'required'    => false
                ),
                'order_by'  => array(
                    'description' => 'Order by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'sentAs'      => 'order_by',
                    'required'    => false
                ),
                'user_id'  => array(
                    'description' => 'ID of a user',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'sentAs'      => 'user_id',
                    'required'    => true
                )
            )
        ),

        'GetUserPropertyValue' => array(
            'httpMethod'       => 'GET',
            'uri'              => '/api/user-property-values/{id}',
            'summary'          => 'Get a specific property',
            'documentationUrl' => 'http://www.billomat.com/en/api/users/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'id'  => array(
                    'description' => 'User property value id',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'sentAs'      => 'id',
                    'required'    => true
                )
            )
        ),

        'SetUserPropertyValue' => array(
            'httpMethod'       => 'POST',
            'uri'              => '/api/user-property-values',
            'summary'          => 'Set a specific user property',
            'documentationUrl' => 'http://www.billomat.com/en/api/users/properties',
            'parameters'       => array(
                'api_key'  => array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                ),
                'user-property-value'  => $userPropertyValueParameter
            )
        ),

    ),
);
