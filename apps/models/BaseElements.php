<?php
namespace Apps\Models;

class BaseElements  implements Printable{
    protected $title;
    public $description;
    public $visible = true;
    public $months;

    public function __construct($title, $description){
        $this->setTitle($title);
        $this->description = $description;
    }
    
    public function setTitle($jobTitle){
        if ($jobTitle == '') {
            # code...
            $this->title= 'N/A';
        }
        else{
           $this->title = $jobTitle; 
        }
    }

    public function getTitle(){
        return $this->title;
    }
    public function getDurationAsSting(){
        $years = Floor($this->months/12);
        $ModuleMonths =$this->months %12;

        if ($years != 0) {
          # code...
          return "$years Years $ModuleMonths Months";
        }
        else {
          # code...
         return "$ModuleMonths Months";
        } 
      }
    public function getDescription(){
        return $this->description;
    }
      
}