<?php

namespace nsusoft\dadata\factories;

use nsusoft\dadata\adapters\SuggestAdapter;
use nsusoft\dadata\types\enums\SuggestType;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\suggest\SuggestInterface;
use nsusoft\dadata\types\responses\clean\CleanAddressResponse;
use nsusoft\dadata\types\responses\clean\CleanBirthdateResponse;
use nsusoft\dadata\types\responses\clean\CleanEmailResponse;
use nsusoft\dadata\types\responses\clean\CleanNameResponse;
use nsusoft\dadata\types\responses\clean\CleanPassportResponse;
use nsusoft\dadata\types\responses\clean\CleanPhoneResponse;
use nsusoft\dadata\types\responses\clean\CleanResponse;
use nsusoft\dadata\types\responses\clean\CleanVehicleResponse;
use yii\base\InvalidCallException;

class DirectFactory extends BaseFactory
{
    /**
     * @inheritDoc
     * @return CleanResponse
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
     * @return CleanResponse
     */
    protected function getCleanData(string $type): CleanInterface
    {
       if (CleanType::ADDRESS === $type) {
           return new CleanAddressResponse();
       } else if (CleanType::PHONE === $type) {
           return new CleanPhoneResponse();
       } else if (CleanType::NAME === $type) {
           return new CleanNameResponse();
       } else if (CleanType::EMAIL === $type) {
           return new CleanEmailResponse();
       } else if (CleanType::PASSPORT === $type) {
           return new CleanPassportResponse();
       } else if (CleanType::BIRTHDATE === $type) {
           return new CleanBirthdateResponse();
       } else if (CleanType::VEHICLE === $type) {
           return new CleanVehicleResponse();
       }

        throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
    }
}