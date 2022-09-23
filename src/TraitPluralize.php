<?php

namespace Erykai\Pluralize;

/**
 * Pluralize text language en
 */
trait TraitPluralize
{
    /**
     * @var array|string[]
     */
    private array $ruleUncountable = [
        'adulthood',
        'advice',
        'agenda',
        'aid',
        'aircraft',
        'alcohol',
        'ammo',
        'analytics',
        'anime',
        'athletics',
        'audio',
        'bison',
        'blood',
        'bream',
        'buffalo',
        'butter',
        'carp',
        'cash',
        'chassis',
        'chess',
        'clothing',
        'cod',
        'commerce',
        'cooperation',
        'corps',
        'debris',
        'diabetes',
        'digestion',
        'elk',
        'energy',
        'equipment',
        'excretion',
        'expertise',
        'firmware',
        'flounder',
        'fun',
        'gallows',
        'garbage',
        'graffiti',
        'hardware',
        'headquarters',
        'health',
        'herpes',
        'highjinks',
        'homework',
        'housework',
        'information',
        'jeans',
        'justice',
        'kudos',
        'labour',
        'literature',
        'machinery',
        'mackerel',
        'mail',
        'media',
        'mews',
        'money',
        'moose',
        'music',
        'mud',
        'manga',
        'news',
        'only',
        'personnel',
        'pike',
        'plankton',
        'pliers',
        'police',
        'pollution',
        'premises',
        'rain',
        'research',
        'rice',
        'salmon',
        'scissors',
        'series',
        'sewage',
        'shambles',
        'shrimp',
        'software',
        'species',
        'staff',
        'swine',
        'tennis',
        'thanks',
        'traffic',
        'transportation',
        'trout',
        'tuna',
        'wealth',
        'welfare',
        'whiting',
        'wildebeest',
        'wildlife',
        'you',
        '/pok[eé]mon$/i',
        '/[^aeiou]ese$/i',
        '/deer$/i',
        '/fish$/i',
        '/measles$/i',
        '/o[iu]s$/i',
        '/pox$/i',
        '/sheep$/i'
    ];
    /**
     * @var array|string[]
     */
    private array $ruleIrregular = [
        'move' => 'moves',
        'sex' => 'sexes',
        'child' => 'children',
        'man' => 'men',
        'person' => 'people',
        'I' => 'we',
        'me' => 'us',
        'he' => 'they',
        'she' => 'they',
        'them' => 'them',
        'myself' => 'ourselves',
        'yourself' => 'yourselves',
        'itself' => 'themselves',
        'herself' => 'themselves',
        'himself' => 'themselves',
        'themself' => 'themselves',
        'is' => 'are',
        'was' => 'were',
        'has' => 'have',
        'this' => 'these',
        'that' => 'those',
        'echo' => 'echoes',
        'dingo' => 'dingoes',
        'volcano' => 'volcanoes',
        'tornado' => 'tornadoes',
        'torpedo' => 'torpedoes',
        'genus' => 'genera',
        'viscus' => 'viscera',
        'stigma' => 'stigmata',
        'stoma' => 'stomata',
        'dogma' => 'dogmata',
        'lemma' => 'lemmata',
        'schema' => 'schemata',
        'anathema' => 'anathemata',
        'ox' => 'oxen',
        'axe' => 'axes',
        'die' => 'dice',
        'yes' => 'yeses',
        'foot' => 'feet',
        'eave' => 'eaves',
        'goose' => 'geese',
        'tooth' => 'teeth',
        'quiz' => 'quizzes',
        'human' => 'humans',
        'proof' => 'proofs',
        'carve' => 'carves',
        'valve' => 'valves',
        'looey' => 'looies',
        'thief' => 'thieves',
        'groove' => 'grooves',
        'pickaxe' => 'pickaxes',
        'passerby' => 'passersby',
        'cookie' => 'cookies'
    ];
    /**
     * @var array|string[]
     */
    private array $rulePlural = [
        '/(quiz)$/i' => "$1zes",
        '/^(ox)$/i' => "$1en",
        '/([m|l])ouse$/i' => "$1ice",
        '/(matr|vert|ind)ix|ex$/i' => "$1ices",
        '/(x|ch|ss|sh)$/i' => "$1es",
        '/([^aeiouy]|qu)y$/i' => "$1ies",
        '/(hive)$/i' => "$1s",
        '/(?:([^f])fe|([lr])f)$/i' => "$1$2ves",
        '/(shea|lea|loa|thie)f$/i' => "$1ves",
        '/sis$/i' => "ses",
        '/([ti])um$/i' => "$1a",
        '/(tomat|potat|ech|her|vet)o$/i' => "$1oes",
        '/(bu)s$/i' => "$1ses",
        '/(alias)$/i' => "$1es",
        '/(octop)us$/i' => "$1i",
        '/(ax|test)is$/i' => "$1es",
        '/(us)$/i' => "$1es",
        '/s$/i' => "s",
        '/$/' => "s"
    ];
    /**
     * @var array|string[]
     */
    private array $ruleSingular = [
        '/(quiz)zes$/i' => "$1",
        '/(matr)ices$/i' => "$1ix",
        '/(vert|ind)ices$/i' => "$1ex",
        '/^(ox)en$/i' => "$1",
        '/(alias)es$/i' => "$1",
        '/(octop|vir)i$/i' => "$1us",
        '/(cris|ax|test)es$/i' => "$1is",
        '/(shoe)s$/i' => "$1",
        '/(o)es$/i' => "$1",
        '/(bus)es$/i' => "$1",
        '/([m|l])ice$/i' => "$1ouse",
        '/(x|ch|ss|sh)es$/i' => "$1",
        '/(m)ovies$/i' => "$1ovie",
        '/(s)eries$/i' => "$1eries",
        '/([^aeiouy]|qu)ies$/i' => "$1y",
        '/([lr])ves$/i' => "$1f",
        '/(tive)s$/i' => "$1",
        '/(hive)s$/i' => "$1",
        '/(li|wi|kni)ves$/i' => "$1fe",
        '/(shea|loa|lea|thie)ves$/i' => "$1f",
        '/(^analy)ses$/i' => "$1sis",
        '/((a)naly|(b)a|(d)iagno|(p)arenthe|(p)rogno|(s)ynop|(t)he)ses$/i' => "$1$2sis",
        '/([ti])a$/i' => "$1um",
        '/(n)ews$/i' => "$1ews",
        '/(h|bl)ouses$/i' => "$1ouse",
        '/(corpse)s$/i' => "$1",
        '/(us)es$/i' => "$1",
        '/s$/i' => ""
    ];

    /**
     * @param string $string
     * @return bool
     */
    protected function uncountable(string $string): bool
    {
        if (in_array(strtolower($string), $this->getUncountable(), true)) {
            return true;
        }
        return false;
    }

    /**
     * @return array
     */
    protected function ruleIrregular(): array
    {
        return $this->ruleIrregular;
    }

    /**
     * @return array
     */
    protected function rulePlural(): array
    {
        return $this->rulePlural;
    }

    /**
     * @return array
     */
    protected function ruleSingular(): array
    {
        return $this->ruleSingular;
    }

    /**
     * @return array
     */
    protected function ruleUncountable(): array
    {
        return $this->ruleUncountable;
    }
}