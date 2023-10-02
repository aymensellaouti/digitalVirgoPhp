<?php
class Personne
{
    public function __construct(private $name = "")
    {
        self::$nbPersonne++;
    }
    private static $nbPersonne = 0;
    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    public function __destruct()
    {
        self::$nbPersonne--;
    }

    public static function showNbPersonn() {
        echo "Le nombre de personne est :". self::$nbPersonne;
    }
}