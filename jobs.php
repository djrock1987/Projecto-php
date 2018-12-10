<?php
require_once 'apps/models/Job.php';
require_once 'apps/models/Project.php';
require_once 'apps/models/Printable.php';
require 'lib1/Project.php';
use Apps\Models\{Job,Project,Printable};


// class Job{
//     private $title;
//     public $description;
//     public $visible = true;
//     public $months;

//     public function __construct($title, $description){
//         $this->setTitle($title);
//         $this->description = $description;
//     }

//     public function setTitle($jobTitle){
//         if ($jobTitle == '') {
//             # code...
//             $this->title= 'N/A';
//         }
//         else{
//            $this->title = $jobTitle; 
//         }
//     }

//     public function getTitle(){
//         return $this->title;
//     }
//     public function getDurationAsSting(){
//         $years = Floor($this->months/12);
//         $ModuleMonths =$this->months %12;

//         if ($years != 0) {
//           # code...
//           return "$years Years $ModuleMonths Months";
//         }
//         else {
//           # code...
//          return "$ModuleMonths Months";
//         } 
//       }
// }

$job1 = new Job('PHP Developer','Php Lorem ipsum dolor sit amet consectetur.');
//$job1->setTitle ('PHP Developer');
//$job1->description ='Php Lorem ipsum dolor sit amet consectetur.';
//$job1->visible = true;
$job1->months=44;

$job2 = new Job('Python Dev','Python Lorem ipsum dolor sit amet consectetur.');
//$job2->setTitle ('Python Dev');
//$job2->description ='Python Lorem ipsum dolor sit amet consectetur.';
//$job2->visible = true;
$job2->months=3;

$job3 = new Job('Devops','Devops Lorem ipsum dolor sit amet consectetur.');
//$job3->setTitle ('');
//$job3->description ='Devops Lorem ipsum dolor sit amet consectetur.';
//$job3->visible = true;
$job3->months=26;

$project1 = new Project ('Project 1','Project 1 Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam commodi distinctio quod natus, deserunt dolores nisi magni accusantium similique eaque vel assumenda repellat voluptate, tempora accusamus voluptates voluptatum ut iusto.
Hic nam perspiciatis ut adipisci totam, eius consectetur quod.');


$projectLib = new Lib1\Project();

 $jobs = [
    $job1,
    $job2,
    $job3
    // [
    //  'title'=>'PHP Developer',
    //  'description'=>'Lorem ipsum dolor sit amet consectetur.',
    //  'visible'=>true,
    //  'months' => 44
    // ],
    // [
    //   'title'=>'Python Dev',
    //   'description' => 'Lorem ipsum dolor sit amet consectetur.',
    //   'visible'=>true,
    //   'months' => 3
    // ],
    //  [
    //   'title'=>'devops',
    //   'description' =>'Lorem ipsum dolor sit amet consectetur.',
    //   'visible'=>true,
    //   'months' => 17
    //  ],
    //  [
    //   'title'=>'frond Developer',
    //   'description'=>'Lorem ipsum dolor sit amet consectetur.',
    //   'visible'=>true,
    //   'months' => 5
    //  ],
    //  [
    //   'title'=>'Analyst',
    //   'description'=>'Lorem ipsum dolor sit amet consectetur.',
    //   'visible'=>true,
    //   'months' => 16
    //  ]
   ];
 $projects = [
    $project1
 ];
 
 function printElement(Printable $job){
   if ($job->visible == false) {
     # code...
       return;
     }
     echo '<li class="work-position">';
     echo '<h5>'.$job->getTitle(). '</h5>';
     echo '<p>' .$job->getDescription(). '</p>';
     echo '<p>' .$job->getDurationAsSting(). '</p>';
     //echo '<p> Experiencia acumulada ' .$totalMonsths. '</p>';
     echo '<strong>Achievements:</strong>';
     echo '<ul>';
     echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
     echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
     echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
     echo '</ul>';
     echo '</li>';
 }