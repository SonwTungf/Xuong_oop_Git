<?php

namespace  Pc\XUONG_OOP\Models;

use Pc\XUONG_OOP\Commons\Model;

class User extends Model 
{
    protected string $tableName = 'users';


public function findByEmail($email)
{
    return $this->queryBuilder
        ->select('*')
        ->from($this->tableName)
        ->where('email = ?')
        ->setParameter(0, $email)
        ->fetchAssociative();
}
}