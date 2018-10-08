0 0 * * * php C:\wamp64\www\project\controller\comp.php
<?php
require '../model/model.php';
 $bdd = getBdd();
    $sql="SELECT deslike FROM shop WHERE deslike!= '00:00:00'";
    $stmt= $bdd->prepare($sql);
    $stmt->execute();
    $test = $stmt->fetchAll();
    foreach ($test as $value) {
    	$comp=date("H:i:s")-$value['deslike']; 
      if($comp>'2'){
      	 $sql2="UPDATE shop SET deslike='00:00:00' where ";
         $stmt=$bdd->prepare($sql2);
         $stmt->execute//cron  job taytexecuta toma 
      }
    }
?>
https://www.youtube.com/watch?v=tJ5RD10UVmQ