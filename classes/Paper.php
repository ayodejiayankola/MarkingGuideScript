<?php

class Paper{
    public $id;
    public $subject;
    public $questions= ["question_nos"=>"answers"] ;

    public function __construct($id,$subject,$questions=["question_nos"=>"answers"])
    {
        $this->id=$id;
        $this->subject=$subject;
        $this->questions=["question_nos"=>"answers"];
    }
    public function getSubject(){

    }
}
class MarkingGuide{
    public $paper;
    public function createMarkingGuide(Paper $paper){

    }

}

class StudentSubmission{
    public $paper;
    public function createStudentSubmission(Paper $paper){

    }
}

Class ConsoleApp
{
    public $menu;
    private $markingGuide;
    private $studentSubmission;
    private $markScript;


    public function __construct()
    {

        $this->menu = new Menu();
        $this->markingGuide = new MarkingGuide();
        $this->studentSubmission = new StudentSubmission();
    }

    //METHODS
    //Create a new marking guide
    public function createMarkingGuide(){
    }

    //Store all marking guide
    public function storeAllMarkingGuide(){
    }

    //Remove/Delete a marking guide
    public function deleteMarkingGuide(){
    }

    //List all available marking guide
    public function listAllMarkingGuide(){
    }

    // Submit Student Paper
    public function studentSubmission(){
    }

    //Mark Student Paper
    public function markStudentPaper(){
    }

    //Quit(End the loop)
    public function quit(){
    }

}