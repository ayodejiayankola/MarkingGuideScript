<?php


class MarkingGuide{
    //PARAMETERS
    protected $id;
    protected $subject;
    protected $question_no;
    protected $correct_answer;


    public function __construct($id,$subject,$question_no,$correct_answer)
    {

    }

    //METHODS
    //Create a new marking guide
    public function createMarkingGuide($id,$question_no,$correct_answer){

    }

    //Store all marking guide
    public function storeAllMarkingGuide(){

    }

    //Remove/Delete a marking guide
    public function deleteMarkingGuide($id){

    }

    //List all available marking guide
    public function listAllMarkingGuide(){

    }

    //Quit(End the loop)
    public function quit(){

    }


}


class StudentPaper extends MarkingGuide {

    //PARAMETERS
    private $choice_answer;

    public function __construct($choice_answer,$id,$subject,$question_no,$correct_answer)
    {


        parent::__construct($id,$subject,$question_no,$correct_answer);


    }

    //METHODS
    // Submit Student Paper
    public function submitStudentAnswer($id,$question_no,$choice_answer){


    }

    //Mark Student Paper
    public function markStudentPaper($choice_answer,$correct_answer){

    }
}
