<?php
/**
 * Created by PhpStorm.
 * User: Pierre
 * Date: 21/05/2018
 * Time: 15:57
 */

class Control
{
    public static function home()
    {

        exec('free -m', $retval);


        echo '
<hr />Valeur retournée : ';
        foreach ($retval as $line) {
            echo "$line";
            echo "<br>";
        }

        $mem = explode(":",$retval[1]);
        echo "memoire : " . $mem[1];
        echo "<br>";

        $espace = explode(" ",$mem[1]);
        $compteur = 0;
        foreach ($espace as $line) {
            if($line != " "){
                $mems[$compteur] = $line;
                $compteur ++;
            }
        }

        foreach ($mems as $line) {
            echo "$line";
        }
        $total = $mems[0];
        $occupe = $mems[1];
        $libre = $mems[2];

        echo "total = " . $total;
        echo "<br>";
        echo "occupe = " . $occupe;
        echo "<br>";
        echo "libre = " . $libre;
        echo "<br>";


        exec('/etc/init.d/apache2 status | grep active', $retval1);
/*
        $retval = explode("Active: ", $retval)[1];
        $retval = substr($retval, 0,6);
        foreach ($retval1 as $line) {
            echo "$line";
            echo "<br>";
        }
        $retval = $retval[1];
        explode("Active: ", $retval);
        $retval = substr($retval[1], 0,6);
*/
        foreach ($retval1 as $line) {
            echo "$line";
            echo "<br>";
        }
        /*if($retval){
            $ip = false;
        }
        else $ip =true;*/
        echo '
<hr />Valeur retournée : ';

        foreach ($retval1 as $line) {
            echo "$line\n";
        }


        require 'Views/dashboard.php';
    }
}