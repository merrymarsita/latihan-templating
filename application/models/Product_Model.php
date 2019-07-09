<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_Model extends CI_Model {

	public function getProducts()
	{
		$this->db->select('*');
		$this->db->from('products');
		$this->db->limit(10);
		$query = $this->db->get();

		return $query->result();
    }
}
