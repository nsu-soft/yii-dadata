<?php

namespace nsusoft\dadata\types\interfaces\suggest;

use nsusoft\dadata\types\interfaces\models\AddressInterface;
use nsusoft\dadata\types\interfaces\models\BeltwayInterface;
use nsusoft\dadata\types\interfaces\models\GeoPositionInterface;
use nsusoft\dadata\types\interfaces\models\RoomInterface;
use nsusoft\dadata\types\interfaces\models\SteadInterface;
use nsusoft\dadata\types\interfaces\models\SubAreaInterface;

interface SuggestAddressInterface extends
    SuggestInterface,
    AddressInterface,
    SubAreaInterface,
    SteadInterface,
    RoomInterface,
    GeoPositionInterface,
    BeltwayInterface
{
    /**
     * @return string
     */
    public function getUnrestrictedValue(): string;

    /**
     * @return string|null
     */
    public function getSquareMeterPrice(): ?string;

    /**
     * @return string|null
     */
    public function getGeonameId(): ?string;

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
     * @return array
     */
    public function getHistoryValues(): array;

    /**
     * @return array
     */
    public function getMetro(): array;
}