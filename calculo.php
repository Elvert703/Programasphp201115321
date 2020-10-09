<?php
print "***************************************************************";
print "                   USAC - EFPEM                                ";
print "***************************************************************";
print "<br>";
$valor1=10;
$valor2=8;
$valor3=5;
print "El valor uno es de: ". $valor1;
print "<br>";
print "El valor dos es de: ". $valor2;
print "<br>";
print "El valor tres es de: ". $valor3;
print "<br>";
if ($valor1>$valor2 and $valor2>$valor3){
    print "Valor uno es el mayor";
    print "<br>";
    print "Valor dos es medio";
    print "<br>";
    print "valor tres es el menor";
}elseif($valor1>$valor3 and $valor3>$valor2){
    print "valor uno es el mayor";
    print "<br>";
    print "valor tres medio";
    print "<br>";
    print "valor dos el menor";
}
print "<br>";
print "***************************************** INFORMATICA ******************************";
?>