<?php 

class M_admin extends CI_Model{

	function tampil_data_proyek(){
		return $this->db->get('tb_proyek');
	}
	function input_data_proyek($data,$table){
		$this->db->insert($table,$data);
	}
	function hapus_data_proyek($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	function edit_data_proyek($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function update_data_proyek($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function tampil_data_jproyek(){
			return $this->db->get('jenis_pekerjaan');
		}
		function input_data_jproyek($data,$table){
			$this->db->insert($table,$data);
		}
		function hapus_data_jproyek($where,$table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		function edit_data_jproyek($where,$table){		
			return $this->db->get_where($table,$where);
		}
		function update_data_jproyek($where,$data,$table){
			$this->db->where($where);
			$this->db->update($table,$data);
		}

		function tampil_data_tahap_pekerjaan(){
				return $this->db->get('tahap_pekerjaan');
			}
			function input_data_tahap_pekerjaan($data,$table){
				$this->db->insert($table,$data);
			}
			function hapus_data_tahap_pekerjaan($where,$table){
				$this->db->where($where);
				$this->db->delete($table);
			}
			function edit_data_tahap_pekerjaan($where,$table){		
				return $this->db->get_where($table,$where);
			}
			function update_data_tahap_pekerjaan($where,$data,$table){
				$this->db->where($where);
				$this->db->update($table,$data);
			}
		function tampil_data_sumber_daya_material(){
						return $this->db->get('sumber_daya_material');
					}
					function input_data_sumber_daya_material($data,$table){
						$this->db->insert($table,$data);
					}
					function hapus_data_sumber_daya_material($where,$table){
						$this->db->where($where);
						$this->db->delete($table);
					}
					function edit_data_sumber_daya_material($where,$table){		
						return $this->db->get_where($table,$where);
					}
					function update_data_sumber_daya_material($where,$data,$table){
						$this->db->where($where);
						$this->db->update($table,$data);
					}

			function tampil_data_bulanan(){
						return $this->db->get('periode_bulanan');
					}
					function input_data_bulanan($data,$table){
						$this->db->insert($table,$data);
					}
					function hapus_data_bulanan($where,$table){
						$this->db->where($where);
						$this->db->delete($table);
					}
					function edit_data_bulanan($where,$table){		
						return $this->db->get_where($table,$where);
					}
					function update_data_bulanan($where,$data,$table){
						$this->db->where($where);
						$this->db->update($table,$data);
					}

					function tampil_data_pengadaan_material(){
						return $this->db->get('pengadaan_material');
					}
					function input_data_pengadaan_material($data,$table){
						$this->db->insert($table,$data);
					}
					function hapus_data_pengadaan_material($where,$table){
						$this->db->where($where);
						$this->db->delete($table);
					}
					function edit_data_pengadaan_material($where,$table){		
						return $this->db->get_where($table,$where);
					}
					function update_data_pengadaan_material($where,$data,$table){
						$this->db->where($where);
						$this->db->update($table,$data);
					}
}