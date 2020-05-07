<?php

class Paper{
    public $id;
    public $subject;
    public $questions= ["question_nos"=>"answers"] ;

    public function __construct()
    {
        $this->id;
        $this->subject;
        $this->questions=["question_nos"=>"answers"];
    }
    public function createSubject($subject,$questions=["question_nos"=>"answers"]){
        $this->subject= strtoupper($subject);
        $this->questions= $questions=["question_nos"=>"answers"];
        return $this->subject=(array)$this;

    }
}
