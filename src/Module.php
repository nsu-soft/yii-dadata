<?php

namespace nsusoft\dadata;

use Yii;

/**
 * Main module settings.
 */
class Module extends \yii\base\Module
{
    /**
     * @var bool Set `true`, if you need to save responses from DaData to local database.
     * @deprecated Use 'cachePriority' = [DbHandler::class] in module configuration instead of this option.
     */
    public $enableDbCache = false;

    /**
     * @var array From high to low level. Base level is a direct API call.
     */
    public $cachePriority = [];

    /**
     * @var string Tables prefix for DaData module. Has no effect for application tables prefix.
     */
    public $tablePrefix = 'dadata_';

    /**
     * @var string Access token for DaData API.
     */
    public $token;

    /**
     * @var string Secret for DaData API.
     */
    public $secret = null;

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Yii::setAlias('@' . $this->uniqueId, __DIR__);
        $this->registerTranslations();
    }

    /**
     * @return void
     */
    public function registerTranslations()
    {
        Yii::$app->i18n->translations['modules/' . $this->uniqueId . '/*'] = [
            'class' => 'yii\i18n\PhpMessageSource',
            'sourceLanguage' => 'en-US',
            'basePath' => '@' . $this->uniqueId . '/messages',
            'fileMap' => [
                'modules/' . $this->uniqueId . '/main' => 'main.php',
                'modules/' . $this->uniqueId . '/manual' => 'manual.php',
            ],
        ];
    }

    /**
     * @see Yii::t()
     * @param string $category
     * @param string $message
     * @param array $params
     * @param string|null $language
     * @return string
     */
    public static function t(string $category, string $message, array $params = [], ?string $language = null): string
    {
        if (!isset(Yii::$app->i18n->translations['modules/' . self::getInstance()->uniqueId . '/*'])) {
            return $message;
        }

        return Yii::t('modules/' . self::getInstance()->uniqueId . '/' . $category, $message, $params, $language);
    }
}
