<?php

namespace nsusoft\dadata\cache\db\find;

use nsusoft\dadata\cache\db\PermanentExtendedCache;
use nsusoft\dadata\exceptions\CacheException;
use nsusoft\dadata\models\FindPartyModel;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\PartyFindKeySize;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

class FindByIdPartyCache extends PermanentExtendedCache
{
    /**
     * @return FindPartyModel
     */
    protected function createModel(): ActiveRecord
    {
        return new FindPartyModel();
    }

    /**
     * @inheritDoc
     * @throws CacheException
     */
    protected function findModel(string $value, array $options): ActiveQuery
    {
        switch (strlen($value)) {
            case PartyFindKeySize::INN_LEGAL:
                if (empty($options['kpp'])) {
                    // If KPP is empty try to find the main branch
                    return FindPartyModel::find()->where(['inn' => $value, 'branch_type' => 'MAIN']);
                } else {
                    // Else will find by INN and KPP
                    return FindPartyModel::find()->where(['inn' => $value, 'kpp' => $options['kpp']]);
                }
            case PartyFindKeySize::OGRN_LEGAL:
                if (empty($options['kpp'])) {
                    // If KPP is empty try to find the main branch
                    return FindPartyModel::find()->where(['ogrn' => $value, 'branch_type' => 'MAIN']);
                } else {
                    // Else will find by OGRN and KPP
                    return FindPartyModel::find()->where(['ogrn' => $value, 'kpp' => $options['kpp']]);
                }
            case PartyFindKeySize::INN_INDIVIDUAL:
                return FindPartyModel::find()->where(['inn' => $value]);
            case PartyFindKeySize::OGRN_INDIVIDUAL:
                return FindPartyModel::find()->where(['ogrn' => $value]);
            default:
                throw new CacheException(Module::t('main', "Wrong search parameters."), 400);
        }
    }
}