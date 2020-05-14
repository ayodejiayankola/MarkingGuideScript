<?php
class Paper{
    public  $storage = [];
    public  $subject;
    public $question =[];
    public function __construct()
    {
        $this->subject;
        $this->question;
    }


    public function createSubject($subject, $questions){

        if (!empty($subject) && is_array($questions) && !empty($questions)) {
            $subject = filter_var($subject, FILTER_SANITIZE_STRING);
            $newSubject = [
                'subject' => $subject,
                'questions' => $questions
            ];
            $existing = array_filter($this->storage, function($item) use($newSubject){
                return $item['subject'] === $newSubject['subject'];
            });

            // if no match
            if(!count($existing)){
                array_push($this->storage, $newSubject);
                echo 'Created '.json_encode($newSubject)."\n";
                return $newSubject;
            }

            $this->storage = array_map(function($existingSubject) use($subject, $questions){
                if($existingSubject['subject'] === $subject){
                    $existingSubject['questions'] = $questions;
                    echo "Found and replaced ".$subject." ".json_encode($existingSubject)."\n";
                }
                return $existingSubject;
            }, $this->storage);

            return $newSubject;
        }
        return null;
    }

}

//
//$new = new Paper();
//echo $new->createSubject('English', ['1'=>'4']);
