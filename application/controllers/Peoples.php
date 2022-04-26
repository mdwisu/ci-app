<?php

class Peoples extends CI_Controller
{
    public function __construct() {
        parent::__construct();
        $this->load->model('Peoples_model', 'peoples');
    }
    public function index()
    {
        $data['judul'] = 'List of People';

        // pagination laibrary
        $this->load->library('pagination');

        // ambil data keyword
        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
        } else {
            $data['keyword'] = null;
        }

        // config
        $config['total_rows'] = $this->db->count_all_results();
        $config['per_page'] = 8;
       
        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);
        $data['peoples'] = $this->peoples->getPeoples($config['per_page'], $data['start'], $data['keyword']);

        $this->load->view('templates/header', $data);
        $this->load->view('peoples/index', $data);
        $this->load->view('templates/footer');
    }
    public function delete($id)
    {
        $this->peoples->deletePeople($id);
        $this->session->set_flashdata('flash', 'Didelete');
        redirect('peoples');
    }
}
