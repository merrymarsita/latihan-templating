<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$this->load->view('v_dashboard');
    }
    
    public function testFunction()
    {
        echo "Ini Function pada Controller Dashboard";
        $this->load->model('Product_Model', 'pm');

        $isi_query = $this->pm->getProducts();

        foreach($isi_query as $value)
        {
            echo $value->productName;
            echo "<br>";
        }
    }

}
