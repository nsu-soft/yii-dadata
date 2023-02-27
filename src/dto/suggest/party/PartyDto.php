<?php

namespace nsusoft\dadata\dto\suggest\party;

use nsusoft\dadata\dto\DtoInterface;

/**
 * @link https://dadata.ru/api/suggest/party/
 */
class PartyDto implements DtoInterface
{
    /**
     * @var string
     */
    public $value;
    /**
     * @var string
     */
    public $unrestrictedValue;
    /**
     * @var string|null
     */
    public $inn;
    /**
     * @var string|null
     */
    public $kpp;
    /**
     * @var string|null
     */
    public $ogrn;
    /**
     * @var string|null
     */
    public $ogrnDate;
    /**
     * @var string|null
     */
    public $hid;
    /**
     * @var string|null
     */
    public $type;
    /**
     * @var OrganisationNameDto
     */
    public $name;
    /**
     * @var OwnerNameDto
     */
    public $owner;
    /**
     * @var string|null
     */
    public $okato;
    /**
     * @var string|null
     */
    public $oktmo;
    /**
     * @var string|null
     */
    public $okpo;
    /**
     * @var string|null
     */
    public $okogu;
    /**
     * @var string|null
     */
    public $okfs;
    /**
     * @var string|null
     */
    public $okved;
    /**
     * @var string|null
     */
    public $okvedType;
    /**
     * @var OpfDto
     */
    public $opf;
    /**
     * @var ManagementDto
     */
    public $management;
    /**
     * @var int|null
     */
    public $branchCount;
    /**
     * @var string|null
     */
    public $branchType;
    /**
     * @var AddressDto
     */
    public $address;
    /**
     * @var StateDto
     */
    public $state;
    /**
     * @var bool|null
     */
    public $invalid;
}