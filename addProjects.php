<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once 'vendor/autoload.php'; 
use Illuminate\Database\Capsule\Manager as Capsule;
use Apps\Models\Project;
$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursophp',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

if (!empty ($_POST)) {
    # code...
    $job = new Project();
    $job->title = $_POST['title'];
    $job->description = $_POST['description'];
    $job->months = 4;
    $job->img = "https://static.platzi.com/media/achievements/1338-af905fe2-6399-4342-a5a7-57a580cae86b.png";
    $job->tecnologies = 'php';
    $job->save();
}


var_dump($_GET);
var_dump($_POST)
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
    <title>Add job</title>
</head>
<body>
<div class="container">
    <div class="row">
        
        <form action="addProjects.php" method="post">
        <h1>Add Project</h1>
        <br>
        <label for="">Title</label>
        <input type="text" class="form-control" name="title">
        <br>
        <label for="">Description</label>
        <input type="text" class="form-control" name="description">
        <br>
        <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</div>    
</body>
</html>