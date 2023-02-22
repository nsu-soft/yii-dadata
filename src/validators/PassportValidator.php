<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\PassportQualityCheck;
use yii\validators\Validator;

/**
 * Validates passport using the DaData cleaning API.
 *
 * Usage:
 * ```
 * public function rules(): array
 * {
 *     return [
 *         [['passport'], PassportValidator::class],
 *     ];
 * }
 * ```
 */
class PassportValidator extends Validator
{
    /**
     * @inheritDoc
     * @param string $value
     * @return array|null
     */
    public function validateValue($value): ?array
    {
        $passport = CleanHelper::passport($value);

        if (PassportQualityCheck::TRASH == $passport->qualityCheck) {
            return [Module::t('main', "Incorrect passport."), []];
        }

        if (in_array($passport->qualityCheck, [PassportQualityCheck::INCORRECT, PassportQualityCheck::INVALID])) {
            return [Module::t('main', "Please specify the passport."), []];
        }

        return null;
    }
}