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

        exec('/etc/init.d/apache2 status | grep active', $retval1);

        exec('uptime', $retval);


        $load = explode(":",$retval[3]);

        exec('w', $retval);


        // Récupéation du nombre de users
        $nbUsers = explode(',',$retval[0]);
        $nbUsers[1];

        $nb = explode(' ', $nbUsers[1]);
      
 


        $nameUser = explode(' ',$retval[2]);




        //CPU

        exec('uptime /top', $cpu);



        $nbExec = explode(':', $cpu[0]);

        // NB1
        $nb1= explode(',', $nbExec[4]);

   

        // NB2
        $nb1 = explode(',', $nbExec[4]);
 

        // NB3
        $nb1 = explode(',', $nbExec[4]);


        exec('w', $listUser);
        
        $arrayUser = array();

        for($i = 2; $i < count($listUser) ; $i++){
            $name = explode(' ', $listUser[$i]);
            echo $name[0];
            $arrayUser[$i - 2]= $name[0];

        }


        require 'Views/dashboard.php';
    }
}