<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;

class User extends Model {

    const SESSION = "User";
    const SECRET = "Ch4v3S3cr3t4W322";
    const SECRET_IV = "Ch4v3S3cr3t4W322_IV";
    const ERROR = "UserError";
	const ERROR_REGISTER = "UserErrorRegister";
	const SUCCESS = "UserSucesss";

    public static function login($login, $password)
    {

        $sql = new Sql();
        $results = $sql->select("SELECT * FROM tb_users WHERE deslogin = :LOGIN", array(
            ":LOGIN"=>$login
        )
    );

        if (count($results) === 0)
        {
            //throw new \Exception("Usuário e/ou senha inválidos");
            header("Location: /admin/login/error");
            exit;
        }

        $data = $results[0];

        if (password_verify($password, $data["despassword"]) === true)
        {
            $user = new User();

            $user->setData($data);

            $_SESSION[User::SESSION] = $user->getValues();

        } else {

            //throw new \Exception("Usuário e/ou senha inválidos");
            header("Location: /admin/login/error");
            exit;
        }

    }

    public static function verifyLogin($inadmin = true)
    {

        if (
            !isset($_SESSION[User::SESSION])
            ||
            !$_SESSION[User::SESSION]
            ||
            !(int)$_SESSION[User::SESSION]["iduser"] > 0
            ||
            (bool)$_SESSION[User::SESSION]["inadmin"] !== $inadmin
        ) {
            header("Location: /admin/login");
            exit;
        }

    }

    public static function logout()
    {
        $_SESSION[User::SESSION] = NULL;
    }

    public static function listAll(){

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) ORDER BY b.desperson");
    }

    public function save(){

        $sql = new Sql();

        $results = $sql->select("CALL sp_users_save(:desperson, :deslogin, :despassword, :desemail, :nrphone, :inadmin)",
        array(
            ":desperson"=>$this->getdesperson(),
            ":deslogin"=>$this->getdeslogin(),
            ":despassword"=>$this->getdespassword(),
            ":desemail"=>$this->getdesemail(),
            ":nrphone"=>$this->getnrphone(),
            ":inadmin"=>$this->getinadmin()
        ));

        $this->setData($results[0]);

    }

    public function get($iduser)
    {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_users a INNER JOIN tb_persons b USING(idperson) WHERE a.iduser = :iduser", array(
            ":iduser"=>$iduser
        ));

        $this->setData($results[0]);
    }

    public function update()
    {

        $sql = new Sql();

        $results = $sql->select("CALL sp_usersupdate_save(:iduser, :desperson, :deslogin, :despassword, :desemail, :nrphone, :inadmin)",
        array(
            ":iduser"=>$this->getiduser(),
            ":desperson"=>$this->getdesperson(),
            ":deslogin"=>$this->getdeslogin(),
            ":despassword"=>$this->getdespassword(),
            ":desemail"=>$this->getdesemail(),
            ":nrphone"=>$this->getnrphone(),
            ":inadmin"=>$this->getinadmin()
        ));

        $this->setData($results[0]);

    }

    public function delete()
    {

        $sql = new Sql();

        $sql->query("CALL sp_users_delete(:iduser)", array(
            ":iduser"=>$this->getiduser()
        ));
    }

    public static function getForgot($email)
    {
        $sql = new Sql();

        $results = $sql->select("
        SELECT 
            *
        FROM
            tb_persons p
                INNER JOIN
            tb_users u USING (idperson)
        WHERE
            p.desemail = :email;
        ", array(
            ":email"=>$email
        ));

        //print_r($results); die();

        if (count($results) === 0)
        {

            //throw new \Exception("Não foi possível recuperar seu acesso, por gentleza, contate o suporte");
            header("Location: /admin/forgot/error");

	        exit;

        } 
        else
        {
        
            $data = $results[0];

            //print_r($data); die();

            $results2 = $sql->select("CALL sp_userspasswordsrecoveries_create(:iduser, :desip)", array(
                ":iduser"=>$data["iduser"],
				":desip"=>$_SERVER["REMOTE_ADDR"]
            ));
            //print_r($results2); die();

            if (count($results2) === 0)
            {

                //throw new \Exception("Não foi possível recuperar seu acesso, por gentleza, contate o suporte");
                header("Location: /admin/forgot/error");

	            exit;

             } else
            { 

                $dataRecovery = $results2[0];

                $code = openssl_encrypt($dataRecovery['idrecovery'], 'AES-128-CBC', pack("a16", User::SECRET), 0, pack("a16", User::SECRET_IV));

				$code = base64_encode($code);

               /* if ($inadmin === true) { */

                $link = "http://store.wcubo/admin/forgot/reset?code=$code";

           /* }  else {

                $link = "http://store.wcubo/forgot/reset?code=$code";

            } */

            $mailer = new Mailer($data['desemail'], $data['desperson'], "Redefinir senha da WCubo Store", "forgot", array(
                "name"=>$data['desperson'],
                "link"=>$link

            ));				

            $mailer->send();

            return $link;

            }
        }
    }

}

?>