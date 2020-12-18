<?php
    include_once 'C:\xampp\htdocs\bigProject\db.php';
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
<div class=product>
        <div class=prodtitle> Ham Sandwich </div>
        <img class='prodImg' src="images/Ham.png">
    <p class='ingredientTitle'> Ingredients:<br></p>
    <p class='ingredients'>
    white sesame bread<br>
    ham<br>
	gouda cheese<br>
	tomato<br>
    letuce<br>
</p>
<a onclick=.js-cd-add-to-cart class="btn btn-primary">Add to cart</a>
<p class='prodPrice'> Price = £2 </p>
<p class='nutritionalvalues'>
    Nutritional values and allergies:<br>
    Callories: 240 kcal<br>
    Carbohidrates: 15g<br>
    Proteins 10g<br>
<p>



</div>
<div id='footer'></div>
</body>
</html> 