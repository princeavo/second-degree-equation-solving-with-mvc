<?php 
if($partie == 1){
    $a = htmlspecialchars($a);
    $b = htmlspecialchars($b);
    $c = htmlspecialchars($c);

    //Conversion des variables en double

    $a = (double)$a;
    $b = (double)$b;
    $c = (double)$c;

    if($a !=0){
        $message .="{$a}x<sup>2</sup>";
    }
    if($b >0){
        $message .= ($a !=0 ? "+":"")."{$b}x";
    }
    if($b <0){
        $message .= "{$b}x";
    }
    if($c >0){
        $message .= ($b !=0 ? "+":"")."{$c}";
    }
    if($c <0){
        $message .= "{$c}";
    }
    if($a == 0 && $b == 0 && $c == 0)
        $message.="0";
    $message .= " = 0  ";
    
    if($a !=0){
    //Calcul du dicriminant delta = b**2 - 4*a*c
        $delta = ($b**2)- 4*$a*$c;
        if($delta == 0){
            $x0 = (-$b)/(2*$a);
            $message .= "admet une solution double x0 = $x0 dans R";
        }elseif($delta > 0){
            $x1 = (-$b-sqrt($delta))/(2*$a);
            $x2 = (-$b+sqrt($delta))/(2*$a);
            $message .= "admet deux  solutions  x1 = $x1 et x2 = $x2 dans R";
        }else{
            //Le discriminant est négatif
            $message .= "n'admet aucune solution réelle";
        }
    }else{
        //bx+c = 0
        if($b == 0){
            //c = 0
            if($c == 0){
                $message .=" admet toutes les valeurs de R comme solutions";
            }else{
                $message .=" n'admet aucune solution réelle";
            }
        }else{
            $x0 = (-$c/$b);
            $message .= "admet une seule solution  x = $x0 dans R";
        }
        $message .="<br>Cependant cette équation n'est pas du second degré,car une équation du second degré est sous la forme de <b>ax<sup>2</sup>+bx+c=0<b> avec <b>a différent de 0</b>";
    }
}
include_once './vue/index.php';