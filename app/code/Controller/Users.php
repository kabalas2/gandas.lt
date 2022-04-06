<?php

namespace Controller;

use Core\ControllerAbstract;

class Users extends ControllerAbstract
{
    public function register()
    {
        echo $this->twig->render('users/register.html');
    }

    public function login()
    {
        echo 'cia bus loginas';
    }

    public function check()
    {
        $user = new \Model\User();
        $user = $user->loginUser($_POST['username'], $_POST['password']);
        if($user !== null){
            $user->setUnluckyLogins(0);
            $user->save();
            $_SESSION['user_id'] = $user->getId();
            redirect(http://127.0.0.1:8000/);

        }else{
            echo 'Blogas prisijungimas';
        }

    }

    public function create()
    {
        echo '<pre>';
        print_r($_POST);

        // cia bus logika uzregin

//        $user = new \Model\User;
//        $user->setName($_POST['name']);
//        $user->setLastName($_POST['last_name']);
//        $user->setEmail($_POST['email']);
//        $user->setPassword($_POST['password']);
//        $user->save();
    }

    public function edit()
    {
        // editinimo forma
    }

    public function update()
    {
        // cia logika atnaujinti
    }
}