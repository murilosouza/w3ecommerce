<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;

class Product extends Model {

    public static function listAll()
    {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tb_products ORDER BY desproduct");
    }

    public function save()
    {
        $sql = new Sql;
        $results = $sql->select("CALL sp_products_save(:idproduct, :desproduct)", array(
            "idproduct"=>$this->getidproduct(),
            "desproduct"=>$this->getdesproduct()
        ));
        $this->setData($results[0]);

    }

    public function get($idproduct)
    {
        $sql = new Sql;
        $results = $sql->select("SELECT * FROM tb_products WHERE idproduct = :idproduct", [
            ':idproduct'=>$idproduct
        ]);
        $this->setData($results[0]);
    }

    public function delete()
    {
        $sql = new Sql;
        $sql->select("DELETE FROM tb_products WHERE idproduct = :idproduct", array(
            ":idproduct"=>$this->getidproduct()
        ));

        Product::updateFile();
    }

    public static function updateFile()
    {
        $products = Product::listAll();
        $html = [];
        foreach ($products as $row) {
            array_push($html, '<li><a href="/products/'.$row['idproduct'].'">'.$row['desproduct'].'</a></li>');
        }
        file_put_contents($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "products-menu.html", implode('', $html));
    }
}

?>