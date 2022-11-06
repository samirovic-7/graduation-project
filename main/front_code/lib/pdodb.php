<?php



class pdodb{
    public $connection;
    public $query;
    public $sql;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=the_missings;";
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );
        try {
            $this->connection = new PDO($dsn, "root", "", $options); // return true or false
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // show the connection error statement
		}		// Catch any errors
		catch ( PDOException $e ) {
			$this->error = $e->getMessage();
		}
    }

    public function select($table, $column){
        $this->sql = "SELECT {$column} FROM `{$table}`";
        return $this;
    }
    
    public function where($column, $compare, $data){
        $this->sql .= " WHERE $column $compare:$column ";
        $this->setData($data);
        return $this;
    }
    
    public function andWhere($column, $compare, $data){
        $this->sql .= " AND $column $compare:$column ";
        $this->setData($data);
        return $this;
    }
    public function orWhere($column, $compare, $data){
        $this->sql .= " OR $column $compare:$column ";
        $this->setData($data);
        return $this;
    }
    public function whereLike($column, $data){
        $this->sql .= " WHERE `$column` LIKE '%$data%' ";
        return $this;
    }
    public function whereFilter($column, $compare, $data){
        if($data == 'off'){
            $this->sql .= " WHERE `$column` >= 0 ";
        }else{
            $this->sql .= " WHERE `$column` $compare $data ";
        }
        return $this;
    }
    public function andWhereFilter($column, $compare, $data){

        if($data == 'off'){
            return $this;
        }else{
            $this->sql .= " AND `$column` $compare $data ";
            return $this;
        }
    }
    public function between($column, $data){
        $this->sql .= " AND `$column` BETWEEN $data[1] AND $data[0] ";
        return $this;
    }
    public function orderBy($column, $type){
        $this->sql .= "ORDER BY `$column` $type ";
        return $this;
    }
    public function In($column, $data){
        if($data == 'off'){
            return $this;
        }else{
            $values ="";
            foreach($data as $key=> $val){
                $values .= "$val ,";
            }
            $values = rtrim($values, ",");
            $this->sql .= " AND `$column` IN ($values) ";
            return $this;
        }
    }
    
    public function getRow(){
        $this->executeQuery();
        return  $this->query->fetch(PDO::FETCH_ASSOC);
        
    }
    public function getAll(){
        $this->query();
        $this->executeQuery();
        $rows =  $this->query->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }
    public function getAllWe(){
        $this->executeQuery();
        $rows =  $this->query->fetchAll(PDO::FETCH_ASSOC);
        return $rows;
    }

    public function insert($table, $data){

        $columns ="";

        foreach($data as $key => $val){
            $columns .= "`$key`=:$key ,";
        }
        $columns = rtrim($columns, ",");
        $this->sql = "INSERT INTO `$table` SET $columns";

        return $this;
    }
    public function update($table, $cols){

        $columns ="";

        foreach($cols as $col => $val){
            $columns .= " $col=:$col   ,";
        }
        $columns = rtrim($columns, ",");
        $this->sql = "UPDATE `$table` SET $columns";
        

        return $this;
    }
   
    public function join($table, $first, $second){
        $this->sql .= "INNER JOIN $table ON $first = $second";
        return $this;
    }


    public function delete($table){
        $this->sql = "DELETE FROM `{$table}`";
        
        return $this;
    }
    
    public function query(){
        $this->query = $this->connection->prepare($this->sql);
        return $this;
    }
    public function setData($data){
        $this->query();
        foreach($data as $key => $val){
            $key = ":".$key;
            $this->query->bindValue($key, $val);
        }
        return $this;
    }
    public function executeQuery(){
        // echo $this->sql;
        if($this->query->execute()){
            return 1;
        }else{
            return 'error';
        }
    }
    public function getRowCount(){
        // echo $this->sql;
        $this->query->execute();
        $count = $this->query->rowCount();
        return $count;

	}

    public function __destruct(){
        $this->connection= null;
        $this->sql= null;
        $this->query= null;
    }
}