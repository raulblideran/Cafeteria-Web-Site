<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css\website style.css">
        <title>
           Lo&Co Home Page
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
    <img src="images/cover.png" style="margin-top: 40px;">

<div style="color: #fdd428; font-size: 35px; padding-left: 55px; padding-top:25px;">
    Newly introduced products:
</div>

<div class="card-deck">
    <div class="card">
        <img class="card-img-top" src="images/Goat Cheese.png" alt="Card image cap">
            <a href="#" class="btn btn-primary">Click for details</a>    
    </div>
    <div class="card">
        <img class="card-img-top" src="images/Chicken Kebab.png" alt="Card image cap">
            <a href="#" class="btn btn-primary">Click for details</a>
    </div>
    <div class="card">
        <img class="card-img-top" src="images/Ham.png" alt="Card image cap">
            <a href="ham sandwich.php" class="btn btn-primary">Click for details</a>
    </div>
</div>
<div id='footer'></div>

    </body>
</html>