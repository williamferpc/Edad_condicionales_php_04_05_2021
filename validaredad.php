<?php 
    //Crea un condiconales que segun la edad muestre si es 
    //Mayor de edad,un recien nacido, un niño(a), un adolecente, un adulto(a)
    //un señor(a), o un anciano
    if ($_REQUEST["txtedad"]==0){
        echo "<h1>Es un recien nacido</h1>";            
    }elseif($_REQUEST["txtedad"]>0 && $_REQUEST["txtedad"] <= 10){
        echo "<h1>Es un niño</h1>";            
    }elseif($_REQUEST["txtedad"]>10 && $_REQUEST["txtedad"] < 18){
        echo "<h1>Es un adolecente</h1>";            
    }elseif($_REQUEST["txtedad"] >=18 && $_REQUEST["txtedad"] < 60){
        echo "<h1>Es un señor</h1>";            
    }elseif($_REQUEST["txtedad"] >= 60){
        echo "<h1>Es un anciano</h1>";                            
    }else{
        echo "Se debe ingresar un numero mayor a cero";
    }
?>