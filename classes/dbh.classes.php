<?php

class Dbh
{
    protected function connect()
    {
        try {
            $username = "";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=ooplogin', $username, $password);
            return $dbh;
        }
        catch (PDOException $e) {
            print "Error!" . $e->getMessage() . "<br/>";
            die();
        }
    }
}