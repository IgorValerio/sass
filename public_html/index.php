<?php

$palavra = "mãe";
$frase = "A repetição é mãe da retenção";
$q = strpos($frase, $palavra); 
$texto = substr($frase, $palavra);
$texto = substr($frase, $q + strlen($palavra), strlen($frase));
echo $texto;