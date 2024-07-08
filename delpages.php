<?php
include("inc/db.php");
$id=$_GET['id'];
$del="DELETE FROM page WHERE page_id='$id'";
if($con->query($del)){
    header("location:listpages.php");
}
?>