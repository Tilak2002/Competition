<?php

class DB{
    
    //Database Connection
    public function dbConnect() {
        $username = "root";
        $password = "";
        $server = "localhost";
        $database = "competition";
        
        $con = mysqli_connect($server,$username,$password,$database);
        
        if($con){
            return $con;
            // "Connection Successfull";
        } else{
            return false; 
            // "Unsuccessfull Connection";
        }        
    }

    
    //Insert Query
    public function insertQuery($tname,$insarray){

        $con = $this->dbConnect();

      echo $insertquery = "insert into $tname (".implode(',',array_keys($insarray)).") values(".implode(',',array_values($insarray)).")";

        $res = mysqli_query($con,$insertquery);

        return $res;
        // return $con->insert_id;

        // if($res){
        //     echo "Inserted Successfully\n";
        // }
    }

    
    //Select Query
    public function selectquery($tablename,$where=array()){

        $con = $this->dbConnect();


        if(empty($where)){

            $sel = "SELECT * from $tablename";

        }

        else{

            $where_query = '';
            $concat = "AND";

            foreach($where as $key => $value)
            {
                if(end($where) == $value){

                    $where_query = $where_query." {$key} = '{$value}' ";
                }

                else{
                    $where_query = $where_query." {$key} = '{$value}' ".$concat;
                }
            }

        $sel = "SELECT * from $tablename WHERE ".$where_query;
        }
        
      $les = mysqli_query($con,$sel);
        
       return $les;

    }


        //Use of BETWEEN in Select Query
    public function sel_bet_query($tablename,$date)

    {
        $con = $this->dbConnect();

        $cdate = date("Y-m-d");

        $sql = "SELECT * FROM $tablename WHERE order_date BETWEEN '$date' and '$cdate'";
        
        $til = mysqli_query($con,$sql);
        
        $tilak = mysqli_num_rows($til);

        return $tilak;
    }


    //Update Query
    public function updatequery($tabname, $set, $where1 = array())
    {

        $con = $this->dbConnect();

        $set_query = "";
        $concate = " AND ";
        $upd_query = "";
        $cnt = ",";

        $count = count($set);
        $countLoop = 1;

        foreach($set as $key => $value)
        {
            //if(end($set) == $value)
            if($countLoop == $count)
            {
                $upd_query = $upd_query." {$key} = {$value} ";
            }

            else{
                $upd_query = $upd_query." {$key} = {$value} ".$cnt;
            }
            $countLoop++;
        }

        if(empty($where1)){

            $upd = "UPDATE $tabname SET $upd_query";

        }

        else{

            foreach($where1 as $key => $value)
            {
                if(end($where1) == $value){

                    $set_query = $set_query." {$key} = {$value} ";
                }

                else{
                    $set_query = $set_query." {$key} = {$value} ".$concate;
                }
            }

        $upd = "UPDATE $tabname SET" .$upd_query. " WHERE ".$set_query;
        }

       mysqli_query($con,$upd);
    }



    //Delete Query
    public function deletequery($tablename,$where2 = array()){

        $con = $this->dbConnect();

        // $del_query = "";

        if(empty($where2)){

            $del = "DELETE from $tablename";

        }

        else{

            $where_query1 = '';
            $concat = "AND";

            foreach($where2 as $key => $value)
            {
                if(end($where2) == $value){

                    $where_query1 = $where_query1." {$key} = '{$value}' ";
                }

                else{
                    $where_query1 = $where_query1." {$key} = '{$value}' ".$concat;
                }
            }

             $del = "DELETE from $tablename WHERE".$where_query1;

       }

       mysqli_query($con,$del);

    }
}

// $obj = new DB();

// $result = $obj -> dbConnect();


// $obj -> insertQuery($result,'details',$inarray); 


// $where = array("name" => "'tilak'", "email" => "'ij@uyg'");
// $obj-> selectquery($result,'details',$where);


// $set = array("email" => "'swami@t'", "password" => "'kalit'");
// $where1 = array("name" => "'tilak'", "email" => "'ij@uyg'");
// $obj -> updatequery($result,'details',$set,$where1);


?>