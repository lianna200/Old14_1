<?php
class Database {
    private static $dsn = 'mysql:dbname=al224;host=sql1.njit.edu';
    private static $username = 'al224';
    private static $password = 'wSt5Tjc0';
    private static $db;
    private function __construct() {}

    public static function getDB () {
        if (!isset(self::$db)) {
            try {
                self::$db = new PDO(self::$dsn,
                                     self::$username,
                                     self::$password);
            } catch (PDOException $e) {
                $error_message = $e->getMessage();
                include('../database_error.php');
                exit();
            }
        }
        return self::$db;
    }
}
?>
