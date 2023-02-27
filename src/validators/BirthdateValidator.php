<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\BirthdateQualityCheck;
use yii\validators\Validator;

/**
 * Validates date using the DaData cleaning API.
 *
 * Usage:
 * ```
 * public function rules(): array
 * {
 *     return [
 *         [['date'], BirthdateValidator::class],
 *     ];
 * }
 * ```
 */
class BirthdateValidator extends Validator
{
    /**
     * @var bool Strict mode for checking. If `true`, only auto-checking values are confirmed. If `false`, you need to check
     * some values manually.
     */
    public $strict = true;

    /**
     * @inheritDoc
     * @param string $value
     * @return array|null
     */
    public function validateValue($value): ?array
    {
        $birthdate = CleanHelper::birthdate($value);

        if (BirthdateQualityCheck::TRASH === $birthdate->qualityCheck) {
            return [Module::t('main', "Incorrect date."), []];
        }

        if ($this->strict && BirthdateQualityCheck::INCORRECT === $birthdate->qualityCheck) {
            return [Module::t('main', "Please check the date."), []];
        }

        return null;
    }}