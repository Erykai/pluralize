<?php

namespace Erykai\Pluralize;

/**
 * Converts plural words to singular and singular to plural
 */
class Pluralize extends Resource
{
    /**
     * @param string $word
     * @return string
     */
    public function singular(string $word): string
    {
        if ($this->uncountable($word)) {
            return $word;
        }
        foreach ($this->getIrregular() as $result => $pattern) {
            $pattern = '/' . $pattern . '$/i';

            if (preg_match($pattern, $word)) {
                return preg_replace($pattern, $result, $word);
            }
        }
        foreach ($this->getSingular() as $pattern => $result) {
            if (preg_match($pattern, $word)) {
                return preg_replace($pattern, $result, $word);
            }
        }
        return $word;
    }

    /**
     * @param string $word
     * @return string
     */
    public function plural(string $word): string
    {
        if ($this->uncountable($word)) {
            return $word;
        }
        foreach ($this->getIrregular() as $pattern => $result) {
            $pattern = '/' . $pattern . '$/i';

            if (preg_match($pattern, $word)) {
                return preg_replace($pattern, $result, $word);
            }
        }
        foreach ($this->getPlural() as $pattern => $result) {
            if (preg_match($pattern, $word)) {
                return preg_replace($pattern, $result, $word);
            }
        }

        return $word;
    }
}