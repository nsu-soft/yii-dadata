<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\adapters\SuggestAdapter;
use nsusoft\dadata\types\enums\SuggestType;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;
use nsusoft\dadata\types\direct\clean\CleanAddressDirect;
use nsusoft\dadata\types\direct\clean\CleanBirthdateDirect;
use nsusoft\dadata\types\direct\clean\CleanEmailDirect;
use nsusoft\dadata\types\direct\clean\CleanNameDirect;
use nsusoft\dadata\types\direct\clean\CleanPassportDirect;
use nsusoft\dadata\types\direct\clean\CleanPhoneDirect;
use nsusoft\dadata\types\direct\clean\CleanDirect;
use nsusoft\dadata\types\direct\clean\CleanVehicleDirect;
use yii\base\InvalidCallException;

class DirectFactory extends BaseFactory
{
    /**
     * @inheritDoc
     * @return CleanDirect
     */
    public function clean(string $type, string $value): CleanInterface
    {
        if (!CleanType::exists($type)) {
            throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
        }

        $wrapper = $this->getCleanData($type);
        $wrapper->setRawData($this->getClient()->clean($type, $value));

        return $wrapper;
    }

    public function suggest(string $type, string $value, array $options = []): SuggestInterface
    {
        if (!SuggestType::exists($type)) {
            throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
        }

//        $suggest = new SuggestAdapter([
//            'client' => $this->getClient(),
//            'type' => $type,
//            'value' => $value,
//            'options' => $options,
//        ]);
//
//        $suggest->call();
    }

    /**
     * @param string $type
     * @return CleanDirect
     */
    protected function getCleanData(string $type): CleanInterface
    {
       if (CleanType::ADDRESS === $type) {
           return new CleanAddressDirect();
       } else if (CleanType::PHONE === $type) {
           return new CleanPhoneDirect();
       } else if (CleanType::NAME === $type) {
           return new CleanNameDirect();
       } else if (CleanType::EMAIL === $type) {
           return new CleanEmailDirect();
       } else if (CleanType::PASSPORT === $type) {
           return new CleanPassportDirect();
       } else if (CleanType::BIRTHDATE === $type) {
           return new CleanBirthdateDirect();
       } else if (CleanType::VEHICLE === $type) {
           return new CleanVehicleDirect();
       }

        throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
    }
}