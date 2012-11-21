<html>
<body>
	<form method="post" action="menu.php">
		
		
			name: <input type="text" name="uname"> 
			phone no<input type="text"name="phone"> 
			<input type="hidden" name="orderNumber" value="<?php  $_post['uname']?>">
				<input	type="submit">
		</form>

</body>
</html>
<?php 

?>
