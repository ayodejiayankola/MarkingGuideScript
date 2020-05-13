<?php
class Paper{
    public  $storage = [];
    public $subject;
    public $questions = [];

public function __construct()
    {
        $this->subject;
        $this->questions=[];
    }
    public function createSubject($subject, $questions){
        if (!empty($subject) && !empty($questions)) {
            $this->subject = filter_var($subject, FILTER_SANITIZE_STRING);
            $this->questions = filter_var_array($questions, FILTER_SANITIZE_STRING);
            // changing obj to array format
            return $this->storage= (array)$this;
        }
        return null;
    }

}

//
//$new = new Paper();
//echo $new->createSubject('English', ['1'=>'4']);
