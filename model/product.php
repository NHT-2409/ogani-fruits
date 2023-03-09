<?php
include '../utils/MySQLUtils.php';

class product
 {
    private $id;
    private $name;
    private $img;
    private $price;
    private $number;

    public function __construct( $id, $name, $img, $price, $number )
 {
        $this->id = $id;
        $this->name = $name;
        $this->img = $img;
        $this->price = $price;
        $this->number = $number;
    }

    public function __destruct()
 {
        $this->id = '';
        $this->name = '';
        $this->img = '';
        $this->price = '';
        $this->number = '';
    }

    public function getId()
 {
        return $this->id;
    }

    public function setId( $id ): self
 {
        $this->id = $id;
        return $this;
    }

    public function getName()
 {
        return $this->name;
    }

    public function setName( $name ): self
 {
        $this->name = $name;
        return $this;
    }

    public function getImg()
 {
        return $this->img;
    }

    public function setImg( $img ): self
 {
        $this->img = $img;
        return $this;
    }

    public function getPrice()
 {
        return $this->price;
    }

    public function setPrice( $price ): self
 {
        $this->price = $price;
        return $this;
    }

    public function getNumber()
 {
        return $this->number;
    }

    public function setNumber( $number ): self
 {
        $this->number = $number;
        return $this;
    }

    function insertProduct()
 {
        $mysql = new MySQLUtils();
        $data = [
            'name' => $this->name,
            'img' => $this->img,
            'price' => $this->price,
            'number' => $this->number
        ];
        $sql = 'INSERT INTO product (name, img, price, number) VALUES (:name, :img, :price, :number)';
        $mysql->insertData( $sql, $data );
    }

    public function deleteProduct( $id ) {
        $mysql = new MySQLUtils();
        $data = [
            'id' => $id
        ];
        $sql = 'DELETE FROM product WHERE id = :id';
        $mysql->deleteData( $sql, $data );
    }

    public function getAllProducts() {
        $mysql = new MySQLUtils();
        $sql = 'select * from product';
        $list = $mysql->getAllData( $sql );
        return $list;
    }

    public function updateUser( $id ) {
        $mysql = new MySQLUtils();
        $data = [
            'name' => $this->name,
            'img' => $this->img,
            'price' => $this->price,
            'number' => $this->number,
            'id'    => $id
        ];
        $sql = 'UPDATE product set name = :name, img = :img, price = :price, number = :number WHERE id = :id';
        $mysql->updateData( $sql, $data );
    }

}
