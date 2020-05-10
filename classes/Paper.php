<?php
class Paper{
    public $subjectArray = [];
    public $id;
    public $subject;
    public $questions;

    public function __construct()
    {
        $this->id;
        $this->subject;
        $this->questions=["question"=>"answer"];
    }
    public function createSubject($subject,$questions=["question"=>"answer"]){
        if (!empty($subject) && !empty($questions)) {
            $this->subject = filter_var($subject, FILTER_SANITIZE_STRING);
            $this->questions = filter_var($questions=["question"=>"answer"], FILTER_SANITIZE_STRING);
            $convert = $this->subjectArray = (array)$this;
            return json_encode($convert);

        }
    }
}

