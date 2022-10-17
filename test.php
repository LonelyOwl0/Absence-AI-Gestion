<!DOCTYPE html>
<html>
<body>

<p>Display some text when the checkbox is checked:</p>
<form>
	<form action="test.php" method="post">
<label for="myCheck">Checkbox:</label> 
<input type="checkbox" name="myCheck" id="myCheck" valeur="ok" onclick="myFunction()">
<?php 
$mycheck="y";
?>




<script>
function myFunction() {
  var checkBox = document.getElementById("myCheck");
 
  if (checkBox.checked == true){
$mycheck=$_POST["myCheck"];
	echo $mycheck; }

<script>  
}
</script> 
</form>
</body>
</html>
