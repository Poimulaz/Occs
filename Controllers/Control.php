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
        require 'Views/Replace.php';
    }
}