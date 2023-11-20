<?php

use nsusoft\dadata\Module;
use yii\db\Migration;

/**
 * Class m231012_101001_create_find_party_table
 */
class m231012_101001_create_find_party_table extends Migration
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

        $this->createTable("{{%{$tablePrefix}find_party}}", [
            'id' => $this->primaryKey(),
            'value' => $this->string(1000)->notNull(),
            'inn' => $this->string(20)->notNull(),
            'kpp' => $this->string(10),
            'ogrn' => $this->string(20)->notNull(),
            'ogrn_date' => $this->date(),
            'hid' => $this->string(100),
            'type' => $this->string(50),

            'name_full_with_opf' => $this->string(1000),
            'name_short_with_opf' => $this->string(1000),
            'name_full' => $this->string(1000),
            'name_short' => $this->string(1000),

            'fio_surname' => $this->string(100),
            'fio_name' => $this->string(100),
            'fio_patronymic' => $this->string(100),

            'okato' => $this->string(20),
            'oktmo' => $this->string(20),
            'okpo' => $this->string(10),
            'okogu' => $this->string(10),
            'okfs' => $this->string(10),
            'okved' => $this->string(10),
            'okved_type' => $this->string(10),

            'opf_code' => $this->string(10),
            'opf_full' => $this->string(1000),
            'opf_short' => $this->string(1000),
            'opf_type' => $this->string(10),

            'management_name' => $this->string(200),
            'management_post' => $this->string(500),
            'management_disqualified' => $this->boolean(),

            'branch_count' => $this->integer(),
            'branch_type' => $this->string(50),

            'address_value' => $this->string(1000),
            'address_unrestricted_value' => $this->string(1000),
            'address_source' => $this->string(1000),
            'address_quality_check' => $this->string(10),

            'state_actuality_date' => $this->date(),
            'state_registration_date' => $this->date(),
            'state_liquidation_date' => $this->date(),
            'state_status' => $this->string(50),
            'state_code' => $this->string(10),

            'invalid' => $this->boolean(),

            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()
        ], $tableOptions);

        // Add indexes with a unique constraint
        $this->createIndex("idx-unique-inn-kpp","{{%{$tablePrefix}find_party}}", ['inn', 'kpp'],true);
        $this->createIndex("idx-unique-ogrn-kpp","{{%{$tablePrefix}find_party}}", ['ogrn', 'kpp'],true);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;
        $this->dropIndex("idx-unique-ogrn-kpp", "{{%{$tablePrefix}find_party}}");
        $this->dropIndex("idx-unique-inn-kpp", "{{%{$tablePrefix}find_party}}");
        $this->dropTable("{{%{$tablePrefix}find_party}}");
    }
}
