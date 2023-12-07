<?php

namespace Builder;
require_once '../vendor/autoload.php';

class Contact implements Builder
{
    private string $name;
    private string $surname;
    private string $email;
    private string $phone;
    private string $address;

    public function name(string $name): Contact
    {
        $this->name = $name;
        return $this;
    }
    public function surname(string $surname): Contact
    {
        $this->surname = $surname;
        return $this;
    }
    public function email(string $email): Contact
    {
        $this->email = $email;
        return $this;
    }
    public function phone(string $phone): Contact
    {
        $this->phone = $phone;
        return $this;
    }
    public function address(string $address): Contact
    {
        $this->address = $address;
        return $this;
    }

    public function reset() {
        $this->name = '';
        $this->surname = '';
        $this->email = '';
        $this->phone = '';
        $this->address = '';
    }

    public function build(): Contact {
        $contact = $this;
        $this->reset();
        return $contact;
    }
}

$contact = new Contact();
$newContact = $contact->phone('000-555-000')
    ->name('John')
    ->surname('Surname')
    ->email('john@email.com')
    ->address('Some address')
    ->build();

dd($newContact);