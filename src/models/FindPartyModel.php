<?php

namespace nsusoft\dadata\models;

use nsusoft\dadata\dto\suggest\party\PartyDto;
use nsusoft\dadata\Module;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "dadata_find_party".
 *
 * @property int $id
 * @property string $value
 * @property string $inn
 * @property string|null $kpp
 * @property string $ogrn
 * @property string|null $ogrn_date
 * @property string|null $hid
 * @property string|null $type
 * @property string|null $name_full_with_opf
 * @property string|null $name_short_with_opf
 * @property string|null $name_full
 * @property string|null $name_short
 * @property string|null $fio_surname
 * @property string|null $fio_name
 * @property string|null $fio_patronymic
 * @property string|null $okato
 * @property string|null $oktmo
 * @property string|null $okpo
 * @property string|null $okogu
 * @property string|null $okfs
 * @property string|null $okved
 * @property string|null $okved_type
 * @property string|null $opf_code
 * @property string|null $opf_full
 * @property string|null $opf_short
 * @property string|null $opf_type
 * @property string|null $management_name
 * @property string|null $management_post
 * @property int|null $management_disqualified
 * @property int|null $branch_count
 * @property string|null $branch_type
 * @property string|null $address_value
 * @property string|null $address_unrestricted_value
 * @property string|null $address_source
 * @property string|null $address_quality_check
 * @property string|null $state_actuality_date
 * @property string|null $state_registration_date
 * @property string|null $state_liquidation_date
 * @property string|null $state_status
 * @property string|null $state_code
 * @property int|null $invalid
 * @property int $created_at
 * @property int|null $updated_at
 */
class FindPartyModel extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return '{{%' . Module::getInstance()->tablePrefix . 'find_party}}';
    }

    /**
     * @inheritDoc
     */
    public function behaviors(): array
    {
        return [
            'timestamp' => [
                'class' => TimestampBehavior::class,
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules(): array
    {
        return [
            [['value', 'inn', 'ogrn'], 'required'],
            [['ogrn_date', 'state_actuality_date', 'state_registration_date', 'state_liquidation_date'], 'safe'],
            [['management_disqualified', 'branch_count', 'invalid', 'created_at', 'updated_at'], 'integer'],
            [['value', 'name_full_with_opf', 'name_short_with_opf', 'name_full', 'name_short', 'opf_full', 'opf_short', 'address_value', 'address_unrestricted_value', 'address_source'], 'string', 'max' => 1000],
            [['inn', 'ogrn', 'okato', 'oktmo'], 'string', 'max' => 20],
            [['kpp', 'okpo', 'okogu', 'okfs', 'okved', 'okved_type', 'opf_code', 'opf_type', 'address_quality_check', 'state_code'], 'string', 'max' => 10],
            [['hid', 'fio_surname', 'fio_name', 'fio_patronymic'], 'string', 'max' => 100],
            [['type', 'branch_type', 'state_status'], 'string', 'max' => 50],
            [['management_name'], 'string', 'max' => 200],
            [['management_post'], 'string', 'max' => 500],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => 'ID',
            'value' => 'Value',
            'inn' => 'Inn',
            'kpp' => 'Kpp',
            'ogrn' => 'Ogrn',
            'ogrn_date' => 'Ogrn Date',
            'hid' => 'Hid',
            'type' => 'Type',
            'name_full_with_opf' => 'Name Full With Opf',
            'name_short_with_opf' => 'Name Short With Opf',
            'name_full' => 'Name Full',
            'name_short' => 'Name Short',
            'fio_surname' => 'Fio Surname',
            'fio_name' => 'Fio Name',
            'fio_patronymic' => 'Fio Patronymic',
            'okato' => 'Okato',
            'oktmo' => 'Oktmo',
            'okpo' => 'Okpo',
            'okogu' => 'Okogu',
            'okfs' => 'Okfs',
            'okved' => 'Okved',
            'okved_type' => 'Okved Type',
            'opf_code' => 'Opf Code',
            'opf_full' => 'Opf Full',
            'opf_short' => 'Opf Short',
            'opf_type' => 'Opf Type',
            'management_name' => 'Management Name',
            'management_post' => 'Management Post',
            'management_disqualified' => 'Management Disqualified',
            'branch_count' => 'Branch Count',
            'branch_type' => 'Branch Type',
            'address_value' => 'Address Value',
            'address_unrestricted_value' => 'Address Unrestricted Value',
            'address_source' => 'Address Source',
            'address_quality_check' => 'Address Quality Check',
            'state_actuality_date' => 'State Actuality Date',
            'state_registration_date' => 'State Registration Date',
            'state_liquidation_date' => 'State  Liquidation Date',
            'state_status' => 'State Status',
            'state_code' => 'State Code',
            'invalid' => 'Invalid',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @param PartyDto|array $data
     * @param string|null $formName
     * @return bool
     */
    public function load($data, $formName = null): bool
    {
        if (is_array($data)) {
            return parent::load($data, $formName);
        }

        return parent::load(
            [
                'value' => $data->value,
                'inn' => $data->inn,
                'kpp' => $data->kpp,
                'ogrn' => $data->ogrn,
                'ogrn_date' => $data->ogrnDate,
                'hid' => $data->hid,
                'type' => $data->type,
                'okato' => $data->okato,
                'oktmo' => $data->oktmo,
                'okpo' => $data->okpo,
                'okogu' => $data->okogu,
                'okfs' => $data->okfs,
                'okved' => $data->okved,
                'okved_type' => $data->okvedType,
                'invalid' => $data->invalid,

                'name_full_with_opf' => $data->name->fullWithOpf,
                'name_short_with_opf' => $data->name->shortWithOpf,
                'name_full' => $data->name->full,
                'name_short' => $data->name->short,

                'fio_surname' => isset($data->owner) ? $data->owner->surname : null,
                'fio_name' => isset($data->owner) ? $data->owner->name : null,
                'fio_patronymic' => isset($data->owner) ? $data->owner->patronymic : null,

                'opf_code' => $data->opf->code,
                'opf_full' => $data->opf->full,
                'opf_short' => $data->opf->short,
                'opf_type' => $data->opf->type,

                'management_name' => isset($data->management) ? $data->management->name : null,
                'management_post' => isset($data->management) ? $data->management->post : null,

                'branch_count' => $data->branchCount,
                'branch_type' => $data->branchType,

                'address_value' => $data->address->value,
                'address_unrestricted_value' => $data->address->unrestrictedValue,
                'address_source' => $data->address->source,
                'address_quality_check' => $data->address->qualityCheck,

                'state_actuality_date' => $data->state->actualityDate,
                'state_registration_date' => $data->state->registrationDate,
                'state_liquidation_date' => $data->state->liquidationDate,
                'state_status' => $data->state->status,
                'state_code' => $data->state->code,
            ],
            $formName
        );
    }
}
