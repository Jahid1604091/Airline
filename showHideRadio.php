<!DOCTYPE html>
<html>
<head>
	<title>Radio</title>
</head>
<body>



<input type="radio" name="r1" onclick="showBox(1)" checked>Show
<input type="radio" name="r1" onclick="showBox(0)">Hide

<div>
	<img src="Images/3rdpart.jpg" id="textbox">
</div>



<script>
	
function showBox(x){
    if(x==1) document.getElementById("textbox").style.display="block";
    else document.getElementById("textbox").style.display="none";
}

</script>

</body>
</html>