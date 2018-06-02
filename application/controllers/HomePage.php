<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {
 
  function __construct()
      {
             parent::__construct();
             $this->load->helper('url');
      }
	
	public function index()
                //İndex fonksiyonu ana fonksiyondur main gibi
	{
	        $this->load->view('_head');	
                $this->load->view('_header');
                $this->load->view('_banner');
                $this->load->view('_topbrands');
                $this->load->view('_footer');
                
	}
}
/*
 Anasayfa parçalama sırası
 1.header
 * banner
 * topbrands
 * footer
 */
?>