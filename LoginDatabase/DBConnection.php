<?php
class DbConnection{
 
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'users';
 
    protected $connection;
 
    public function __construct(){
		try{
			if (!isset($this->connection)){
				$this->connection = new mysqli($this->host, $this->username, $this->password, $this->database);
			}
			else{
				throw new Exception('Unable to connect');
			}
		} 
		catch(Exception $e){
			echo 'Cannot connect to database server';
			exit;
		}	
	 
			return $this->connection;
		}
	}
}
?>