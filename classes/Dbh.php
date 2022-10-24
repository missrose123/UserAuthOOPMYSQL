<?php
class Dbh{
    private $hostname = '127.0.0.1';
    private $username = 'user';
    private $password = 'password';
    private $dbname = 'zuriphp';
    
    protected function connect(){
        return new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
    }
}

?>

