<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\api\Client;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use nsusoft\dadata\types\direct\clean\CleanAddressDirect;
use nsusoft\dadata\types\direct\clean\CleanBirthdateDirect;
use nsusoft\dadata\types\direct\clean\CleanEmailDirect;
use nsusoft\dadata\types\direct\clean\CleanNameDirect;
use nsusoft\dadata\types\direct\clean\CleanPassportDirect;
use nsusoft\dadata\types\direct\clean\CleanPhoneDirect;
use nsusoft\dadata\types\direct\clean\CleanDirect;
use nsusoft\dadata\types\direct\clean\CleanVehicleDirect;
use yii\base\InvalidCallException;

class DirectHandler extends BaseHandler
{
    /**
     * @inheritDoc
     */
    public function clean(string $type, string $value): ?CleanInterface
    {
        if (!CleanType::exists($type)) {
            throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
        }

        $rawData = $this->getClient()->clean($type, $value);

        $wrapper = $this->getCleanData($type);
        $wrapper->setRawData($rawData);

        return $wrapper;
    }

    /**
     * @return Client
     */
    private function getClient(): Client
    {
        return new Client();
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