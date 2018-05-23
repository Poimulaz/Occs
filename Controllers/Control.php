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

        $mem = explode(":",$retval[1]);
        $espace = explode(" ",$mem[1]);
        $compteur = 0;
        foreach ($espace as $line) {
            if($line != " " && $line != null){
                $mems[$compteur] = $line;
                $compteur ++;
            }
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

        exec('uptime', $retval);


        echo '
<hr />Valeur retournée : ';
        foreach ($retval as $line) {
            echo "$line";
            echo "<br>";
        }

        $load = explode(":",$retval[3]);
        echo "LoadAverage" . $load;
        echo "<br>";
        exec('w', $retval);

        
        foreach ($retval as $line) {
        
            echo "$line";
            echo "<br />";
        }

        // Récupéation du nombre de users
        $nbUsers = explode(',',$retval[0]);
        $nbUsers[1];

        $nb = explode(' ', $nbUsers[1]);
        echo $nb;
    
        echo "<br />";


        $nameUser = explode(' ',$retval[2]);
        echo $nameUser[0];



        //CPU

        exec('uptime /top', $cpu);

        $nbExec = explode(':', $cpu[0]);
        echo $nbExec[3];
        echo "<br/>";

        // NB1
        $nb1 = explode(' ', $nbExec[3]);
        echo $nb1[1];
        echo "<br/>";

        // NB2
        $nb1 = explode(' ', $nbExec[3]);
        echo $nb1[2];
        echo "<br/>";

        // NB3
        $nb1 = explode(' ', $nbExec[3]);
        echo $nb1[3];

        require 'Views/dashboard.php';
    }
}