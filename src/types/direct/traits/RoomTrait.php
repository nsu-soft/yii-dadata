<?php

namespace nsusoft\dadata\types\direct\traits;

trait RoomTrait
{
    /**
     * @inheritDoc
     */
    public function getRoomFiasId(): ?string
    {
        return $this->rawData['room_fias_id'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRoomType(): ?string
    {
        return $this->rawData['room_type'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRoomTypeFull(): ?string
    {
        return $this->rawData['room_type_full'] ?? null;
    }

    /**
     * @inheritDoc
     */
    public function getRoom(): ?string
    {
        return $this->rawData['room'] ?? null;
    }
}