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

        $last_line = system('free -m', $retval);

        echo '
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ' . $retval;

        $last_line = system('/etc/init.d/apache2 status', $retval);

        $retval = explode("Active: ", $retval)[1];
        $retval = substr($retval, 0,6);
        echo '<div>retval =' . $retval . '</div>';
        /*if($retval){
            $ip = false;
        }
        else $ip =true;*/
        echo '
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ' . $retval;


        require 'Views/dashboard.php';
    }
}