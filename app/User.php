<?php

require_once 'Database.php';

class User extends Database
{
    protected $tb = 'users';

    public function __construct()
    {
        parent::__construct();
    }

    public function register($form)
    {
        $nama       = $form['nama'];
        $username   = $form['username'];
        $password   = $form['password'];
        $re_passw   = $form['re_password'];

        if ($password != $re_passw) return ['error' => 1, 'message' => 'Kedua kolom password harus memiliki nilai yang sama.'];

        $query      = mysqli_query($this->db, "INSERT INTO $this->tb (nama, username, password) VALUES ('$nama', '$username', '$password');");
        if ($query) return ['error' => 0, 'message' => ''];
    }

    public function login($form)
    {
        $username   = $form['username'];
        $password   = $form['password'];

        $result     = mysqli_query($this->db, "SELECT * FROM $this->tb WHERE username = '$username' AND password = '$password'");
        if (!$result->num_rows) return ['error' => 1, 'message' => 'Maaf, username atau password yang kamu masukkan salah.'];

        session_start();
        $user       = mysqli_fetch_assoc($result);

        $_SESSION['id']             = $user['id'];
        $_SESSION['nama']           = $user['nama'];
        $_SESSION['username']       = $user['username'];
        $_SESSION['create_time']    = $user['create_time'];

        return  ['error' => 0, 'message' => ''];
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        return true;
    }
}


$User = new User();
