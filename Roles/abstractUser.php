<?php
declare(strict_types=1);
namespace App\Roles\User;
abstract class abstractUser implements userInterface
{   public int $role;
    public string $username;
    public int $id;
    public string $email;
    protected string $password;

    public function getPersonal($username, $id)
    {
        $username = $this->username;
        $id = $this->id;
        return $username;
        return $id;
    }
    public function getMail($email, $username, $id,$password)
    {
        $password = $this->password;
        $message = "$username логин\n $password пароль";
        $message = wordwrap($message, 70);
        mail($this->email);
    }
}