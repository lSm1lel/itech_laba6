    <?php
    require_once __DIR__ . '/vendor/autoload.php';
    $db = (new MongoDB\Client)->test->tasks;
    
    //$tbl= $db->tasks;
    // $tbl->insertOne(["projectName" => "Project1", "description" => "Language C++", 
    //                  "workers" => "Sanya", "manager" => "Tolya",
    //                  "startDate" => "2021-09-09", "endDate" => "2021-12-12"]);

    // $tbl->insertOne(["projectName" => "Project2", "description" => "Language C#", 
    //                  "workers" => "Vova", "manager" => "Ilya",
    //                  "startDate" => "2020-02-02", "endDate" => "2020-07-07"]);

    // $tbl->insertOne(["projectName" => "Project3", "description" => "Language JavaScript", 
    //                  "workers" => "Petya", "manager" => "Yaroslav",
    //                  "startDate" => "2019-03-03", "endDate" => "2019-05-05"]);

    // $tbl->insertOne(["projectName" => "Project4", "description" => "Language Php", 
    //                  "workers" => "Gleb", "manager" => "Vlad",
    //                  "startDate" => "2018-04-04", "endDate" => "2018-11-11"]);
?>