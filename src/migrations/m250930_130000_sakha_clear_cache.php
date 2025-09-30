<?php

use nsusoft\dadata\Module;
use yii\db\Migration;

/**
 * Class m250930_130000_sakha_clear_cache
 */
class m250930_130000_sakha_clear_cache extends Migration
{
    /**
     * @inheritDoc
     */
    public function up()
    {
        $tablePrefix = Module::getInstance()->tablePrefix;

        $this->delete("{{%{$tablePrefix}clean_address_result}}", [
            'region_fias_id' => 'c225d3db-1db6-4063-ace0-b3fe9ea3805f',
        ]);
    }

    /**
     * @inheritDoc
     */
    public function down()
    {
        return null;
    }
}
