<?php
    require 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laba6</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Автор: ст.гр. КИУКИ-19-3 Александ Суровыкин </h1>
    <form action="result.php" method="get">
        <p>Completed tasks for the selected project on the specified date:</p>
    <select name="name1">
    <?php

    $person=$db->find([],['_id' => 0, 'projectName' => 1]);
            
    foreach ($person as $per) {
    echo '<option value="'.$per['projectName'].'">'.$per['projectName'].'</option>';
}
    ?>
    </select>
        <input type="date" value="2021-09-09" name="date1"> 
       <button type="submit">Search</button>
    </form> 

    <form action="result2.php" method="get">
        <p>Number of projects of the specified manager:</p>
    <select name="name2">
    <?php
    $person=$db->find([],['_id' => 0, 'manager' => 1]);
            
    foreach ($person as $per) {
    echo '<option value="'.$per['manager'].'">'.$per['manager'].'</option>';
}
    ?>
    </select> 
       <button type="submit">Search</button>
    </form>
    <form action="result3.php" method="get">
        <p>Employees who worked under the selected leader</p>
    <select name="name3">
    <?php
    
    $person=$db->find([],['_id' => 0, 'manager' => 1]);
            
    foreach ($person as $per) {
    echo '<option value="'.$per['manager'].'">'.$per['manager'].'</option>';
}
    ?>
    </select> 
       <button type="submit">Search</button>
    </form>

    <script>
            var resultArray=new Array();
            for(var i = 0; i < localStorage.length; i++){
                resultArray[resultArray.length]=localStorage.key(i);
            }
            console.log(resultArray);
    </script>
<form>
    <p>Local storage:</p>
    <select name="hst" id="hst">
            
    </select>
     <script>
         $(function(){ 
           for(var i = 0;i < resultArray.length; i++){
               var op = new Option(resultArray[i], resultArray[i]);
               $(op).html(resultArray[i]);
               $("#hst").append(op);
           }
       });
    </script>
     <script>
        $(function(){
            $('.loc').click(function(){
                var i = 0;
                var res=$('#hst').val();
                var str=localStorage.getItem(res);
                console.log(str);
         
            });
        });
    </script>    
</form>
</body> 