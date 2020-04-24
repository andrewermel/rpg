<?php
    $pv1=0;
    $pv2=0;
    $pv3=0;
    $pv4=0;
    
    if(isset($_GET["pv1"])){
        $pv1=$_GET["pv1"];
    };
    if(isset($_GET["pv2"])){
        $pv1=$_GET["pv2"];
    };
    if(isset($_GET["pv3"])){
        $pv1=$_GET["pv3"];
    };
    if(isset($_GET["pv4"])){
        $pv1=$_GET["pv5"];
    };

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div class="jogador" id="j1">
        <img src="iconedejogador.png">
         <h1>jogador 1</h1>
        <?php echo $pv1; ?> <button  class="j1"> + </button>
        <button  class="j1"> - </button>

    </div>
    <div class="jogador" id="mestre">
        <img src="iconedejogador.png">
        <h1>Mestre</h1>
    </div>
    <div class="jogador" id="j2">
        <img src="iconedejogador.png">
         <h1>jogador 3</h1>
         <?php echo $pv2; ?>
         <button  class="j2"> + </button>
        <button  class="j2"> - </button>
    </div>
    <div class="jogador" id="j3">
        <img src="iconedejogador.png">
        <h1>jogador 4</h1>
        <?php echo $pv4; ?>
        <button  class="j3"> + </button>
        <button  class="j3"> - </button>
     </div>
    <div class="jogador" id="j4">
        <img src="iconedejogador.png">
         <h1>jogador 4</h1>
         <?php echo $pv4; ?>
         <button  class="j4"> + </button>
        <button  class="j4"> - </button>
    </div>
    
  
    
    
    
    
</body>
</html>
