<?php

namespace Phobetor\Billomat\Client\DescriptionLoader;

class BillomatServiceDescriptionForApiKeyCredentialsLoader extends \Guzzle\Service\Description\ServiceDescriptionLoader {
    protected function build($config, array $options)
    {
        if (!empty($config['operations'])) {
            foreach ($config['operations'] as &$operation) {
                $operation['parameters']['api_key'] = array(
                    'description' => 'Billomat API key',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-BillomatApiKey',
                    'required'    => true
                );
            }
        }

        return parent::build($config, $options);
    }
}
