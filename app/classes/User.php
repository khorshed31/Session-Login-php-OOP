<?php


namespace App\classes;


class User
{
    public function getAllUser(){

        return [
            0 => [
                'id' => 1,
                'name' => 'Khorshed Alom',
                'email' => 'khorshed@gmail.com',
                'password' => '123456'
            ],
            1 => [
                'id' => 2,
                'name' => 'Emon Ali',
                'email' => 'emon@gmail.com',
                'password' => '123456'
            ],
        ];
    }
}