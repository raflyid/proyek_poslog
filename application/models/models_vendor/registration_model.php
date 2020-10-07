<?php
	//membuat class baru inherit CI_Model
class registration_model extends CI_Model
{
	function get_classification(){
		$hasil=$this->db->query("SELECT * FROM classification WHERE class_status = '1'");
		return $hasil->result();
	}

	function get_business_field(){
		$hasil=$this->db->query("SELECT * FROM business_field WHERE business_field_status = '1' ORDER BY business_field_name");
		return $hasil->result();
    }
    
    function get_category_business_field($id){
		$hasil=$this->db->query("SELECT * FROM category WHERE business_field_id = '$id'");
		return $hasil->result();
	}

}
?>
