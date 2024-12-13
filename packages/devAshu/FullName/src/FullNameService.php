<?php

namespace DevAshu\FullName;

class FullNameService
{
    public function getFullName($firstName, $lastName)
    {
        return $firstName . ' ' . $lastName;
    }
}
