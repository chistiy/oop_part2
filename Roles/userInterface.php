<?php
declare(strict_types=1);
namespace App\Roles\UserInterface;

interface userInterface
{
     public function getPersonal($username, $id);
     public function getMail($email,$username,$id,$password);
}