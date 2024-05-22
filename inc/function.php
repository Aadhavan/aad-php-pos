<?php

class pacific{
	  public $con;  

	   public function __construct()  
      {  

          if($_SERVER['HTTP_HOST']=='localhost'){

            $host_name='localhost';
            $host_user='root';
            $host_pass='';
            $host_db='retailpos';

          }
          else{ 
  $host_name='localhost';
  $host_user='infogenx_retusr';
  $host_pass='jYs}Ao%F#sWv';
  $host_db='infogenx_retailpos';
          }
           $this->con = mysqli_connect($host_name, $host_user, $host_pass, $host_db);  
           if(!$this->con)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
           }  
      }  

	 public function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->con, $string))  
           {  
            $insID =  $this->con->insert_id;  
                return $insID ;
           }  
           else  
           {  
                echo mysqli_error($this->con);  
           }  
      }
      public  function genpoid()
      { 
          $query = "SELECT * FROM purchase ORDER BY intId   limit 0,1 ";  
          $result = mysqli_query($this->con, $query);  
          $row = mysqli_num_rows($result); 

          if($row == 0){

           $purchaserowid =50001;

          return $purchaserowid;
          } else {

            $query = "SELECT * FROM purchase ORDER BY intId DESC  limit 0,1 ";  
            $result = mysqli_query($this->con, $query);  
            $res = mysqli_fetch_assoc($result); 
            $tot = $res['intOrderId'];
            $purchaserowid =  $tot+1;

            return  $purchaserowid;

          }


      }
      function genid()
          {
           $query = "SELECT * FROM repair ORDER BY intId limit 0,1 ";  
           $result = mysqli_query($this->con, $query);  
           $row = mysqli_num_rows($result);

           if($row == 0){

            $purchaserowid =6001; 
          } 
          else {

           $query = "SELECT * FROM repair ORDER BY intId DESC limit 0,1 ";  
           $result = mysqli_query($this->con, $query);  
           $res = mysqli_fetch_assoc($result);
           $tot = $res['intCusId'];
           $purchaserowid = $tot+1;
           
         }
         return  $purchaserowid;

       }

       public  function gensoid()
      { 
          $query = "SELECT * FROM sales ORDER BY intId   limit 0,1 ";  
          $result = mysqli_query($this->con, $query);  
          $row = mysqli_num_rows($result); 

          if($row == 0){

           $purchaserowid =10001;

          return $purchaserowid;
          } else {

            $query = "SELECT * FROM sales ORDER BY intId DESC  limit 0,1 ";  
            $result = mysqli_query($this->con, $query);  
            $res = mysqli_fetch_assoc($result); 
            $tot = $res['intOrderId'];
            $purchaserowid =  $tot+1;

            return  $purchaserowid;

          }


      }
       public  function gensoidrs()
      { 
          $query = "SELECT * FROM resale_details ORDER BY id   limit 0,1 ";  
          $result = mysqli_query($this->con, $query);  
          $row = mysqli_num_rows($result); 

          if($row == 0){

           $purchaserowid =10001;

          return $purchaserowid;
          } else {

            $query = "SELECT * FROM resale_details ORDER BY id DESC  limit 0,1 ";  
            $result = mysqli_query($this->con, $query);  
            $res = mysqli_fetch_assoc($result); 
            $tot = $res['id'];
            $purchaserowid =  $tot+1;

            return  $purchaserowid;

          }


      }

      public function select($table_name)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name."";  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }   
       public function selectorderbydesc($table_name,$orderby)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name." order by ".$orderby." desc";  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }    


 public function select_where($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
            $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }  

      public function select_one($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
            $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->con, $query);  
           $row = mysqli_fetch_array($result); 
             
                $array[] = $row;  
             
           return $row;  
      } 
       public function select_rowcount($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
            $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->con, $query);  
           $row = mysqli_num_rows($result); 
  
             
           return $row;  
      }  



 public function update($table_name, $fields, $where_condition)  
      {  
           $query = '';  
           $condition = '';  
           foreach($fields as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2);  
           /*This code will convert array to string like this-  
           input - array(  
                'key1'     =>     'value1',  
                'key2'     =>     'value2'  
           )  
           output = key1 = 'value1', key2 = 'value2'*/  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . "='".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           /*This code will convert array to string like this-  
           input - array(  
                'id'     =>     '5'  
           )  
           output = id = '5'*/  
             $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
           if(mysqli_query($this->con, $query))  
           {  
                return true;  
           }  
      }  



public function delete_where($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = "DELETE  FROM ".$table_name." WHERE ".$condition."";  

           $result = mysqli_query($this->con, $query);  
          
          return 1; 
      }  
        function genorderID($characters =6) 
          {
            
            $possible = '012345678989';
            $code = '';
            $i = 0;
            while ($i < $characters) { 
              $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
              $i++;
            } 
            $code =  $code; 
            /*$Select = mysqli_query($conn,"select * from pindetails where `pinId` = '$code'");
            if(mysqli_num_rows($Select) !="0") {
              generateCode(7);
            } else {    
              return $code;
            }*/
             return $code;
          }

}

