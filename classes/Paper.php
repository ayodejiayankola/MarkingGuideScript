<?php
class Paper{
    public $subjectArray = [];
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
        if (!empty($subject) && !empty($questions=["question_nos"=>"answers"])) {
            $this->subject = filter_var($subject, FILTER_SANITIZE_STRING);
            $this->questions = filter_var($questions = ["question_nos" => strtoupper("answers")], FILTER_SANITIZE_STRING);
            return $this->subjectArray = (array)$this;
        }
    }
}
