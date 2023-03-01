<?php

use nsusoft\dadata\Module;
use yii\db\Migration;

/**
 * Class m230301_155000_metro_default_value
 */
class m230301_155000_metro_default_value extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;
        $this->update("{{%{$tablePrefix}clean_address_result}}", ['metro' => '[]'], ['metro' => null]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        return null;
    }
}
