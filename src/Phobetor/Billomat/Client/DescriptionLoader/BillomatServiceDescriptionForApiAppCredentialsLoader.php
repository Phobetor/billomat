<?php

namespace Phobetor\Billomat\Client\DescriptionLoader;

class BillomatServiceDescriptionForApiAppCredentialsLoader extends \Guzzle\Service\Description\ServiceDescriptionLoader {
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
                $operation['parameters']['api_app_id'] = array(
                    'description' => 'Billomat API app id',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-AppId',
                    'required'    => true
                );
                $operation['parameters']['api_app_secret'] = array(
                    'description' => 'Billomat API app secret',
                    'location'    => 'header',
                    'type'        => 'string',
                    'sentAs'      => 'X-AppSecret',
                    'required'    => true
                );
            }
        }

        return parent::build($config, $options);
    }
}
