<?php

use nsusoft\dadata\Module;
use yii\db\Migration;

/**
 * Class m220922_055758_dadata_clean_cache
 */
class m220922_055758_dadata_clean_address extends Migration
{
    /**
     * @inheritDoc
     */
    public function up()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;
        $tableOptions = null;

        if ('mysql' === $this->db->driverName) {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable("{{%{$tablePrefix}clean_address_source}}", [
            'id' => $this->primaryKey(),
            'result_id' => $this->integer()->notNull(),
            'source' => $this->string(250)->unique()->notNull(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->createTable("{{%{$tablePrefix}clean_address_result}}", [
            'id' => $this->primaryKey(),
            'result' => $this->string(500)->unique()->notNull(),
            'postal_code' => $this->string(6),
            'country' => $this->string(120),
            'country_iso_code' => $this->string(2),
            'federal_district' => $this->string(20),
            'region_fias_id' => $this->string(36),
            'region_kladr_id' => $this->string(19),
            'region_iso_code' => $this->string(6),
            'region_with_type' => $this->string(131),
            'region_type' => $this->string(10),
            'region_type_full' => $this->string(50),
            'region' => $this->string(120),
            'area_fias_id' => $this->string(36),
            'area_kladr_id' => $this->string(19),
            'area_with_type' => $this->string(131),
            'area_type' => $this->string(10),
            'area_type_full' => $this->string(50),
            'area' => $this->string(120),
            'city_fias_id' => $this->string(36),
            'city_kladr_id' => $this->string(19),
            'city_with_type' => $this->string(131),
            'city_type' => $this->string(10),
            'city_type_full' => $this->string(50),
            'city' => $this->string(120),
            'city_area' => $this->string(120),
            'city_district_fias_id' => $this->string(36),
            'city_district_kladr_id' => $this->string(19),
            'city_district_with_type' => $this->string(131),
            'city_district_type' => $this->string(10),
            'city_district_type_full' => $this->string(50),
            'city_district' => $this->string(120),
            'settlement_fias_id' => $this->string(36),
            'settlement_kladr_id' => $this->string(19),
            'settlement_with_type' => $this->string(131),
            'settlement_type' => $this->string(10),
            'settlement_type_full' => $this->string(50),
            'settlement' => $this->string(120),
            'street_fias_id' => $this->string(36),
            'street_kladr_id' => $this->string(19),
            'street_with_type' => $this->string(131),
            'street_type' => $this->string(10),
            'street_type_full' => $this->string(50),
            'street' => $this->string(120),
            'house_fias_id' => $this->string(36),
            'house_kladr_id' => $this->string(19),
            'house_cadnum' => $this->string(20),
            'house_type' => $this->string(10),
            'house_type_full' => $this->string(50),
            'house' => $this->string(50),
            'block_type' => $this->string(10),
            'block_type_full' => $this->string(50),
            'block' => $this->string(50),
            'entrance' => $this->string(10),
            'floor' => $this->string(10),
            'flat_fias_id' => $this->string(36),
            'flat_cadnum' => $this->string(20),
            'flat_type' => $this->string(10),
            'flat_type_full' => $this->string(50),
            'flat' => $this->string(50),
            'flat_area' => $this->string(50),
            'square_meter_price' => $this->string(50),
            'flat_price' => $this->string(50),
            'postal_box' => $this->string(50),
            'fias_id' => $this->string(36),
            'fias_level' => $this->integer(),
            'fias_actuality_state' => $this->integer(), // !!!
            'kladr_id' => $this->string(19),
            'capital_marker' => $this->integer(),
            'okato' => $this->string(11),
            'oktmo' => $this->string(11),
            'tax_office' => $this->string(4),
            'tax_office_legal' => $this->string(4),
            'timezone' => $this->string(50),
            'geo_lat' => $this->string(12),
            'geo_lon' => $this->string(12),
            'beltway_hit' => $this->string(8),
            'beltway_distance' => $this->string(3),
            'qc_geo' => $this->integer(),
            'qc_complete' => $this->integer(),
            'qc_house' => $this->integer(),
            'qc' => $this->integer(),
            'unparsed_parts' => $this->string(250),
            'metro' => $this->text(),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer(),
        ], $tableOptions);

        $this->addForeignKey(
            'fk-clean_address_source-result_id',
            "{{%{$tablePrefix}clean_address_source}}",
            'result_id',
            "{{%{$tablePrefix}clean_address_result}}",
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;
        $this->dropForeignKey('fk-clean_address_source-result_id', "{{%{$tablePrefix}clean_address_source}}");
        $this->dropTable("{{%{$tablePrefix}clean_address_source}}");
        $this->dropTable("{{%{$tablePrefix}clean_address_result}}");
    }
}
