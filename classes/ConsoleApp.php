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
        return json_encode($this->markingGuide);

    }


    //Remove/Delete a marking guide
    public function deleteMarkingGuide($subject)
    {

        $markingGuideStore = array($this->storeMarkingGuide());
        if( array_key_exists($subject,$markingGuideStore)) {
            // remove item at index 1 which is 'for'
            unset($markingGuideStore[$subject]);
            // Print modified array
            var_dump($markingGuideStore);
            // Re-index the array elements
            $arr2 = array_values($markingGuideStore);
            // Print re-indexed array
            //return true;
        }else{
            return $subject. ' Does not exist';
        }

    }


    //List all available marking guide
    public function listAllMarkingGuide()
    {
        return $this->storeMarkingGuide();
    }

    public function StudentSubmission($subject, $questions){
        return $this->studentSubmission->createSubject($subject, $questions);

    }
    //Mark Student Paper
    public function markStudentPaper(){
       //check the difference in the two array
        $result=array_intersect($this->getMarkingGuide(),$this->StudentSubmission());
        $newResult = count($result);
        $markingGuideAnswersCount = count($this->getMarkingGuide());
        $percentageResult = ($newResult/$this->$markingGuideAnswersCount )*100;
         return $percentageResult;
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
                    $this->createMarkingGuide('English', ['1'=>'a', '2'=>'5']);
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


$obj = new ConsoleApp();
$obj->createMarkingGuide('English', ['1'=>'a', '2'=>'c']);
//$obj->createMarkingGuide('Mathematics', ['1'=>'a', '2'=>'c']);
//$obj->createMarkingGuide('Chemistry', ['1'=>'a', '2'=>'c']);
//$obj->studentSubmission('physics', [
//'1'=>'a', '2'=>'c']);
echo  $obj->deleteMarkingGuide(1);
//echo $obj->listAllMarkingGuide();
