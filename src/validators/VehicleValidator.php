<?php

namespace nsusoft\dadata\validators;

use nsusoft\dadata\helpers\CleanHelper;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\VehicleQualityCheck;
use yii\validators\Validator;

/**
 * Validates a vehicle brand and model using the DaData cleaning API.
 *
 * Usage:
 * ```
 * public function rules(): array
 * {
 *     return [
 *         [['vehicle'], VehicleValidator::class],
 *     ];
 * }
 * ```
 */
class VehicleValidator extends Validator
{
    /**
     * @inheritDoc
     * @param string $value
     * @return array|null
     */
    public function validateValue($value): ?array
    {
        $vehicle = CleanHelper::vehicle($value);

        if (in_array($vehicle->qualityCheck, [VehicleQualityCheck::TRASH, VehicleQualityCheck::BRAND_ONLY])) {
            return [Module::t('main', "Incorrect vehicle."), []];
        }

        if (VehicleQualityCheck::INCORRECT === $vehicle->qualityCheck) {
            return [Module::t('main', "Please check the vehicle."), []];
        }

        return null;
    }
}