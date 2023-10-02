<?php
include_once 'autoload.php';
class Repository
{
    protected PDO $dbCnx;

    public function __construct(protected $dbName)
    {
        $this->dbCnx = ConnexionDb::getInstance();
    }

    public function findAll() {
        $query = "select * from $this->dbName";
        $response = $this->dbCnx->prepare($query);
        $response->execute([]);
        return $users =  $response->fetchAll(PDO::FETCH_OBJ);
    }
    public function findOne($id) {
        $query = "select * from $this->dbName where id = ?";
        $response = $this->dbCnx->prepare($query);
        $response->execute([$id]);
        return $user =  $response->fetch(PDO::FETCH_OBJ);
    }

    public function create($params) {
        //INSERT INTO `user` (`id`, `username`, `password`) VALUES (NULL, '?', '?');
        // ['username' => "farah", "password" => 'farah'
        $keys = array_keys($params);
        // [`username`, `password` ]
        $keysString = implode(",", $keys);
        // 'username', 'password'
//        $paramsQuery = array_map(function($element) {
//            return '?';
//        }, $keys);
        $paramsQuery = implode(",",array_fill(0,count($keys), '?'));
        // ?, ?
        $query = "INSERT INTO $this->dbName (`id`, $keysString ) VALUES (NULL,$paramsQuery);";
        $response = $this->dbCnx->prepare($query);
        $response->execute(array_values($params));
    }

}