<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;

class Product extends Model {

    public static function listAll()
    {
        $sql = new Sql();
        $todosProdutos = $sql->select("SELECT * FROM tb_products ORDER BY desproduct");
        foreach ($todosProdutos as &$produto) {
            $produto['vlprice'] = number_format($produto['vlprice'],2,',','.');
        }
        //print_r($todosProdutos); die;
        return $todosProdutos;
    }

    public function save()
    {
        $sql = new Sql();
        $results = $sql->select("CALL sp_products_save(:idproduct, :desproduct, :vlprice, :vlwidth, :vlheight, :vllength, :vlweight, :desurl)", array(
            ":idproduct"=>$this->getidproduct(),
            ":desproduct"=>$this->getdesproduct(),
            ":vlprice"=>$this->getvlprice(),
            ":vlwidth"=>$this->getvlwidth(),
            ":vlheight"=>$this->getvlheight(),
            ":vllength"=>$this->getvllength(),
            ":vlweight"=>$this->getvlweight(),
            ":desurl"=>$this->getdesurl()
        ));

        $this->setData($results[0]);

    }

    public function get($idproduct)
    {
        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_products WHERE idproduct = :idproduct", [
            ':idproduct'=>$idproduct
        ]);
        $this->setData($results[0]);
    }

    public function delete()
    {
        $sql = new Sql();
        $sql->select("DELETE FROM tb_products WHERE idproduct = :idproduct", array(
            ":idproduct"=>$this->getidproduct()
        ));

    }

    public function checkPhoto()
    {
        if (file_exists(
            $_SERVER["DOCUMENT_ROOT"] . DIRECTORY_SEPARATOR . 
            "views-src" . DIRECTORY_SEPARATOR . 
            "store" . DIRECTORY_SEPARATOR . 
            "images" . DIRECTORY_SEPARATOR . 
            "products" . DIRECTORY_SEPARATOR . 
            $this->getidproduct() . ".jpg"
            )) { 
                return "/views-src/store/images/products/" . $this->getidproduct() . ".jpg";
            } else { 
                $semFoto = "/views-src/store/images/products/imagem.jpg";
            }
            $this->setdesphoto($semFoto);
    }

    public function getValues()
    {
        $this->checkPhoto();
        $values = parent::getValues();
        return $values;
    }

    public function setPhoto($file)
    {
        $extension = explode('.', $file['name']);
        $extension = end($extension);

        switch ($extension) {

            case "jpeg":
            case "jpg":
                $image = imagecreatefromjpeg($file["tmp_name"]);
                break;

            case "gif":
                $image = imagecreatefromgif($file["tmp_name"]);
                break;
            
            case "png":
                $image = imagecreatefrompng($file["tmp_name"]);
                break;

            case "bmp":
                $image = imagecreatefrombmp($file["tmp_name"]);
                break;
            
        }

        $dist = $_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 
                    "views-src" . DIRECTORY_SEPARATOR . 
                    "store" . DIRECTORY_SEPARATOR . 
                    "images" . DIRECTORY_SEPARATOR . 
                    "products" . DIRECTORY_SEPARATOR . 
                    $this->getidproduct() . ".jpg";

        imagejpeg($image, $dist);
        imagedestroy($image);
        $this->checkPhoto();
    }

}

?>