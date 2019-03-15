<?php

include_once('../config/Database.php');

class Vehicles extends Database
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_vehicles()
    {        
        $query = 'SELECT * FROM iar_vehicle_master';
        $result = $this->connection->query($query);
        $data = [];
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = [
                    'cs_no' => $row['cs_no'],
                    'model' => $row['model']
                ];
            }
        } 
        else {
            return 0;
        }

        return $data;
    }
}