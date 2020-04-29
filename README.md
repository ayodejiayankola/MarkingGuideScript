# Paper Script

This is a console based command line marking guide app/script for each Subject then output the score based on paper Submission.  Best practice using OOP. Built using PHPEach list of todo will contains items<br>
## Implementation Idea/Note
##### Paper Class
**Parameters**<br>
- Subject - UNIQUE<br>
- Question No - UNIQUE<br>
- Question <br>
- Correct Answer - StrtoUpper conversion during processing
- Answer Choice/corresponding answers - StrtoUpper  conversion in process<br>


**Methods**
- Create a new marking guide for A SUBJECT
- Save a created making guide and it  override if there is an exiting making guide
- Store a new marking guide in a file or array for each subject
- Delete a marking guide
- list all marking guide(within the store methods)
- Create Student Paper(A unique submission is made by a student)
- Score Output- Answers Comparison from marking guide and student paper submission and then output score
- Quit(End the loop )

**Note:** Store Format: multidimensional-array with key value pair:Subject: question no, correct answer;
[english]:1,A;2,C;3,D;4,A;5,D;6,D

### Marking Guide Class 
**Note:**(a subject can have one marking guide)<br>
Reference of class `Paper` into its class constructor  using dependency injection. 
### Student Class
**Note:**(a student can only take a subject)<br>

Reference of class `Paper` into its class constructor  using dependency injection. 

### Functionality/ App Menu
 - Create a new marking guide
 - Save (/ Override if existing) the marking guide
 - Store a new marking guide 
 - Remove/Delete a marking guide
 - List all available marking guide
 - Score a paper and output the score and a percentage
 - Quit!

In order to start using the application, navigate to the `MarkingGuideScript` directory on the local machine and run `php  index.php` in your directory commandline/terminal to get started
