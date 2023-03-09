<?php

class MySQLUtils
 {
    private static $conn;
    private $servername;
    private $username;
    private $password;
    private $myDB;

    public function __construct()
 {
        $this->servername = 'localhost';
        // $this->username = 'id19565415_root';
        // $this->password = '[0N[|c@w1Odu<yUF';
        // $this->myDB = 'id19565415_ban_trai_cay';
        $this->username = 'root';
        $this->password = '';
        $this->myDB = 'ban_trai_cay';
        if ( self::$conn == null ) {
            $this->connected();
        }
    }

    function connected()
 {
        try {
            self::$conn = new PDO( "mysql:host=$this->servername; dbname=$this->myDB", $this->username, $this->password );
            // set the PDO error mode to exception
            self::$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            // echo 'Connected successfully';
            return self::$conn;
        } catch ( PDOException $e ) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public function disconnected() {
        self::$conn = null;
    }

    public function insertData( $sql, $data = array() ) {
        $stmt = self::$conn->prepare( $sql );
        $stmt->execute( $data );
        self::$conn = null;
    }

    public function deleteData( $sql, $data = array() )
 {
        $stmt = self::$conn->prepare( $sql );
        $stmt->execute( $data );
        self::$conn = null;
    }

    public function getAllData( $sql )
 {
        $stmt = self::$conn->prepare( $sql );
        $stmt->execute();
        self::$conn = null;
        return $stmt->fetchAll( PDO::FETCH_ASSOC );
    }

    public function updateData( $sql, $data = array() )
 {
        $stmt = self::$conn->prepare( $sql );
        $stmt->execute( $data );
        self::$conn = null;
    }

}
