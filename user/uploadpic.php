<?php
include('session.php');
 date_default_timezone_set("Asia/Kuala_Lumpur");
?>
<html>
<head>
<title>Change Profile Picture</title>
</head>

<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.form.js"></script>

<script type="text/javascript" >
 $(document).ready(function() { 
		
            $('#photoimg').live('change', function()			{ 
			           $("#preview").html('');
			    $("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
			$("#imageform").ajaxForm({
						target: '#preview'
		}).submit();
		
			});
        }); 
</script>

<style>

body
{
font-family:arial;
}
.preview
{
width:200px;
border:solid 1px #dedede;
padding:10px;
}
#preview
{
color:#cc0000;
font-size:12px
}

</style>
<body>

<script>

    var childWindow = "";
    var newTabUrl="profile.php";

    function openNewTab(){
        childWindow = window.open(newTabUrl);
    }

    function refreshExistingTab(){
        childWindow.location.href=newTabUrl;
    }

	function goBack() {
    window.history.back()
}
</script>

<div style="width:600px">

<form id="imageform" method="post" enctype="multipart/form-data" action='ajaximage.php'>
Upload your Profile Picture <input type="file" name="photoimg" id="photoimg"/>
</form>
<div id='preview'>
</div>

<button type="button" 
        onclick="window.open('', '_self', ''); window.close(); openNewTab()">Save</button>
		<button type="button" 
        onclick="goBack()">Cancel</button>
		



</div>
</body>
</html>