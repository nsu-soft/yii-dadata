<?php

namespace nsusoft\dadata\adapters\dto;

interface AdapterInterface
{
    /**
     * Sets source of data.
     * @param mixed $source Source data.
     * @return void
     */
    public function setSource($source): void;

    /**
     * Moves data from source to DTO and returns a result.
     * @return mixed
     */
    public function populate();
}