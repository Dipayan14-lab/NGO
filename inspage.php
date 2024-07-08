<?php include("inc/db.php");
if(isset($_POST['save'])){
$pt= $_POST['ptitle'];
$pd= $_POST['pd'];

$fn=$_FILES['pimg']['name'];
$buf=$_FILES['pimg']['tmp_name'];

move_uploaded_file($buf,"page_image/".$fn);

$ins="INSERT INTO page SET page_title='$pt',pimg='$fn',page_details='$pd'";
if($con->query($ins)){
    header("location:listpages.php");
}
?>



<?php }
else{
    echo "403 Forbidden";
} ?>