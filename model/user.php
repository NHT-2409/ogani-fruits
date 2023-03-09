<?php
include '../utils/MySQLUtils.php';

class user
 {
    private $id;
    private $fullname;
    private $username;
    private $password;
    private $address;
    private $phone;
    private $email;

    public function __construct( $id, $fullname, $username, $password, $address, $phone, $email )
 {
        $this->id = $id;
        $this->fullname = $fullname;
        $this->username = $username;
        $this->password = $password;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }

    public function __destruct()
 {
        $this->id = '';
        $this->fullname = '';
        $this->username = '';
        $this->password = '';
        $this->address = '';
        $this->phone = '';
        $this->email = '';
    }

    public function getId()
 {
        return $this->id;
    }

    public function setId( $id )
 {
        $this->id = $id;

        return $this;
    }

    public function getFullname()
 {
        return $this->fullname;
    }

    public function setFullname( $fullname )
 {
        $this->fullname = $fullname;

        return $this;
    }

    public function getUsername()
 {
        return $this->username;
    }

    public function setUsername( $username )
 {
        $this->username = $username;

        return $this;
    }

    public function getPassword()
 {
        return $this->password;
    }

    public function setPassword( $password )
 {
        $this->password = $password;

        return $this;
    }

    public function getAddress()
 {
        return $this->address;
    }

    function setAddress( $address )
 {
        $this->address = $address;

        return $this;
    }

    public function getPhone()
 {
        return $this->phone;
    }

    public function setPhone( $phone )
 {
        $this->phone = $phone;

        return $this;
    }

    public function getEmail()
 {
        return $this->email;
    }

    public function setEmail( $email )
 {
        $this->email = $email;

        return $this;
    }

    function insertUser()
 {
        $mysql = new MySQLUtils();
        $data = [
            'fullname' => $this->fullname,
            'username' => $this->username,
            'password' => $this->password,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
        ];
        $sql = "INSERT INTO user (fullname, username, password, address, phone, email)
                VALUES (:fullname, :username, :password,:address, :phone, :email)";
        $mysql->insertData( $sql, $data );
    }

    public function deleteUser( $id ) {
        $mysql = new MySQLUtils();
        $data = [
            'id' => $id
        ];
        $sql = 'DELETE FROM user WHERE id = :id';
        $mysql->deleteData( $sql, $data );
    }

    public function getAllUser() {
        $mysql = new MySQLUtils();
        $sql = 'select * from user';
        $listuser = $mysql->getAllData( $sql );
        return $listuser;
    }

    public function updateUser( $id ) {
        $mysql = new MySQLUtils();
        $data = [
            'fullname' => $this->fullname,
            'username' => $this->username,
            'password' => $this->password,
            'address' => $this->address,
            'phone' => $this->phone,
            'email' => $this->email,
            'id'    => $id
        ];
        $sql = "UPDATE user set fullname = :fullname, username = :username, password = :password,
                address = :address,phone = :phone, email = :email WHERE id = :id";
        $mysql->updateData( $sql, $data );
    }

}
