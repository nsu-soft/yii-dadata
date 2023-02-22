<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\dto\clean\PhoneDto;
use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\PhoneQualityCheck;
use yii\validators\Validator;

/**
 * Validates phone using the DaData cleaning API.
 *
 * Usage:
 * ```
 * public function rules(): array
 * {
 *     return [
 *         [['phone'], PhoneValidator::class, 'type' => PhoneType::MOBILE, 'isForeign' => false],
 *     ];
 * }
 * ```
 */
class PhoneValidator extends Validator
{
    /**
     * @var array|string
     */
    public $type = [];

    /**
     * @var bool|null
     */
    public $isForeign;

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if (!empty($this->type) && !is_array($this->type)) {
            $this->type = [$this->type];
        }
    }

    /**
     * @inheritDoc
     * @param string $value
     * @return array|null
     */
    public function validateValue($value): ?array
    {
        $phone = CleanHelper::phone($value);

        if (PhoneQualityCheck::TRASH == $phone->qualityCheck) {
            return [Module::t('main', "Incorrect phone."), []];
        }

        if (in_array($phone->qualityCheck, [PhoneQualityCheck::UNKNOWN, PhoneQualityCheck::MULTIPLE])) {
            return [Module::t('main', "Please specify the phone."), []];
        }

        if (!empty($this->type) && !$this->validateType($phone)) {
            return [Module::t('main', "Incorrect a phone type."), []];
        }

        if (isset($this->isForeign) && !$this->validateIsForeign($phone)) {
            return [Module::t('main', "Incorrect a phone country."), []];
        }

        return null;
    }

    /**
     * @param PhoneDto $phone
     * @return bool
     */
    private function validateType(PhoneDto $phone): bool
    {
        return in_array($phone->type, $this->type);
    }

    /**
     * @param PhoneDto $phone
     * @return bool
     */
    private function validateIsForeign(PhoneDto $phone): bool
    {
        return $this->isForeign ? PhoneQualityCheck::FOREIGN_OK === $phone->qualityCheck : PhoneQualityCheck::OK === $phone->qualityCheck;
    }
}