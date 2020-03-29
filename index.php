<?php 
    include_once("function.php");
    
    if(isset($_POST["A"]) || isset($_POST["B"]) || isset($_POST["C"])){
        $A = $_POST["A"];
        $B = $_POST["B"];
        $C = $_POST["C"];
        //echo delta($A, $B, $C);
    }
   
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MathEasy Web</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="script/script.js"></script>
    <!--
    Text Size = TS
    Goes at 1 to 7
    -->
</head>
<body>
    <!--
        Text Size = TS
        Goes at 1 to 7
    -->
    <div class="main">
        <p class="TS7">Equação do 2º Grau</p>
        
        <div class="first">
            <p class="TS3" style="margin-botton: 20px">Informe os coeficientes</p>    
            <form action="index.php" method="post">
                <input type="number" placeholder="A" name="A" class="I_text">
                <input type="number" placeholder="B" name="B" class="I_text">
                <input type="number" placeholder="C" name="C" class="I_text">
                <input type="submit" value="Calcular" class="I_submit">
            </form>
        </div>
        <div class="result">
           
            <?php 
                /*The function Show_bhaskara shows the result and
                the operations (how to calculate too).
                */
                if(isset($_POST["A"]) || isset($_POST["B"]) || isset($_POST["C"])){
                    show_bhaskara($A, $B, $C);
                }
                 
            ?>
            
        </div>
       
    </div>
</body>
</html>
