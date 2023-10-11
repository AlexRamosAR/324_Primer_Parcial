<?php 
	class estudiante extends CI_Model {
		public function agregar($estudiante){
			echo "Agregado";
			$this->db->insert('estudiante',$estudiante);
		}
		public function seleccionar_todo() {
            $this->db->select('*');
            $this->db->from('estudiante');
            return $this->db->get()->result();
        }
		public function eliminar($ci){
			$this->db->where('ci',$ci);
			$this->db->delete('estudiante');
		}
		public function modificar($data,$ci){
			$this->db->where('ci', $ci);
    		$this->db->update('estudiante', $data);
			echo "Actualizado";
		}

	}

 ?>