<?php
include("../../config/config.php");
print_r($_POST);
if(isset($_POST['title'])&& trim($_POST['$title']))
{
  $title =$_POST['title'];
  $title =$_POST['detail'];
   $query="insert into category(name,detail)values('$title','$detail')";
  $result = $conn->query($query);
  if($result)
  {
    echo 'value';
  }

}
?>