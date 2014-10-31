<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Pessoas_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
 
    function inserir($data) {
        return $this->db->insert('pessoas', $data);
    }
 
	function listar() {
		$query = $this->db->get('pessoas');
		return $query->result();
	}
        function editar($idusuario) {
    $this->db->where('id', $idusuario);
    $query = $this->db->get('pessoas');
    return $query->result();
}
 
function atualizar($data) {
    $this->db->where('id', $data['id']);
    $this->db->set($data);
    return $this->db->update('pessoas');
}
 
function deletar($idusuario) {
    $this->db->where('id', $idusuario);
    return $this->db->delete('pessoas');
}
}
 
/* End of file pessoas_model.php */
/* Location: ./application/models/pessoas_model.php */