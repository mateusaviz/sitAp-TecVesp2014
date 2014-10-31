<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pessoas extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['titulo'] = "CRUD com CodeIgniter | Cadastro de Pessoas";
        $this->load->view('pessoas_view.php', $data);
    }

    function inserir() {

        /* Carrega a biblioteca do CodeIgniter responsável pela validação dos formulários */
        $this->load->library('form_validation');

        /* Define as tags onde a mensagem de erro será exibida na página */
        $this->form_validation->set_error_delimiters('<span>', '</span>');

        /* Define as regras para validação */
        $this->form_validation->set_rules('nome', 'Nome', 'required|max_length[40]');
        $this->form_validation->set_rules('email', 'E-mail', 'trim|required|valid_email|max_length[100]');

        /* Executa a validação e caso houver erro... */
        if ($this->form_validation->run() === FALSE) {
            /* Chama a função index do controlador */
            $this->index();
            /* Senão, caso sucesso na validação... */
        } else {
            /* Recebe os dados do formulário (visão) */
            $data['nome'] = $this->input->post('nome');
            $data['email'] = $this->input->post('email');

            /* Carrega o modelo */
            $this->load->model('pessoas_model');

            /* Chama a função inserir do modelo */
            if ($this->pessoas_model->inserir($data)) {
                redirect('pessoas');
            } else {
                log_message('error', 'Erro ao inserir a pessoa.');
            }
        }
    }

}

/* End of file pessoas.php */
/* Location: ./application/controllers/pessoas.php */