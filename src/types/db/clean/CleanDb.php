<?php

namespace nsusoft\dadata\types\db\clean;

use nsusoft\dadata\types\db\BaseDb;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;

class CleanDb extends BaseDb implements CleanInterface
{
    /**
     * @inheritDoc
     */
    public function getSource(): string
    {
        return $this->sourceModel->source;
    }

    /**
     * @inheritDoc
     */
    public function getResult(): string
    {
        return $this->sourceModel->result->result;
    }
}