<?php

namespace nsusoft\dadata\models;

use nsusoft\dadata\interfaces\ResultInterface;
use nsusoft\dadata\Module;
use nsusoft\dadata\traits\UniqueRecordTrait;
use nsusoft\dadata\types\interfaces\clean\CleanAddressInterface;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;
use yii\helpers\Json;

/**
 * This is the model class for table "{{%dadata_clean_address_result}}".
 *
 * @property int $id
 * @property string $result
 * @property string|null $postal_code
 * @property string|null $country
 * @property string|null $country_iso_code
 * @property string|null $federal_district
 * @property string|null $region_fias_id
 * @property string|null $region_kladr_id
 * @property string|null $region_iso_code
 * @property string|null $region_with_type
 * @property string|null $region_type
 * @property string|null $region_type_full
 * @property string|null $region
 * @property string|null $area_fias_id
 * @property string|null $area_kladr_id
 * @property string|null $area_with_type
 * @property string|null $area_type
 * @property string|null $area_type_full
 * @property string|null $area
 * @property string|null $city_fias_id
 * @property string|null $city_kladr_id
 * @property string|null $city_with_type
 * @property string|null $city_type
 * @property string|null $city_type_full
 * @property string|null $city
 * @property string|null $city_area
 * @property string|null $city_district_fias_id
 * @property string|null $city_district_kladr_id
 * @property string|null $city_district_with_type
 * @property string|null $city_district_type
 * @property string|null $city_district_type_full
 * @property string|null $city_district
 * @property string|null $settlement_fias_id
 * @property string|null $settlement_kladr_id
 * @property string|null $settlement_with_type
 * @property string|null $settlement_type
 * @property string|null $settlement_type_full
 * @property string|null $settlement
 * @property string|null $street_fias_id
 * @property string|null $street_kladr_id
 * @property string|null $street_with_type
 * @property string|null $street_type
 * @property string|null $street_type_full
 * @property string|null $street
 * @property string|null $house_fias_id
 * @property string|null $house_kladr_id
 * @property string|null $house_cadnum
 * @property string|null $house_type
 * @property string|null $house_type_full
 * @property string|null $house
 * @property string|null $block_type
 * @property string|null $block_type_full
 * @property string|null $block
 * @property string|null $entrance
 * @property string|null $floor
 * @property string|null $flat_fias_id
 * @property string|null $flat_cadnum
 * @property string|null $flat_type
 * @property string|null $flat_type_full
 * @property string|null $flat
 * @property string|null $flat_area
 * @property string|null $square_meter_price
 * @property string|null $flat_price
 * @property string|null $postal_box
 * @property string|null $fias_id
 * @property int|null $fias_level
 * @property int|null $fias_actuality_state
 * @property string|null $kladr_id
 * @property int|null $capital_marker
 * @property string|null $okato
 * @property string|null $oktmo
 * @property string|null $tax_office
 * @property string|null $tax_office_legal
 * @property string|null $timezone
 * @property string|null $geo_lat
 * @property string|null $geo_lon
 * @property string|null $beltway_hit
 * @property string|null $beltway_distance
 * @property int|null $qc_geo
 * @property int|null $qc_complete
 * @property int|null $qc_house
 * @property array|string|null $metro
 * @property int $created_at
 * @property int|null $updated_at
 * @property CleanAddressSource[] $sources
 */
class CleanAddressResult extends ActiveRecord implements ResultInterface
{
    use UniqueRecordTrait;

