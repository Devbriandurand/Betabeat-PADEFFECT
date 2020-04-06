<?php

namespace Brian\Blog\Model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=p5;charset=utf8', 'root', 1234);
        return $db;
    }
}
