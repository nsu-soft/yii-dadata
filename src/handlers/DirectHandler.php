<?php

namespace nsusoft\dadata\handlers;

use nsusoft\dadata\adapters\SuggestAdapter;
use nsusoft\dadata\api\Client;
use nsusoft\dadata\factories\DirectFactory;
use nsusoft\dadata\factories\FactoryInterface;
use nsusoft\dadata\Module;
use nsusoft\dadata\types\enums\CleanType;
use nsusoft\dadata\types\enums\SuggestType;
use nsusoft\dadata\types\interfaces\clean\CleanInterface;
use yii\base\InvalidCallException;

class DirectHandler extends BaseHandler
{
    /**
     * @inheritDoc
     */
    public function clean(string $type, string $value): ?CleanInterface
    {
        if (!CleanType::exists($type)) {
            throw new InvalidCallException(Module::t('main', 'Invalid clean type.'));
        }

        $clean = $this->createFactory()->createClean($type);
        $clean->setRawData($this->createClient()->clean($type, $value));

        return $clean;
    }

    /**
     * @inheritDoc
     */
    public function suggest(string $type, string $value, array $options = []): array
    {
        if (!SuggestType::exists($type)) {
            throw new InvalidCallException(Module::t('main', 'Invalid suggest type.'));
        }

        $suggestMethod = new SuggestAdapter([
            'client' => $this->createClient(),
            'type' => $type,
            'value' => $value,
            'options' => $options,
        ]);

        $rawSuggests = $suggestMethod->call();
        $factory = $this->createFactory();
        $suggests = [];

        foreach ($rawSuggests as $rawSuggest) {
            $suggest = $factory->createSuggest($type);
            $suggest->setRawData($rawSuggest);
            $suggests[] = $suggest;
        }

        return $suggests;
    }

    /**
     * @return DirectFactory
     */
    protected function createFactory(): FactoryInterface
    {
        return new DirectFactory();
    }

    /**
     * @return Client
     */
    private function createClient(): Client
    {
        return new Client();
    }
}