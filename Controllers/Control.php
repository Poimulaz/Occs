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

        $last_line = exec('free -m', $retval);

        echo '
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ';
        foreach ($retval as $line) {
            echo "$line\n";
        }

        $last_line = exec('/etc/init.d/apache2 status | grep active', $retval);
/*
        $retval = explode("Active: ", $retval)[1];
        $retval = substr($retval, 0,6);*/
        foreach ($retval as $line) {
            echo "$line\n";
        }
        /*if($retval){
            $ip = false;
        }
        else $ip =true;*/
        echo '
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ';

        foreach ($retval as $line) {
            echo "$line\n";
        }


        require 'Views/dashboard.php';
    }
}