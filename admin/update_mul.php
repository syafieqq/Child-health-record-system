<?php 
 date_default_timezone_set("Asia/Kuala_Lumpur");
   include 'session.php';
?>
<?php
include_once 'db.php';
$id = $_POST['id'];
$fn = $_POST['fn'];
$chk = $_POST['chk'];
$chkcount = count($id);
for($i=0; $i<$chkcount; $i++)
{
	$db->query("UPDATE vaccines SET vaccines='$fn[$i]' WHERE id=".$id[$i]);
}
echo "<script>
alert('data Successfully  updated');
window.location.href='vaccines.php';
</script>";
?>