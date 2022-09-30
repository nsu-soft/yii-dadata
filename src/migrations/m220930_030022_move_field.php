<?php

use nsusoft\dadata\Module;
use yii\db\Migration;

/**
 * Class m220930_030022_move_field
 */
class m220930_030022_move_field extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;

        // clear cache
        $this->delete("{{%{$tablePrefix}clean_address_result}}");

        $this->dropColumn("{{%{$tablePrefix}clean_address_result}}", 'qc');
        $this->dropColumn("{{%{$tablePrefix}clean_address_result}}", 'unparsed_parts');

        $this->addColumn("{{%{$tablePrefix}clean_address_source}}", 'qc', $this->integer()->after('source'));
        $this->addColumn("{{%{$tablePrefix}clean_address_source}}", 'unparsed_parts', $this->string(250)->after('qc'));
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;

        // clear cache
        $this->delete("{{%{$tablePrefix}clean_address_result}}");

        $this->dropColumn("{{%{$tablePrefix}clean_address_source}}", 'qc');
        $this->dropColumn("{{%{$tablePrefix}clean_address_source}}", 'unparsed_parts');

        $this->addColumn("{{%{$tablePrefix}clean_address_result}}", 'qc', $this->integer()->after('qc_house'));
        $this->addColumn("{{%{$tablePrefix}clean_address_result}}", 'unparsed_parts', $this->string(250)->after('qc'));
    }
}
