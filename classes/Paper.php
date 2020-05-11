<?php
class Paper{
    public $subjectArray = [];
    public $id;
    public $subject;

    public $questions = [];

public function __construct()
    {
        $this->id;
        $this->subject;
        $this->questions=[];
    }
    public function createSubject($subject, $questions){
        if (!empty($subject) && !empty($questions)) {
            $this->subject = filter_var($subject, FILTER_SANITIZE_STRING);
            $this->questions = filter_var_array($questions, FILTER_SANITIZE_STRING);
            $convert = $this->subjectArray = (array)$this;
            return json_encode($convert);

        }
        return null;
    }

}

//
//$new = new Paper();
//echo $new->createSubject('English', ['1'=>'4']);
