<?php
include("../../config.php");
if(isset($_POST['title'])&&trim($_GET['title'])!=''){
    $title=$_POST['title'];
    $description=$POST['description'];


    $query ="insert into role(name,description)values('$title','$description')";
    $checkresult=$conn->query($query);
    if($checkresult){
    header("location:../role.php");
    die;
    }
// insert into tablename('columns','columns')values('','');
// update tablename set column1=value,column2=value where id=1
// delete from table name where id=1
}else{
    $_SESSION['status']='pass';
    header("location:../role.php");
}

?>