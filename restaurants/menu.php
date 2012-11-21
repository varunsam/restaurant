<html>
<body>
<form method="post" action="display.php">
<img src="http://2.imimg.com/data2/FG/KY/MY-2345506/restaurants-hotel-interiors-250x250.jpg">

Hello... <?php echo $_POST['uname'];?><br>
<br>

MENU

 	SELECT THE MENU's<br><br>
 	
 	<select multiple="multiple"name="d[]">
  <option value="soup" >SOUP</option>
  <option value="starter_v">STARTER VEG</option>
  <option value="starter_nv">STARTER NONVEG</option>
  <option value="main_v"> MAIN VEG</option>
  <option value="main_nv"> MAIN NONVEG</option>
  </select>
  <br>
  <br>
  QUANTITY:<select name="q">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
</select>
  <br>
  <br>
  ICE<br> select the flavour
  <input type="radio" name="name1" value="CHOCALATE"> CHOCALATE
   <input type="radio" name="name1" value="VENELLA"> VENELLA
    <input type="radio" name="name1" value="STRAWBERRY"> STRAWBERRY
   <br> QUANTITY:<input type="text" name ="ice">
    TOPPINGS
    <input type ="checkbox" value="NUTS"name="nuts">NUTS<br>
   <input type ="checkbox" value="DRY FRUITS"name="dry">DRY FRUITS<br>
  <br>
  <input type ="hidden" value="<?php echo $_POST['uname']?>" name="uname">
  <input type="submit">
  	 
</form>
</body>
</html>
<?php
