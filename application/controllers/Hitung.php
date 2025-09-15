<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hitung extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->helper(array('url', 'form'));
    }
    
    public function index() {
        $this->load->view("menu_aritmatika");
    }
    
    public function perkalian() {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        $data['hasil'] = $data['d1'] * $data['d2'];
        $this->load->view('perkalian', $data);
    }
    
    public function pembagian() {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        
        if($data['d2'] != 0) {
            $data['hasil'] = $data['d1'] / $data['d2'];
        } else {
            $data['hasil'] = 'Pembagian dengan nol tidak valid';
        }
        $this->load->view('pembagian', $data);
    }
    
    public function penjumlahan() {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        $data['hasil'] = $data['d1'] + $data['d2'];
        $this->load->view('penjumlahan', $data);
    }
    
    public function pengurangan() {
        $data['d1'] = (int) $this->input->post('d1', true);
        $data['d2'] = (int) $this->input->post('d2', true);
        $data['hasil'] = $data['d1'] - $data['d2'];
        $this->load->view('pengurangan', $data);
    }
}
?>
