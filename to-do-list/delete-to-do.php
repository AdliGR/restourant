<?php

/* edit data */
function deleteTaskById(){

  global $conn;
    $data=[];
  if(isset($_GET['delete-task']) && !empty($_GET['delete-task']) ) {
     
    $id = $_GET['delete-task'];
    $msg = [];

     /* sql query*/
  $query = "DELETE task ";
  $query .= "FROM todo ";
  $query .= "WHERE id=$id"; 

    $result = $conn->query($query);
    $data = $result->fetch_assoc();

 }
 return $data; 

}  

?>