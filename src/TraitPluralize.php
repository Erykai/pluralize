<?php

namespace Erykai\Pluralize;

/**
 * Trait Pluralize
 */
trait TraitPluralize
{
    /**
     * @param string $word
     * @return bool
     */
    protected function ucountable(string $word): bool
    {
        if ( in_array( strtolower( $word ), $this->getUncountable(), true ) ) {
            return true;
        }
        return false;
    }
}