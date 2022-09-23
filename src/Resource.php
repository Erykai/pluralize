<?php

namespace Erykai\Pluralize;

/**
 * Resource Pluralize
 */
abstract class Resource
{
    use TraitPluralize;

    /**
     * @var array
     */
    private array $plural;

    /**
     * @var array
     */
    private array $singular;

    /**
     * @var array
     */
    private array $irregular;

    /**
     * @var array
     */
    private array $uncountable;

    /**
     * sets
     */
    public function __construct()
    {
        $this->setPlural($this->rulePlural());
        $this->setSingular($this->ruleSingular());
        $this->setIrregular($this->ruleIrregular());
        $this->setUncountable($this->ruleUncountable());
    }

    /**
     * @return string[]
     */
    protected function getPlural(): array
    {
        return $this->plural;
    }

    /**
     * @param string[] $plural
     */
    private function setPlural(array $plural): void
    {
        $this->plural = $plural;
    }

    /**
     * @return string[]
     */
    protected function getSingular(): array
    {
        return $this->singular;
    }

    /**
     * @param string[] $singular
     */
    private function setSingular(array $singular): void
    {
        $this->singular = $singular;
    }

    /**
     * @return string[]
     */
    protected function getIrregular(): array
    {
        return $this->irregular;
    }

    /**
     * @param string[] $irregular
     */
    private function setIrregular(array $irregular): void
    {
        $this->irregular = $irregular;
    }

    /**
     * @return string[]
     */
    protected function getUncountable(): array
    {
        return $this->uncountable;
    }

    /**
     * @param string[] $uncountable
     */
    private function setUncountable(array $uncountable): void
    {
        $this->uncountable = $uncountable;
    }


}