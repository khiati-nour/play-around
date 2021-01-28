<!DOCTYPE html>

<html lang="en">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
  <meta charset="UTF-8">
  <title>Title</title>
</head>
<body>
<div class="container">
    <div class="result">
           <p class="result" id="target"><?php /*if (!empty($_POST['submit']) ){*/echo $result;/*}else{echo "0";}*/;?></p>

    </div>
    <div class= "buttons">
    <form  method="post">
        <input type="submit" name="stay" value="stay">

        <input type="submit" name="hit" value="hit">

        <input type="submit" name="submit" value="play">

        </form>

    </div>
    <div class="content">

        <div class="Player">
            <h1><?php /*if (!empty($_POST['submit']) ){*/echo $sumPlayer;/*}else{echo "0";}*/?></h1>
          <h1>Your Hand</h1>


            <?php foreach ($sessions as  $session): ?>


            <img class="card-img-top" src="<?php if(isset($_POST['hit'] )) {echo $session -> get_img()/*}else{echo"images/back.jpg"*/;} ?>" alt="Card image cap" width="107" height="98">

            <?php endforeach; ?>



        </div>




        <div class="computer">
            <h1><?php /* if (!empty($_POST['submit']) ){*/echo $sumComputer;/*}else{echo "0";}*/?></h1>
            <h1>Computer Hand </h1>
           <img id="myImg3" src="<?php echo $chosenCardsComputer[0]->get_img();?>" alt="Card image cap" width="107" height="98" >
           <img id="myImg4" src="<?php echo$chosenCardsComputer[1]->get_img();?>" alt="Card image cap" width="107" height="98">
           </div>


        </div>

    </div>
















</body>
</html>