<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stations_Model extends CI_Model 
{

       function display_records()
        {
            $query=$this->db->query("select *from station");
            return $query->result();
        }
        function displayrecordsById($stationId)
        {
            $query=$this->db->query("select *from station where stationId='".$stationId."'");
            return $query->result();
        }
        function update_records($stationArrive,$stationId)
        {
            $query=$this->db->query("update station SET stationArrive='$stationArrive' where stationId='$stationId'");
        }

      
}