class pacific2{
    public $conn;  

     public function __construct()  
      {  

          if($_SERVER['HTTP_HOST']=='localhost'){

            $host_name='localhost';
            $host_user='root';
            $host_pass='';
            $host_db='pacific_erp';

          }
          else{ 
/*  $host_name='localhost';
  $host_user='cellapho_paciusr';
  $host_pass='v}]oP7ud+L3w';
  $host_db='cellapho_pacificerp';*/

  $host_name='localhost';
  $host_user='infogenx_retusr';
  $host_pass='jYs}Ao%F#sWv';
  $host_db='infogenx_pacificerp';
           
          }
           $this->conn = mysqli_connect($host_name, $host_user, $host_pass, $host_db);  
           if(!$this->conn)  
           {  
                echo 'Database Connection Error ' . mysqli_connect_error($this->conn);  
           }  
      }  

   public function insert($table_name, $data)  
      {  
           $string = "INSERT INTO ".$table_name." (";            
           $string .= implode(",", array_keys($data)) . ') VALUES (';            
           $string .= "'" . implode("','", array_values($data)) . "')";  
           if(mysqli_query($this->conn, $string))  
           {  
            $insID =  $this->conn->insert_id;  
                return $insID ;
           }  
           else  
           {  
                echo mysqli_error($this->conn);  
           }  
      }
      public  function genpoid()
      { 
          $query = "SELECT * FROM purchase ORDER BY intId   limit 0,1 ";  
          $result = mysqli_query($this->con, $query);  
          $row = mysqli_num_rows($result); 

          if($row == 0){

           $purchaserowid =50001;

          return $purchaserowid;
          } else {

            $query = "SELECT * FROM purchase ORDER BY intId DESC  limit 0,1 ";  
            $result = mysqli_query($this->con, $query);  
            $res = mysqli_fetch_assoc($result); 
            $tot = $res['intOrderId'];
            $purchaserowid =  $tot+1;

            return  $purchaserowid;

          }


      }
       public  function gensoid()
      { 
          $query = "SELECT * FROM sales ORDER BY intId   limit 0,1 ";  
          $result = mysqli_query($this->con, $query);  
          $row = mysqli_num_rows($result); 

          if($row == 0){

           $purchaserowid =10001;

          return $purchaserowid;
          } else {

            $query = "SELECT * FROM sales ORDER BY intId DESC  limit 0,1 ";  
            $result = mysqli_query($this->con, $query);  
            $res = mysqli_fetch_assoc($result); 
            $tot = $res['intOrderId'];
            $purchaserowid =  $tot+1;

            return  $purchaserowid;

          }


      }


      public function select($table_name)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name."";  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }   
       public function selectorderbydesc($table_name,$orderby)  
      {  
           $array = array();  
           $query = "SELECT * FROM ".$table_name." order by ".$orderby." desc";  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_assoc($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }    


 public function select_where($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
            $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->con, $query);  
           while($row = mysqli_fetch_array($result))  
           {  
                $array[] = $row;  
           }  
           return $array;  
      }  

      public function select_one($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
            $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->con, $query);  
           $row = mysqli_fetch_array($result); 
             
                $array[] = $row;  
             
           return $row;  
      } 
       public function select_rowcount($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
            $query = "SELECT * FROM ".$table_name." WHERE " . $condition;  
           $result = mysqli_query($this->con, $query);  
           $row = mysqli_num_rows($result); 
  
             
           return $row;  
      }  



 public function update($table_name, $fields, $where_condition)  
      {  
           $query = '';  
           $condition = '';  
           foreach($fields as $key => $value)  
           {  
                $query .= $key . "='".$value."', ";  
           }  
           $query = substr($query, 0, -2);  
           /*This code will convert array to string like this-  
           input - array(  
                'key1'     =>     'value1',  
                'key2'     =>     'value2'  
           )  
           output = key1 = 'value1', key2 = 'value2'*/  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . "='".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           /*This code will convert array to string like this-  
           input - array(  
                'id'     =>     '5'  
           )  
           output = id = '5'*/  
             $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";  
           if(mysqli_query($this->con, $query))  
           {  
                return true;  
           }  
      }  



public function delete_where($table_name, $where_condition)  
      {  
           $condition = '';  
           $array = array();  
           foreach($where_condition as $key => $value)  
           {  
                $condition .= $key . " = '".$value."' AND ";  
           }  
           $condition = substr($condition, 0, -5);  
           $query = "DELETE  FROM ".$table_name." WHERE ".$condition."";  

           $result = mysqli_query($this->con, $query);  
          
          return 1; 
      }  
        function genorderID($characters =6) 
          {
            
            $possible = '012345678989';
            $code = '';
            $i = 0;
            while ($i < $characters) { 
              $code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
              $i++;
            } 
            $code =  $code; 
            /*$Select = mysqli_query($conn,"select * from pindetails where `pinId` = '$code'");
            if(mysqli_num_rows($Select) !="0") {
              generateCode(7);
            } else {    
              return $code;
            }*/
             return $code;
          }

}


?>