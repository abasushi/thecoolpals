<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stations_Model extends CI_Model 
{
      public function __construct(){
            $this->load->database();
        }
      public function get_posts(){
            $query = $this->db->get('station');
            return $query->result_array();
    
        }    
        function saverecords($data){
            $this->db->insert('station',$data);
            return true;
        }   
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
            $query=$this->db->query("update form SET stationArrive-'$stationArrive' where stationId='$stationId'");
        }

      
}