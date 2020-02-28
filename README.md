The PHP Azure Face API makes it easy for developers to access Azure Face API in their PHP code.

SmartDog23 - PHP Azure Face API
===================================

[![License](https://poser.pugx.org/smartdog23/php-azure-face-api/license)](https://packagist.org/packages/smartdog23/php-azure-face-api)
[![Latest Stable Version](https://poser.pugx.org/smartdog23/php-azure-face-api/v/stable)](https://packagist.org/packages/smartdog23/php-azure-face-api)
[![Total Downloads](https://poser.pugx.org/smartdog23/php-azure-face-api/downloads)](https://packagist.org/packages/smartdog23/php-azure-face-api)

PHP Azure Face API is a PHP Client that make easy to use Azure's Face Recognition API

```php

$azureFaceApi = new AzureFaceApi('YOUR_KEY', AzureRegions::EAST_US);
$result = $azureFaceApi->largePersonGroup()->create()->execute('test-group', 'description of the group');

echo $result->getBody()->getContents();

```

## Help and docs

Soon


## Installation

The recommended way to install LaravelAzureFaceAPI is through
[Composer](https://getcomposer.org/).

```bash
composer require smartdog23/php-azure-face-api
```

## Usage


Using the simple mode

```php
$azureFaceApi = new AzureFaceApi('YOUR_KEY', AzureRegions::EAST_US);
$result = $azureFaceApi->largePersonGroup()->create()->execute('test-group', 'description of the group');

echo $result->getBody()->getContents();
```



Using the advanced mode

```php

$azureFaceApi = new AzureFaceApi('YOUR_KEY', AzureRegions::EAST_US);

$options = new CreateOptions();
$options->parameters()->largePersonGroupId('test-group');
$options->body()->name('description of the group');
$result = $azureFaceApi->largePersonGroup()->create()->executeWithOptions($options);
echo $result->getBody()->getContents();
```
