<?php


namespace App\classes;


class Register
{
    protected $fullName;
    protected $email;
    protected $phone;
    protected $result;

    public function __construct($post = null)
    {
        if (isset($post['full_name'])){
        $this->fullName = $post['full_name'];
        $this->email = $post['email'];
        $this->phone = $post['phone'];

        }
    }

    public function add(){

            $_SESSION['full_name'] = $this->fullName;
            $_SESSION['email'] = $this->email;
            $_SESSION['phone'] = $this->phone;

       return 'Data Store Successfully';
    }

    public function allData(){

        $this->result = [
            'full_name' => $_SESSION['full_name'],
            'email' => $_SESSION['email'],
            'phone' => $_SESSION['phone'],
        ];
        return $this->result;
    }
}