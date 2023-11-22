<?php
require_once __DIR__ . '/vendor/autoload.php';

class User
{
    private string $name;
    private int $age;
    private string $email;
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function __call(string $method, array $arguments)
    {
        if (method_exists($this, $method)) {
            return $this->$method( ... $arguments);
        } else {
            throw new Exception('Такого методу не існує!');
        }
    }
    public function getAll() {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'email' => $this->email
        ];
    }
}


// Для виводу даних User
try {
    $user = new User();
    $user->setName('Test');
    $user->setAge(17);
    $user->setEmail('test@gmail.com');


    dd($user->getAll());

} catch (Exception $e) {
    echo 'Помилка:' . "\n" . $e->getMessage();
}


// Для виводу помилки
/*try {
    $user = new User();
    $user->setName('Test');
    $user->setAge('17');
    $user->setError('Error');


    dd($user->getAll());

} catch (Exception $e) {
    echo 'Помилка:' . "\n" . $e->getMessage();
}*/

