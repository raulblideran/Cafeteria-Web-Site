<?php
  session_start();
  $connect = mysqli_connect('localhost', 'root', '', 'cafe');
?>
<?php
  $custOrder = 1;
  if(isset($_POST['add_to_cart']))
  {		
      $itemID = $_POST["itemID"];   
      $insert = mysqli_query($connect,"INSERT INTO `cafe`.`customers` (`firstName`, `lastName`) VALUES ('', '');");
      $insert = mysqli_query($connect,"INSERT INTO `cafe`.`custorder` (`custID`) VALUES ('$custOrder');");
      $insert = mysqli_query($connect,"INSERT INTO `cafe`.`productorder` (`custOrderID`, `productID`) VALUES ('$custOrder', '$itemID');");
  }
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css\website style.css">
    <link rel="stylesheet" href="css\button stlye.css">
        <title>
           Sandwiches
        </title>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous">
    </script>
    <script> 
    $(function(){
        $("#header").load("header.html"); 
        $("#footer").load("footer.html"); 
    });
</script> 
</head>
<body>
<div id='header'></div>
<a class= 'homeButton' href="index.php">Home</a>
<h2>
  SANDWICHES
      </h2>
<form action=sandwiches.php method="POST">
<div class="row">

			<?php
				$query = "SELECT * FROM Products ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
            ?>
<div class="col-sm-3">
<div class="card" >
  <h4 class="card-title"><?php echo $row['prodName']?><br> <?php echo $row['prodType']?> </h4>
  <img class="card-img-top" onclick="document.location='ham sandwich.php'" src="images/<?php echo $row['prodName']?>.png" alt="Sandwich image">
  <input type="hidden" name="itemID" value="<?php echo $row["ID"]; ?>" />
  <div class="card-block">
    <p class="card-price">Price: £<?php echo $row['price'];?></p>
    <input type="submit" name="add_to_cart" class="btn btn-success" value="Add to Cart">
    </div>
      </div>
      </div>
          </form>
<?php }}
?> 

  </div>
</body>
<div id='footer'></div>
</html> 