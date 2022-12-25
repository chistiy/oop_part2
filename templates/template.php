<?php
namespace App\tempates\template;
use  App\Roles\User;
use App\Roles\Orginizer;
use App\Roles\Admin;


if ($_SESSION['ROLE'] == 0)
    {
//ADMIN





    }

    elseif ($_SESSION['ROLE'] == 1)
    {
//ORGINIZER


    }
    else

    {
    //USER




    }
