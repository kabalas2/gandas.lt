<?php

namespace Model;

use Core\ModelAbstract;

class User extends ModelAbstract
{
    public function save()
    {
        if(isset($this->id)){

        }else{
            $this->create();
        }
    }

    public function create()
    {
        $insert = $this->insert();
        $insert->into('users');
        $insert->cols([
            'name' => $this->name,
            'last_name' => $this->lastName,
        ]);
        $this->db->execute($insert);
    }

    public function loginUser($username, $passwordas){
        $sql = $this->select();
        $sql->cols(['*'])->from('users')->where('username = :username')->where('password = :password');
        $sql->bindValues(['username' => $username, 'password' => $passwordas]);
        $rez = $this->db->get($sql);
        if(!empty($rez)){
            $this->load($rez['id']);
            return $this;
        }else{
            return null;
        }

    }
}