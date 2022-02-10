<?php


namespace App\classes;


class Home
{
    protected $sNumber;
    protected $eNumber;
    protected $result;
    protected $sum = 0;
    protected $i;
    public function __construct($post = null)
    {
        $this->sNumber = $post['s_num'];
        $this->eNumber = $post['e_num'];
    }

    public function index(){

        header('Location: action.php?pages=home');
    }

    public function sumSeries(){

        for ($this->i = $this->sNumber; $this->i<=$this->eNumber; $this->i++){

            $this->sum += $this->i;
            $this->result .= $this->i. ' + ';
//            if ($this->i < $this->eNumber){
//                $this->result .= " + ";
//            }
        }
        return rtrim($this->result, ' +'). ' = '. $this->sum;
    }

}