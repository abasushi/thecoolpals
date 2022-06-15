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
        public function insert_time(){
            $data=array(
                  'stationArrive'=>$this->input->post('stationArrive'),
            
            );
            return $this->db->insert('station',$data);
        }   
      
}