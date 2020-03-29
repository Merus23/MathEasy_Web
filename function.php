<?php
    function delta($a, $b, $c){
        $delta = ($b * $b) - (4 * $a * $c);
        return $delta;
    }
    //√ : símbolo raiz quadrada ►
    /*Símbolos:
        √ :  raiz quadrada
        ► : seta curta
        ± : mais ou menos
        → : seta fina
    */
    function show_bhaskara($a, $b, $c){
        //Text Size = TS
        //Goes at 1 to 7
        echo "<p class='TS3'>Bhaskara = (-B ± √Delta)/2A</p>";
        echo "<p class='TS3'>Delta = B² - 4 * A * C</p>";
        echo "<p class='TS3'>Delta = ", $b,"² - 4 * ", $a, " * ", $c, "</p>";
        echo "<p class='TS3'>Delta = ", $b * $b, " - ", 4*$a*$c,"</p>";
        echo "<p class='TS3'>Delta = ", ($b * $b)-(4*$a*$c),"</p>";
        $delta = ($b * $b)-(4*$a*$c);
        
        if($delta > 0){
            //Quando delta for maior que zero, duas raizes (X1, X2).
            echo "<p class='TS3'>Bhaskara = (-B ± √",$delta,")/2A</p>";
            echo "<p class='TS3'>Bhaskara = (",$b * (-1)," ± √",$delta,")/2 * ", $a,"</p>";
            echo "<p class='TS3'>Para delta maior que zero há duas raízes (X1 e X2):</p>";
            echo "<p class='TS3'>X1 = (-B - √delta)/2A e X2 = (-B + √delta)/2A </p>";
            echo "<p class='TS3'>X1 = (",($b * (-1))," - ",$delta,")/2 * ",$a,"</p>";
            echo "<p class='TS3'>X1 = (",($b * (-1)) - $delta,")/2 * ",$a,"</p>";
            echo "<p class='TS3'>X1 = ", ($b * (-1)  - $delta)/(2 * $a),"</p>";
            echo "<p class='TS3'>e</p>";
            echo "<p class='TS3'>X2 = (",($b * (-1))," + ",$delta,")/2 * ",$a,"</p>";
            echo "<p class='TS3'>X2 = (",($b * (-1)) + $delta,")/2 * ",$a,"</p>";
            echo "<p class='TS3'>X2 = ", ($b * (-1)  + $delta)/(2 * $a),"</p>";
            $X1 = ($b * (-1)  - $delta)/(2 * $a);
            $X2 = ($b * (-1)  + $delta)/(2 * $a);
            echo "<p class='TS3'>Conjunto solução = {",$X1,", ",$X2,"}</p>";
            
        

        }
        if($delta == 0){
            //Quando delta for igual à zero..
            echo "<p class='TS3'>Bhaskara = (-B ± √",$delta,")/2A</p>";
            echo "<p class='TS3'>Bhaskara = (",$b * (-1)," ± √",$delta,")/2 * ", $a,"</p>";
            echo "<p class='TS3'>Para delta igual à zero há apenas uma raiz:</p>";
            echo "<p class='TS3'>X1 = -B / 2A</p>";
            echo "<p class='TS3'>X1 = ",($b * (-1))," / 2 * ", $a,"</p>";
            echo "<p class='TS3'>X1 = ",($b * (-1)) / 2 *  $a," ou ",($b * (-1))," / ", 2 *  $a,"</p>";
            
        }
        
        if($delta < 0){
            //Quando delta for menor que zero..
            echo "<p class='TS3'>Para delta igual à zero não há raízes.</p>";
        }
        
    }

?>