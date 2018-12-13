<?php
namespace Apps\Models;
use Illuminate\Database\Eloquent\Model;
class Job extends Model{
  protected $table = 'jobs';
//class Job extends BaseElements{
    // public function __construct($title, $description){
    //     $newTitle = 'Job: '.$title;
    //     $this->title = $newTitle;
    //     parent::__construct($newTitle, $description);
    // }

    public function getDurationAsSting(){
        $years = Floor($this->months/12);
        $ModuleMonths =$this->months %12;

        if ($years != 0) {
          # code...
          return "Job duration: $years Years $ModuleMonths Months";
        }
        else {
          # code...
         return "Job duration:  $ModuleMonths Months";
        } 
      }  
}
