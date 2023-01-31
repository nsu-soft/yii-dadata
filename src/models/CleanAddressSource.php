<?php

namespace nsusoft\dadata\models;

use nsusoft\dadata\interfaces\SourceInterface;
use nsusoft\dadata\Module;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%dadata_clean_address_source}}".
 *
 * @property int $id
 * @property int $result_id
 * @property string $source
 * @property int|null $qc
 * @property string|null $unparsed_parts
 * @property int $created_at
 * @property int|null $updated_at
 * @property CleanAddressResult $result
 */
class CleanAddressSource extends ActiveRecord implements SourceInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName(): string
    {
        return '{{%' . Module::getInstance()->tablePrefix . 'clean_address_source}}';
    }

    /**
     * @inheritdoc
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
            [['result_id', 'source'], 'required'],
            [['result_id', 'qc'], 'integer'],
            [['source'], 'string', 'max' => 250],
            [['source'], 'unique'],
            [['unparsed_parts'], 'string', 'max' => 250],
            [['result_id'], 'exist', 'skipOnError' => true, 'targetClass' => CleanAddressResult::class, 'targetAttribute' => ['result_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'id' => Module::t('main', 'ID'),
            'result_id' => Module::t('main', 'Address result ID'),
            'source' => Module::t('main', 'Source'),
            'qc' => Module::t('main', 'Quality check'),
            'unparsed_parts' => Module::t('main', 'Unparsed parts'),
            'created_at' => Module::t('main', 'Created at'),
            'updated_at' => Module::t('main', 'Updated at'),
        ];
    }

    /**
     * Gets query for [[CleanAddressResult]].
     * @return ActiveQuery
     */
    public function getResult(): ActiveQuery
    {
        return $this->hasOne(CleanAddressResult::class, ['id' => 'result_id']);
    }

    /**
     * @inheritDoc
     */
    public function setResultId(int $resultId): void
    {
        $this->result_id = $resultId;
    }
}
