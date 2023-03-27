<?php

use nsusoft\dadata\Module;
use yii\db\Migration;

/**
 * Class m230327_111000_address_result_fix
 */
class m230327_111000_address_result_fix extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;

        $this->alterColumn("{{%{$tablePrefix}clean_address_result}}", 'result', $this->string(500)->unique());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;

        $this->delete("{{%{$tablePrefix}clean_address_result}}", ['result' => null]);
        $this->alterColumn("{{%{$tablePrefix}clean_address_result}}", 'result', $this->string(500)->unique()->notNull());
    }
}
