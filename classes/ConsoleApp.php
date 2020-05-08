<?php
require_once('Paper.php');
require_once('menu.php');


Class ConsoleApp
{
    private $menu;
    private $run;
    private $markingGuide;
    private $studentSubmission;

    public function __construct()
    {

        $this->menu = new Menu();
//        $this->run = new Run();
        $this->markingGuide = new Paper();
        $this->studentSubmission = new Paper();
    }

    //METHODS
    //Create a new marking guide
    public function createMarkingGuide($subject,$questions=["question_nos"=>"answers"]){
        $this->markingGuide=$subject;
        $this->markingGuide=$questions=["question_nos"=>"answers"];
        return $this->markingGuide=(array)$this;
    }

    //Remove/Delete a marking guide
    public function deleteMarkingGuide($id){
        unset($this->markingGuide[$id]);
        return true;
    }

    //List all available marking guide
    public function listAllMarkingGuide()
    {
     return $this->markingGuide;
    }

    protected function StudentSubmission($subject, $questions=["question_nos"=>"answers"]){
        $this->studentSubmission=$subject;
        $this->studentSubmission=$questions=["question_nos"=>"answers"];
        return $this->studentSubmission=(array)$this;
    }
    //Mark Student Paper
    public function markStudentPaper(){
        if($this->markingGuide === $this->studentSubmission){

        }
    }

    //Quit(End the loop)
    public function quit(){
        exit('Close Marking Guide');
    }

    public function run()
    {
        while (true){
            // Print the menu on console
            $this->menu->showMenu();
            // Read user choice
            $selection = trim( fgets(STDIN) );
            if( $selection == 5 ) {
                break;
            }
            switch($selection){
                case 1:
                    $this->createMarkingGuide();
                    break;
                case 2:
                    $this->deleteMarkingGuide();
                    break;
                case 3:
                    $this->listAllMarkingGuide();
                    break;
                case 4:
                    $this->StudentSubmission();
                    break;
                 case 5:
                $this->markStudentPaper();
                break;
                case 6:
                    $this->quit();
                    break;
                default:
                    echo ("Input not understood, Please retry again...");
                    break;
            }
        }
    }
}


