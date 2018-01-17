<?php 
 date_default_timezone_set("Asia/Kuala_Lumpur");
   
?>
<?php
include_once 'db.php';
$id = $_POST['id'];
$fn = $_POST['fn'];
$fn1 = $_POST['fn1'];
$fn2 = $_POST['fn2'];
$fn3 = $_POST['fn3'];

$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$db->query("UPDATE users SET bname='$fn[$i]',address='$fn3[$i]',username='$fn1[$i]',password='$fn2[$i]' WHERE id=".$id[$i]);
}
echo "<script>
alert('data Successfully  updated');
window.location.href='vaccines.php';
</script>";
?>