<?php


namespace Source\Core;

use \PDO;
use \PDOException;

/**
 * Class Connect
 * @package Source\Core
 */
class Connect
{
    private const OPTIONS = [
        //
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        //Todo erro que acontecer através da PDO sempre trará um exceção.
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        //Converte qualquer resultado nativamente em um objeto anônimo.
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        //Garante que usa o mesmo nome de coluna do banco de dados.
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    /**
     * Armazena o objeto PDO
     * @var
     */
    private static $instance;

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if (empty(self::$instance)) {
            try{
                self::$instance = new PDO(
                    "mysql:host=" . CONF_DB_HOST . ";dbname=" . CONF_DB_NAME,
                    CONF_DB_USER,
                    CONF_DB_PASS,
                    self::OPTIONS
                );
            } catch (PDOException $exception) {
                var_dump($exception);
                die("<h1>Erro ao conectar.</h1>");
            }
        }
        return self::$instance;
    }


  /**
   * Connect constructor.
   */
  final private function __construct()
    {
    }

  /**
   * Connect clone.
   */
  private function __clone()
    {
    }
}