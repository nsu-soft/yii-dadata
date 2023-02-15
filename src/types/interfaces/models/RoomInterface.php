<?php

namespace nsusoft\dadata\types\interfaces\models;

/**
 * @property string|null $roomFiasId
 * @property string|null $roomType
 * @property string|null $roomTypeFull
 * @property string|null $room
 */
interface RoomInterface
{
    /**
     * @return string|null
     */
    public function getRoomFiasId(): ?string;

    /**
     * @return string|null
     */
    public function getRoomType(): ?string;

    /**
     * @return string|null
     */
    public function getRoomTypeFull(): ?string;

    /**
     * @return string|null
     */
    public function getRoom(): ?string;
}