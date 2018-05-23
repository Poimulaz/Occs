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
        // var_dump($_SESSION['user']); // ici l'objet est perdu -> object(__PHP_Incomplete_Class) (3)
        //shell_exec("echo 1");
        echo exec("text.bat");
        //echo exec("C:/Users/Pierre/Desktop/Ocw_script.bat");

        $last_line = system('Ocw_script.bat', $retval);

        // Affichage d'autres informations
        echo '
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ' . $retval;

       // $last_line = system('ping 8.8.8.8', $retval);

        if($retval){
            $ip = false;
        }
        else $ip =true;

        // Affichage d'autres informations
        echo '
<hr />La dernière ligne en sortie de la commande : ' . $last_line . '
<hr />Valeur retournée : ' . $retval;


        require 'Views/dashboard.php';
        //shell_exec("dir");
    }
}