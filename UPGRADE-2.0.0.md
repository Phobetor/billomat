UPGRADE FROM 1.5.0 to 2.0.0
=======================

`BillomatClient::__construct` signature has changed.

To migrate the code follow the example below:

Before:
```php
// BillomatClient::LATEST_API_VERSION needed to be set explicitly
// when the fourth parameter is in use
new BillomatClient('billomat-id', 'api-key', BillomatClient::LATEST_API_VERSION, true);
```

After:
```php
// without a registered application
new BillomatClient('billomat-id', 'api-key', null, null, true);
// with a registered application
new BillomatClient('billomat-id', 'api-key', 'app-id', 'app-secret', true);
```
