<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Usuarios_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
 
    function inserir($data) {
        return $this->db->insert('usuarios', $data);
    }
 
	function listar() {
		$query = $this->db->get('usuarios');
		return $query->result();
	}
        function editar($idusuario) {
    $this->db->where('idusuario', $idusuario);
    $query = $this->db->get('usuarios');
    return $query->result();
}
 
function atualizar($data) {
    $this->db->where('idusuario', $data['idusuario']);
    $this->db->set($data);
    return $this->db->update('usuarios');
}
 
function deletar($idusuario) {
    $this->db->where('idusuario', $idusuario);
    return $this->db->delete('usuarios');
}
}
 
/* End of file pessoas_model.php */
/* Location: ./application/models/pessoas_model.php */