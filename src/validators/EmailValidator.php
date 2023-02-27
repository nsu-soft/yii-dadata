<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\EmailQualityCheck;
use yii\validators\Validator;

/**
 * Validates email using the DaData cleaning API.
 *
 * Usage:
 * ```
 * public function rules(): array
 * {
 *     return [
 *         [['email'], EmailValidator::class],
 *     ];
 * }
 * ```
 */
class EmailValidator extends Validator
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
        $email = CleanHelper::email($value);

        if (in_array($email->qualityCheck, [EmailQualityCheck::TRASH, EmailQualityCheck::ONE_TIME])) {
            return [Module::t('main', "Incorrect email."), []];
        }

        if ($this->strict && in_array($email->qualityCheck, [EmailQualityCheck::INCORRECT, EmailQualityCheck::MISPRINT])) {
            return [Module::t('main', "Please check the email."), []];
        }

        return null;
    }
}