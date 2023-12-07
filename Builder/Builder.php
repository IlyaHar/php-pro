<?php

namespace Builder;
interface Builder
{
    public function name(string $name): Contact;
    public function surname(string $surname): Contact;
    public function email(string $email): Contact;
    public function phone(string $phone): Contact;
    public function address(string $address): Contact;
    public function build (): Contact;
}