<?php

namespace nsusoft\dadata\models;

use nsusoft\dadata\interfaces\SourceInterface;
use nsusoft\dadata\Module;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "{{%dadata_address_source}}".
 *
 * @property int $id
 * @property int $result_id
 * @property string $source
 * @property int|null $qc
 * @property string|null $unparsed_parts
 * @property int $created_at
 * @property int|null $updated_at
 * @property AddressResult $result
 */
class AddressSource extends ActiveRecord implements SourceInterface
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
            [['result_id'], 'exist', 'skipOnError' => true, 'targetClass' => AddressResult::class, 'targetAttribute' => ['result_id' => 'id']],
        ];
    }

    /**
     * @inheritDoc
     */
    public function fields(): array
    {
        return [
            'source',
            'qc',
            'unparsed_parts',
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
     * Gets query for [[AddressResult]].
     * @return ActiveQuery
     */
    public function getResult(): ActiveQuery
    {
        return $this->hasOne(AddressResult::class, ['id' => 'result_id']);
    }
}
