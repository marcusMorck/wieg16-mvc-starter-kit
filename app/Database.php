<?php

namespace App;

use PDO;

class Database {

    private $pdo;

    public function  __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function getById($table, $id){
        $stmt = $this->pdo->prepare('SELECT * FROM '. $table .' WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $success = $stmt->execute();
        $row = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }

    public function getAll($table){
        $stmt = $this->pdo->prepare('SELECT * FROM ' . $table);
        $success = $stmt->execute();
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($success) ? $rows : [];
    }

    public function getRandomAlbums($table){
        $stmt = $this->pdo->prepare('SELECT * FROM ' . $table.' ORDER BY RAND() LIMIT 4');
        $success = $stmt->execute();
        $row = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];
    }


    public function create($table, $data){

        $columns = array_keys($data);

        $columnSql = implode(', ', $columns);

        $bindingSql = ':'.implode(', :', $columns);

        $sql = "INSERT INTO $table ($columnSql) VALUES($bindingSql)";

        $stmt = $this->pdo->prepare($sql);
        var_dump($this->pdo->errorInfo());

        foreach ($data as $key => $value){

            $stmt->bindValue(':'.$key, $value);

        }
        var_dump($status = $stmt->execute());
        var_dump($this->pdo->errorInfo());
        die();
        return ($status) ? $this->pdo->lastInsertId() : false;


    }

    public function albumsByUser($table, $user_id){
        $stmt = $this->pdo->prepare('SELECT * FROM '. $table .' WHERE user_id = :user_id');
        $stmt->bindParam(':user_id', $user_id);
        $success = $stmt->execute();
        $row = $stmt->fetchALL(PDO::FETCH_ASSOC);
        return ($success) ? $row : [];

    }

    /**
     * ÖVERKURS
     *
     * Skriv den här själv!
     * Titta på create för strukturidéer
     * Du kan binda parametrar precis som i create
     * Klura ut hur du skall sätt ihop rätt textsträng för x=y...
     * Implode kommer inte ta dig hela vägen den här gången
     * Kanske array_map eller foreach?
     */
    public function updateProfile($table, $id, $data){

        $data = ['username' => 'cool127',

        ];

        $sql = "UPDATE $table SET (username = :username, 
                                   email = :email,
                                   birth = :birth,
                                   country = :country,
                                   adress = :adress,
                                   zip-code = :zip-code
        )WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        foreach ($data as $param) {
            $stmt->bindParam(':username', $param['username']);
            $stmt->bindParam(':email', $param['email']);
            $stmt->bindParam(':birth', $param['birth']);
            $stmt->bindParam(':country', $param['country']);
            $stmt->bindParam(':adress', $param['adress']);
            $stmt->bindParam(':zip-code', $param['zip-code']);
            }
        $stmt->execute();
    }
    public function update($table, $id, $data) {
        $data = ['username' => 'cool127',
                'email' => 'marcus.morck@gmail.com'
        ];
        $columns = array_keys($data);

        implode();

        $setSql = array_map(function($item){
            return $item .'=' .':'. $item;
        });


    }

    /**
     * Skriv den här själv!
     * Titta på getById för struktur
     */
    public function delete($table, $id) {
        //query för att göra en delete : DELETE * FROM table WHERE id = id;
        //bind parametrar
        //utför uppgift
        //returna ett success message

        $stmt = $this->pdo->prepare('DELETE * FROM '. $table .' WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $success = $stmt->execute();
        //return ($success) ? $successMessage : 'The row has been deleted sucessfylly\';

    }


}
