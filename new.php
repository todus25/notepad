<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<input type="checkbox" name="book[]" placeholder="book" value="bangla" />bangla
<input type="checkbox" name="book[]" placeholder="book" value="english" />english
<label><input type="checkbox" name="book[]" placeholder="book" value="math" />math</label>

<input type="submit"/>
</form>
<?php 
//class25.php?book=hello world&author=alimran
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['book'])){
	
	//echo $_REQUEST['book'];
	//echo $_REQUEST['author'];
	
	foreach($_POST['book'] as $k=>$v){
		echo $v.'</br>'; 
	}
	
}

?>
