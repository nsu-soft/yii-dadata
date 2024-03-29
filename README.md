# DaData module for Yii framework

## Installation

If you don't have [Composer](https://getcomposer.org/), you may install it by following instructions at [getcomposer.org](https://getcomposer.org/doc/00-intro.md).

Install this library using the following command:

```bash
composer require nsu-soft/yii-dadata
```

## Configuration

Add the following lines to your configuration file:

```php
'modules' => [
    'dadata' => [
        'class' => 'nsusoft\dadata\Module',
        'token' => 'enter-your-dadata-token',
        'secret' => 'enter-your-dadata-secret',
        'cachePriority' => [DbHandler::class],
    ],
],
```

[Read more](https://www.yiiframework.com/doc/guide/2.0/en/structure-modules#using-modules) about modules configuration in Yii2.

## Migrations

Apply migrations, if you want to save responses from DaData to your local database:

```bash
yii migrate --migrationPath=@vendor/nsu-soft/yii-dadata/src/migrations
```

## Usage

Clean address:

```php
<?php

namespace app\forms;

use app\models\City;
use app\models\Region;
use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\plugins\TimezoneConverter;
use nsusoft\dadata\validators\AddressValidator;
use yii\base\Model;

class AddressForm extends Model
{
    /**
     * @var string 
     */
    public $address;
    
    /**
     * @var City 
     */
    private $city;

    /**
     * @var Region 
     */
    private $region;

    /**
     * @inheritDoc
     */
    public function rules(): array
    {
        return [
            [['address'], 'string', 'max' => 255],
            [['address'], AddressValidator::class, 'maxPrecision' => AddressValidator::PRECISION_STREET, 'minPrecision' => AddressValidator::PRECISION_BUILDING],
        ];
    }

    /**
     * @return bool
     */
    private function saveRegion(): bool
    {
        $address = CleanHelper::address($this->address);
        
        $this->region = new Region();
        $this->region->name = $address->region;
        $this->region->type = $address->regionType;
        $this->region->type_full = $address->regionTypeFull;
        $this->region->name_with_type = $address->regionWithType;
        $this->region->fias_id = $address->regionFiasId;
        $this->region->timezone = TimezoneConverter::toIana($address);

        return $this->region->save();
    }
    
    /**
     * @return bool
     */
    private function saveCity(): bool
    {
        $address = CleanHelper::address($this->address);
        
        $this->city = new City();
        $this->city->name = $address->city;
        $this->city->type = $address->cityType;
        $this->city->type_full = $address->cityTypeFull;
        $this->city->name_with_type = $address->cityWithType;
        $this->city->fias_id = $address->cityFiasId;
        $this->city->region_id = $this->region->id;

        return $this->city->save();
    }

    /**
     * @return bool
     */
    public function save(): bool
    {
        if (!$this->validate()) {
            return false;
        }
        
        return $this->saveRegion() && $this->saveCity(); 
    }
}
```

Suggest address:

```php
<?php

namespace app\controllers;

use nsusoft\dadata\helpers\SuggestHelper;
use yii\web\Controller;

class SuggestController extends Controller
{
    /**
     * @param string $query
     * @return array
     */
    public function actionAddress(string $query): array
    {
        $items = [];
        
        foreach (SuggestHelper::address($query) as $suggest) {
            $items[] = $suggest->value;
        }
        
        return $items;
    }
}
```

See `src/helpers` and `src/validators` directories for more usage examples. 