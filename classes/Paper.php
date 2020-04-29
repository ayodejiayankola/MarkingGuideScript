<?php


class Paper{
    //PARAMETERS
    protected $id;
    protected $subject;
    protected $question_no =[];
    protected $correct_answer=[];
    protected $choice_answer=[];


    public function __construct($id,$subject,$question_no,$correct_answer,$choice_answer)
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

    // Submit Student Paper
    public function studentPaper($id,$subject,$question_no,$choice_answer){


    }

    //Mark Student Paper
    public function markStudentPaper($choice_answer,$correct_answer){

    }

    //Quit(End the loop)
    public function quit(){

    }


}

class MarkingGuide{
    private $paper;
    public function __construct(Paper $paper)
    {
        $this->paper=$paper;
    }

    public function createMarkingGuide(){
        $this->paper->newMarkingGuide();
    }
}
class StudentPaper{
    private $paper;
    public function __construct(Paper $paper)
    {
        $this->paper=$paper;
    }

    public function createSubmission(){
        $this->paper->studentPaper();
    }
}





$paper= new Paper();
$MarkingGuide =new MarkingGuide($paper);
$MarkingGuide->createMarkingGuide(); //create a new marking guide