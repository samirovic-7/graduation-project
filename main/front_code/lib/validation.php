<?php




class validation
{


    private $pattern = [
        'uri'           => '[A-Za-z0-9-\/_?&=]+',
        'url'           => '[A-Za-z0-9-:.\/_?&=#]+',
        'alpha'         => '[\p{L}]+',
        'words'         => '[\p{L}\s]+',
        'alphanum'      => '[\p{L}0-9]+',
        'int'           => '[0-9]+',
        'float'         => '[0-9\.,]+',
        'tel'           => '[0-9+\s()-]+',
        'text'          => '[\p{L}0-9\s-.,;:!"%&()?+\'°#\/@]+',
        'file'          => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+\.[A-Za-z0-9]{2,4}',
        'folder'        => '[\p{L}\s0-9-_!%&()=\[\]#@,.;+]+',
        'address'       => '[\p{L}0-9\s.,()°-]+',
        'date_dmy'      => '[0-9]{1,2}\-[0-9]{1,2}\-[0-9]{4}',
        'date_ymd'      => '[0-9]{4}\-[0-9]{1,2}\-[0-9]{1,2}',
        'email'         => '[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})'
    ];

    public function hi()
    {
        echo 'ho';
        # code...
    }
    private $error=[];
    private $input;
    private $value;

    public function input($inp)
    {
        if(!isset($_REQUEST[$inp])){
            $this->error[] = "Input: {$inp} Not Exists";
        }else{
            $this->input = $inp;
            $this->value();
        }
        return $this;
    }

    public function value()
    {
        $this->value = $_REQUEST[$this->input];
        return $this;
    }

    public function max($max)
    {
        if(strlen($this->value) > $max){
            $this->error[]= "The value mustn't be greater than {$max}";
        }       
        return $this;
    }
    
    public function min($min)
    {
        if(strlen($this->value)< $min){
            $this->error[]= "The value must be greater than {$min}";
        }       
        return $this;

    }
    public function len($len)
    {
        if(strlen($this->value) != $len){
            $this->error[]= "len";
        }       
        return $this;

    }

    public function inteager()
    {
        $reqex = '/^('.$this->pattern['int'].')$/u';
        if(!preg_match($reqex, $this->value)){
            $this->error[]= "int";
        }
        return $this;
    }
    
    public function float()
    {
        $reqex = '/^('.$this->pattern['float'].')$/u';
        if(!preg_match($reqex, $this->value)){
            $this->error[]= "Input: {$this->input} must be float";
        }
        return $this;
    }
    
    public function string()
    {
        $reqex = '/^('.$this->pattern['words'].')$/u';
        if(!preg_match($reqex, $this->value)){
            $this->error[]= "Input: {$this->input} must be string";
        }
        return $this;
    }
    public function required()
    {
        if(strlen($this->value) == 0 && empty($this->value) && $this->value ==''){
            $this->error[]= "Input: {$this->input} is required";
        }
        return $this;
    }
    public function email()
    {
        $reqex = '/^('.$this->pattern['email'].')$/u';
        if(!preg_match($reqex, $this->value)){
            $this->error[]= "email";
        }
        return $this;
    }
    public function showErorr()
    {
        if(!empty($this->error)){
            
            return $this->error;
        }else{
            return [];
        }
    }
    public function success()
    {
        return (empty($this->error)) ? true : false;
    }
}