<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stations_Model extends CI_Model 
{
//display all stations data
       function display_records()
        {
            $query=$this->db->query("select *from station");
            return $query->result();
        }
        //display specific station data
        function displayrecordsById($stationId)
        {
            $query=$this->db->query("select *from station where stationId='".$stationId."'");
            return $query->result();
        }
        //update database with new time
        function update_records($stationHours,$stationMinutes,$stationSeconds,$stationId)
        {
            $query=$this->db->query("update station SET stationHours='$stationHours', stationMinutes='$stationMinutes',stationSeconds='$stationSeconds' where stationId='$stationId'");
        }

      
}