<?php

namespace nsusoft\dadata\adapters\methods;

use Dadata\Settings;
use nsusoft\dadata\Module;
use yii\base\InvalidCallException;

class SuggestAdapter extends BaseAdapter
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $value;

    /**
     * @var array
     */
    private $options = [];

    /**
     * @inheritDoc
     */
    public function call(): array
    {
        if (is_null($this->type) || is_null($this->value)) {
            throw new InvalidCallException(Module::t('main', "Invalid method call."));
        }

        $count = Settings::SUGGESTION_COUNT;

        if (isset($this->options['count'])) {
            $count = $this->options['count'];
            unset($this->options['count']);
        }

        return $this->client->suggest($this->type, $this->value, $count, $this->options);
    }

    /**
     * @param string $type
     * @return void
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @param string $value
     * @return void
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }

    /**
     * @param array $options
     * @return void
     */
    public function setOptions(array $options): void
    {
        $this->options = $options;
    }
}