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
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ';
        foreach ($retval as $line) {
            echo "$line\n";
        }

        $mem = explode(" ",$retval[0]);
        echo $mem[2];
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
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ';

        foreach ($retval1 as $line) {
            echo "$line\n";
        }


        require 'Views/dashboard.php';
    }
}