<?php
  namespace App;
 
  /**
  * SQLite connnection
  */
  class SQLiteConnection {
    /**
    * PDO instance
    * 
    */
    private $pdo;
 
    /**
     * return in instance of the PDO object that connects to the SQLite database
     * return \PDO
     */
    public function connect() {

      try{

        if ($this->pdo == null) {
          $this->pdo = new \PDO("sqlite:" . Config::PATH_TO_SQLITE_FILE);
        }
        return $this->pdo;

      }catch(\PDOException $e){
        echo json_encode(
          array('error on pdo connect' . $e)
        );
        /**logerror($e->getMessage(), "opendatabase");*/
        /** print "Error in openhrsedb ".$e->getMessage();*/
    
      }
    }
}