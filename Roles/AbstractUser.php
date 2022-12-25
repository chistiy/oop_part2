<?php
declare(strict_types=1);
namespace App\Roles\User;
use App\Roles\UserInterface\userInterface;

abstract class User implements userInterface
{   public int $role;
    public string $username;
    public int $id;
    public string $email;
    protected string $password;

    public function __construct(){
        $getPersonal = $this->getPersonal();
        $getMail = $this->getMail();
        $getUsername = $this->getUsername();
    }
    public function getUsername(): string
    {
        return $this->username;
    }


    public function setName(string $username): void
    {
        $this->username = $username;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }


    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_BCRYPT);
    }


    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    protected array $fillable = [
        'name',
        'email',
        'password',
    ];

    protected array $hidden = [
        'password',
    ];

    public function getPersonal($username, $id): string
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