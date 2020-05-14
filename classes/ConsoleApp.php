<?php
require_once('Paper.php');
require_once('menu.php');

Class ConsoleApp
{
    public $menu;
    public $markingGuide;
    public $studentSubmission;

    public function __construct()
    {

        $this->menu = new Menu();
        $this->markingGuide = new Paper();
        $this->studentSubmission = new Paper();
    }

    //METHODS
    //Create a new marking guide
    public function createMarkingGuide($subject, $questions){
        return $this->markingGuide->createSubject($subject, $questions);
    }

    public function storeMarkingGuide(){
        return $this->markingGuide->storage;
    }

    //Remove/Delete a marking guide
    public function deleteMarkingGuide($subject)
    {
        if(array_key_exists($subject, $this->markingGuide->storage)) {
            // remove item at index 1 which is 'for'
            $removed = $this->markingGuide->storage[$subject];
            array_splice($this->markingGuide->storage, $subject, 1);
            return 'removed '.json_encode($removed)."\n";
        }else{
            return $subject. ' Does not exist';
        }
    }


    //List all available marking guide
    public function listAllMarkingGuide()
    {
        return json_encode($this->storeMarkingGuide());
    }

    public function StudentSubmission($subject, $questions){
        return $this->studentSubmission->createSubject($subject, $questions);

    }
    //Mark Student Paper
    public function markStudentPaper(){
        $submissions =  $this->studentSubmission->storage;

        $results = array_map(function($guide, $submission){
            $result = array();
            $result['subject'] = $guide['subject'];
            $result['total_questions'] = count($guide['questions']);
            if(isset($submission)){
                $result['answered'] = count($submission['questions']);
                $result['score'] =  count(array_intersect($guide['questions'], $submission['questions']));

            }else{
                $result['answered'] = 0;
                $result['score'] =  0;
            }
            $result['percentage'] = ($result['score']/$result['total_questions'])*100;
            return $result;
        },
            $this->markingGuide->storage, $this->studentSubmission->storage);

        $this->outputResults($results);
    }

    public function outputResults($results){
        foreach ($results as $result) {
            echo "=====================================\n";
            echo "|| ".strtoupper($result['subject'])."\n";
            echo "|| Total Questions >> ".$result['total_questions']." \n";
            echo "|| Total Answered >> ".$result['answered']." \n";
            echo "|| Score >> ".$result['score']." \n";
            echo "|| Percentage >> ".$result['percentage']."% \n";
            echo "=====================================\n";
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
                    $subject=readline('Enter the subject name to be created>>');
                    $questions= readline('Enter question number with respective answer >>');
                    $this->createMarkingGuide($subject,$questions);
                    break;
                case 2:
                    $subject=readline('Enter the subject name to be deleted ');
                    $this->deleteMarkingGuide($subject);
                    break;
                case 3:

                    $this->listAllMarkingGuide();
                    break;
                case 4:
                    $subject=readline('Enter the subject name to be submit ');
                    $questions= readline('Enter question number with respective answer');
                    $this->StudentSubmission($subject,$questions);
                    break;
                case 5:
                    $markingGuide=readline('Enter the subject name to be created ');
                    $studentSubmission= readline('Submit the student Paper');
                    $this->markStudentPaper($markingGuide, $studentSubmission);
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


$obj = new ConsoleApp();
$obj->createMarkingGuide('English', ['1'=>'a', '2'=>'c']);
// $obj->createMarkingGuide('Mathematics', ['1'=>'a', '2'=>'c']);
// $obj->createMarkingGuide('Chemistry', ['1'=>'a', '2'=>'c']);
// $obj->createMarkingGuide('Chemistry', ['1'=>'a', '2'=>'d']);

// $obj->studentSubmission('English', ['1'=>'a', '2'=>'d']);
// $obj->markStudentPaper();

// // echo  $obj->deleteMarkingGuide(0);
// // echo $obj->listAllMarkingGuide();
