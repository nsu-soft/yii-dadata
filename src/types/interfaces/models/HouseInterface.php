<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $houseFiasId
 * @property string|null $houseKladrId
 * @property string|null $houseCadastralNumber
 * @property string|null $houseType
 * @property string|null $houseTypeFull
 * @property string|null $house
 */
interface HouseInterface
{
    /**
     * @return string|null
     */
    public function getHouseFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getHouseKladrId(): ?string;

    /**
     * @return string|null
     */
    public function getHouseCadastralNumber(): ?string;

    /**
     * @return string|null
     */
    public function getHouseType(): ?string;

    /**
     * @return string|null
     */
    public function getHouseTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getHouse(): ?string;
}