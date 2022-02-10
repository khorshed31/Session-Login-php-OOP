<?php


namespace App\classes;


class PrimeNumber
{
    protected $num;
    protected $result;
    protected $i;
    public function __construct($post = null)
    {
        $this->num = $post['given_number'];
    }

    public function primeNumber(){

        if ($this->num == 1 || $this->num == 2){
            $this->result = $this->num.' is Prime Number';
            return $this->result;
        }
        for ($this->i = 2; $this->i< $this->num; $this->i++){

            if ($this->num % $this->i == 0){

                $this->result = $this->num.' is Not Prime Number';
                return $this->result;
            }
        }
        $this->result = $this->num.' is Prime Number';
        return $this->result;
    }
}