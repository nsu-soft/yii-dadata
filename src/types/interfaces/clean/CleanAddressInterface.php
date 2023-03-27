<?php

namespace nsusoft\dadata\types\interfaces\clean;

use nsusoft\dadata\types\direct\clean\CleanAddressDirect;
use nsusoft\dadata\types\interfaces\models\AddressInterface;
use nsusoft\dadata\types\interfaces\models\BeltwayInterface;
use nsusoft\dadata\types\interfaces\models\GeoPositionInterface;

/**
 * @link https://dadata.ru/api/clean/address/ Documentation page.
 * @see CleanAddressDirect
 * @property string|null $squareMeterPrice
 * @property string|null $okato
 * @property string|null $oktmo
 * @property string|null $taxOffice
 * @property string|null $taxOfficeLegal
 * @property string|null $timezone
 * @property int|null $qualityCheck
 * @property int|null $qualityCheckComplete
 * @property int|null $qualityCheckHouse
 * @property array $metro
 * @property string|null $unparsedParts
 */
interface CleanAddressInterface extends CleanInterface, AddressInterface, GeoPositionInterface, BeltwayInterface
{
    /**
     * @return string|null
     */
    public function getResult(): ?string;

    /**
     * @return string|null
     */
    public function getSquareMeterPrice(): ?string;

    /**
     * @return string|null
     */
    public function getOkato(): ?string;

    /**
     * @return string|null
     */
    public function getOktmo(): ?string;

    /**
     * @return string|null
     */
    public function getTaxOffice(): ?string;

    /**
     * @return string|null
     */
    public function getTaxOfficeLegal(): ?string;

    /**
     * @return string|null
     */
    public function getTimezone(): ?string;

    /**
     * @return int|null
     */
    public function getQualityCheckComplete(): ?int;

    /**
     * @return int|null
     */
    public function getQualityCheckHouse(): ?int;

    /**
     * @return array
     */
    public function getMetro(): array;

    /**
     * @return string|null
     */
    public function getUnparsedParts(): ?string;
}