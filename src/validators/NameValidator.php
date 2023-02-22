<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\dto\clean\NameDto;
use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\NameQualityCheck;
use yii\validators\Validator;

/**
 * Validates name using the DaData cleaning API.
 *
 * Usage:
 * ```
 * public function rules(): array
 * {
 *     return [
 *         [['name'], NameValidator::class, 'gender' => NameGender::MALE],
 *     ];
 * }
 * ```
 */
class NameValidator extends Validator
{
    /**
     * @var array|string
     */
    public $gender = [];

    /**
     * @inheritDoc
     */
    public function init(): void
    {
        if (!empty($this->gender) && !is_array($this->gender)) {
            $this->gender = [$this->gender];
        }
    }

    /**
     * @inheritDoc
     * @param string $value
     * @return array|null
     */
    public function validateValue($value): ?array
    {
        $name = CleanHelper::name($value);

        if (NameQualityCheck::TRASH == $name->qualityCheck) {
            return [Module::t('main', "Incorrect name."), []];
        }

        if (NameQualityCheck::UNKNOWN === $name->qualityCheck) {
            return [Module::t('main', "Please check the name."), []];
        }

        if (!empty($this->gender) && !$this->validateGender($name)) {
            return [Module::t('main', "Incorrect gender of name."), []];
        }

        return null;
    }

    /**
     * @param NameDto $name
     * @return bool
     */
    private function validateGender(NameDto $name): bool
    {
        return in_array($name->gender, $this->gender);
    }
}