<?php
class Model
{
    // L'attribut static acces par le nom de la class
    private static $pdo;

    private static function setBdd()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=appli_infogerance;charset=utf8;port=3308", "root", "root");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    // Le singleton
    protected function getBdd()
    {
        if (self::$pdo === null) {
            self::setBdd();
        }
        return self::$pdo;
    }
}
