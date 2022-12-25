<?php
declare(strict_types=1);
namespace App\Roles\UserInterface;

interface userInterface
{
     public function getUsername(): string;

     public function setName(string $username): void;

     public function getEmail(): string;

     public function getPassword(): string;

     public function setPassword(string $password): void;

     public function setEmail(string $email): void;

     public function getPersonal($username, $id);

     public function getMail($email,$username,$id,$password);

     public function setId(int $id): void ;

     public function getId(): int;

}