    /**
     * @inheritDoc
     */
    public static function tableName(): string
    {
        return '{{%' . Module::getInstance()->tablePrefix . 'clean_address_result}}';
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
     * @inheritDoc
     */
    public function rules(): array
    {
        return [
            [['result'], 'required'],
            [['fias_level', 'fias_actuality_state', 'capital_marker', 'qc_geo', 'qc_complete', 'qc_house'], 'integer'],
            [['metro'], 'string'],
            [['result'], 'string', 'max' => 500],
            [['postal_code', 'region_iso_code'], 'string', 'max' => 6],
            [['country', 'region', 'area', 'city', 'city_area', 'city_district', 'settlement', 'street'], 'string', 'max' => 120],
            [['country_iso_code'], 'string', 'max' => 2],
            [['federal_district', 'house_cadnum', 'flat_cadnum'], 'string', 'max' => 20],
            [['region_fias_id', 'area_fias_id', 'city_fias_id', 'city_district_fias_id', 'settlement_fias_id', 'street_fias_id', 'house_fias_id', 'flat_fias_id', 'fias_id'], 'string', 'max' => 36],
            [['region_kladr_id', 'area_kladr_id', 'city_kladr_id', 'city_district_kladr_id', 'settlement_kladr_id', 'street_kladr_id', 'house_kladr_id', 'kladr_id'], 'string', 'max' => 19],
            [['region_with_type', 'area_with_type', 'city_with_type', 'city_district_with_type', 'settlement_with_type', 'street_with_type'], 'string', 'max' => 131],
            [['region_type', 'area_type', 'city_type', 'city_district_type', 'settlement_type', 'street_type', 'house_type', 'block_type', 'entrance', 'floor', 'flat_type'], 'string', 'max' => 10],
            [['region_type_full', 'area_type_full', 'city_type_full', 'city_district_type_full', 'settlement_type_full', 'street_type_full', 'house_type_full', 'house', 'block_type_full', 'block', 'flat_type_full', 'flat', 'flat_area', 'square_meter_price', 'flat_price', 'postal_box', 'timezone'], 'string', 'max' => 50],
            [['okato', 'oktmo'], 'string', 'max' => 11],
            [['tax_office', 'tax_office_legal'], 'string', 'max' => 4],
            [['geo_lat', 'geo_lon'], 'string', 'max' => 12],
            [['beltway_hit'], 'string', 'max' => 8],
            [['beltway_distance'], 'string', 'max' => 3],
            [['result'], 'unique'],
        ];
    }

    /**
     * @inheritDoc
     */
    public function attributeLabels(): array
    {
        return [
            'id' => Module::t('main', 'ID'),
            'result' => Module::t('main', 'Result'),
            'postal_code' => Module::t('main', 'Postal code'),
            'country' => Module::t('main', 'Country'),
            'country_iso_code' => Module::t('main', 'Country ISO Code'),
            'federal_district' => Module::t('main', 'Federal district'),
            'region_fias_id' => Module::t('main', 'Region FIAS ID'),
            'region_kladr_id' => Module::t('main', 'Region KLADR ID'),
            'region_iso_code' => Module::t('main', 'Region ISO Code'),
            'region_with_type' => Module::t('main', 'Region with type'),
            'region_type' => Module::t('main', 'Region type'),
            'region_type_full' => Module::t('main', 'Region full type'),
            'region' => Module::t('main', 'Region'),
            'area_fias_id' => Module::t('main', 'Area FIAS ID'),
            'area_kladr_id' => Module::t('main', 'Area KLADR ID'),
            'area_with_type' => Module::t('main', 'Area with Type'),
            'area_type' => Module::t('main', 'Area type'),
            'area_type_full' => Module::t('main', 'Area full type'),
            'area' => Module::t('main', 'Area'),
            'city_fias_id' => Module::t('main', 'City FIAS ID'),
            'city_kladr_id' => Module::t('main', 'City KLADR ID'),
            'city_with_type' => Module::t('main', 'City with type'),
            'city_type' => Module::t('main', 'City type'),
            'city_type_full' => Module::t('main', 'City full type'),
            'city' => Module::t('main', 'City'),
            'city_area' => Module::t('main', 'City area'),
            'city_district_fias_id' => Module::t('main', 'City district FIAS ID'),
            'city_district_kladr_id' => Module::t('main', 'City district KLADR ID'),
            'city_district_with_type' => Module::t('main', 'City district with type'),
            'city_district_type' => Module::t('main', 'City district type'),
            'city_district_type_full' => Module::t('main', 'City district full type'),
            'city_district' => Module::t('main', 'City district'),
            'settlement_fias_id' => Module::t('main', 'Settlement FIAS ID'),
            'settlement_kladr_id' => Module::t('main', 'Settlement KLADR ID'),
            'settlement_with_type' => Module::t('main', 'Settlement with type'),
            'settlement_type' => Module::t('main', 'Settlement type'),
            'settlement_type_full' => Module::t('main', 'Settlement full type'),
            'settlement' => Module::t('main', 'Settlement'),
            'street_fias_id' => Module::t('main', 'Street FIAS ID'),
            'street_kladr_id' => Module::t('main', 'Street KLADR ID'),
            'street_with_type' => Module::t('main', 'Street with type'),
            'street_type' => Module::t('main', 'Street type'),
            'street_type_full' => Module::t('main', 'Street full type'),
            'street' => Module::t('main', 'Street'),
            'house_fias_id' => Module::t('main', 'House FIAS ID'),
            'house_kladr_id' => Module::t('main', 'House KLADR ID'),
            'house_cadnum' => Module::t('main', 'House inventory number'),
            'house_type' => Module::t('main', 'House type'),
            'house_type_full' => Module::t('main', 'House full type'),
            'house' => Module::t('main', 'House'),
            'block_type' => Module::t('main', 'Block type'),
            'block_type_full' => Module::t('main', 'Block full type'),
            'block' => Module::t('main', 'Block'),
            'entrance' => Module::t('main', 'Entrance'),
            'floor' => Module::t('main', 'Floor'),
            'flat_fias_id' => Module::t('main', 'Flat FIAS ID'),
            'flat_cadnum' => Module::t('main', 'Flat inventory number'),
            'flat_type' => Module::t('main', 'Flat type'),
            'flat_type_full' => Module::t('main', 'Flat full type'),
            'flat' => Module::t('main', 'Flat'),
            'flat_area' => Module::t('main', 'Flat area'),
            'square_meter_price' => Module::t('main', 'Square meter price'),
            'flat_price' => Module::t('main', 'Flat price'),
            'postal_box' => Module::t('main', 'Postal box'),
            'fias_id' => Module::t('main', 'FIAS ID'),
            'fias_level' => Module::t('main', 'FIAS level'),
            'fias_actuality_state' => Module::t('main', 'FIAS actuality state'),
            'kladr_id' => Module::t('main', 'KLADR ID'),
            'capital_marker' => Module::t('main', 'Capital marker'),
            'okato' => Module::t('main', 'OKATO'),
            'oktmo' => Module::t('main', 'OKTMO'),
            'tax_office' => Module::t('main', 'Tax office'),
            'tax_office_legal' => Module::t('main', 'Tax office legal'),
            'timezone' => Module::t('main', 'Timezone'),
            'geo_lat' => Module::t('main', 'Geo latitude'),
            'geo_lon' => Module::t('main', 'Geo longitude'),
            'beltway_hit' => Module::t('main', 'Beltway hit'),
            'beltway_distance' => Module::t('main', 'Beltway distance'),
            'qc_geo' => Module::t('main', 'Geo location quality check'),
            'qc_complete' => Module::t('main', 'Complete quality check'),
            'qc_house' => Module::t('main', 'House quality check'),
            'metro' => Module::t('main', 'Metro'),
            'created_at' => Module::t('main', 'Created at'),
            'updated_at' => Module::t('main', 'Updated at'),
        ];
    }

    /**
     * @param CleanAddressInterface|array $data
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
                'result' => $data->getResult(),
                'postal_code' => $data->getPostalCode(),
                'country' => $data->getCountry(),
                'country_iso_code' => $data->getCountryIsoCode(),
                'federal_district' => $data->getFederalDistrict(),
                'region_fias_id' => $data->getRegionFiasId(),
                'region_kladr_id' => $data->getRegionKladrId(),
                'region_iso_code' => $data->getRegionIsoCode(),
                'region_with_type' => $data->getRegionWithType(),
                'region_type' => $data->getRegionType(),
                'region_type_full' => $data->getRegionTypeFull(),
                'region' => $data->getRegion(),
                'area_fias_id' => $data->getAreaFiasId(),
                'area_kladr_id' => $data->getAreaKladrId(),
                'area_with_type' => $data->getAreaWithType(),
                'area_type' => $data->getAreaType(),
                'area_type_full' => $data->getAreaTypeFull(),
                'area' => $data->getArea(),
                'city_fias_id' => $data->getCityFiasId(),
                'city_kladr_id' => $data->getCityKladrId(),
                'city_with_type' => $data->getCityWithType(),
                'city_type' => $data->getCityType(),
                'city_type_full' => $data->getCityTypeFull(),
                'city' => $data->getCity(),
                'city_area' => $data->getCityArea(),
                'city_district_fias_id' => $data->getCityDistrictFiasId(),
                'city_district_kladr_id' => $data->getCityDistrictKladrId(),
                'city_district_with_type' => $data->getCityDistrictWithType(),
                'city_district_type' => $data->getCityDistrictType(),
                'city_district_type_full' => $data->getCityDistrictTypeFull(),
                'city_district' => $data->getCityDistrict(),
                'settlement_fias_id' => $data->getSettlementFiasId(),
                'settlement_kladr_id' => $data->getSettlementKladrId(),
                'settlement_with_type' => $data->getSettlementWithType(),
                'settlement_type' => $data->getSettlementType(),
                'settlement_type_full' => $data->getSettlementTypeFull(),
                'settlement' => $data->getSettlement(),
                'street_fias_id' => $data->getStreetFiasId(),
                'street_kladr_id' => $data->getStreetKladrId(),
                'street_with_type' => $data->getStreetWithType(),
                'street_type' => $data->getStreetType(),
                'street_type_full' => $data->getStreetTypeFull(),
                'street' => $data->getStreet(),
                'house_fias_id' => $data->getHouseFiasId(),
                'house_kladr_id' => $data->getHouseKladrId(),
                'house_cadnum' => $data->getHouseCadastralNumber(),
                'house_type' => $data->getHouseType(),
                'house_type_full' => $data->getHouseTypeFull(),
                'house' => $data->getHouse(),
                'block_type' => $data->getBlockType(),
                'block_type_full' => $data->getBlockTypeFull(),
                'block' => $data->getBlock(),
                'entrance' => $data->getEntrance(),
                'floor' => $data->getFloor(),
                'flat_fias_id' => $data->getFlatFiasId(),
                'flat_cadnum' => $data->getFlatCadastralNumber(),
                'flat_type' => $data->getFlatType(),
                'flat_type_full' => $data->getFlatTypeFull(),
                'flat' => $data->getFlat(),
                'flat_area' => $data->getFlatArea(),
                'square_meter_price' => $data->getSquareMeterPrice(),
                'flat_price' => $data->getFlatPrice(),
                'postal_box' => $data->getPostalBox(),
                'fias_id' => $data->getFiasId(),
                'fias_level' => $data->getFiasLevel(),
                'fias_actuality_state' => $data->getFiasActualityState(),
                'kladr_id' => $data->getKladrId(),
                'capital_marker' => $data->getCapitalMarker(),
                'okato' => $data->getOkato(),
                'oktmo' => $data->getOktmo(),
                'tax_office' => $data->getTaxOffice(),
                'tax_office_legal' => $data->getTaxOfficeLegal(),
                'timezone' => $data->getTimezone(),
                'geo_lat' => $data->getGeographicalLatitude(),
                'geo_lon' => $data->getGeographicalLongitude(),
                'beltway_hit' => $data->getBeltwayHit(),
                'beltway_distance' => $data->getBeltwayDistance(),
                'qc_geo' => $data->getQualityCheckGeographical(),
                'qc_complete' => $data->getQualityCheckComplete(),
                'qc_house' => $data->getQualityCheckHouse(),
                'metro' => $data->getMetro(),
            ],
            $formName
        );
    }

    /**
     * @return bool
     */
    public function beforeValidate(): bool
    {
        if (!parent::beforeValidate()) {
            return false;
        }

        if (is_array($this->metro)) {
            $this->metro = Json::encode($this->metro);
        }

        return true;
    }

    /**
     * @return ActiveQuery
     */
    public function getSources(): ActiveQuery
    {
        return $this->hasMany(CleanAddressSource::class, ['address_result_id' => 'id']);
    }

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }
}
