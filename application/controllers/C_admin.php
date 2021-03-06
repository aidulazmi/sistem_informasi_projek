<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_admin extends CI_Controller {
function __construct(){
		parent::__construct();		
		$this->load->model('M_admin');
		$this->load->model('M_login');
	}
	public function index()
	{
		
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/das/das');
		$this->load->view('admin/inc/footer');
	}

/*Tampil Data*/
	public function t_proyek(){
		$data['user'] = $this->M_admin->tampil_data_proyek()->result();
		$this->load->view('admin/inc/head');
		$this->load->view('admin/inc/sidebar');
		$this->load->view('admin/data/d_proyek',$data);
		$this->load->view('admin/inc/footer');
	}
	public function jenis_proyek(){
			$data['user'] = $this->M_admin->tampil_data_jproyek()->result();
			$data['user2'] = $this->M_admin->tampil_data_proyek()->result();
			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/data/j_pekerjaan',$data);
			$this->load->view('admin/inc/footer');
		}


	public function Tahap_pekerjaan(){
			$data['user'] = $this->M_admin->tampil_data_tahap_pekerjaan()->result();
			$data['user3'] = $this->M_admin->tampil_data_jproyek()->result();
			$data['user2'] = $this->M_admin->tampil_data_proyek()->result();
			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/data/tahap_pekerjaan',$data);
			$this->load->view('admin/inc/footer');
		}
	public function sumber_daya_material(){
			$data['user'] = $this->M_admin->tampil_data_sumber_daya_material()->result();
			$data['user4'] = $this->M_admin->tampil_data_tahap_pekerjaan()->result();
			$data['user3'] = $this->M_admin->tampil_data_jproyek()->result();
			$data['user2'] = $this->M_admin->tampil_data_proyek()->result();
			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/data/sumber_daya_material',$data);
			$this->load->view('admin/inc/footer');
		}
		public function bulanan(){
			$data['user'] = $this->M_admin->tampil_data_bulanan()->result();
			$data['user2'] = $this->M_admin->tampil_data_proyek()->result();
			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/data/bulanan_projek',$data);
			$this->load->view('admin/inc/footer');
		}
		public function pengadaan_material(){
			$data['user'] = $this->M_admin->tampil_data_pengadaan_material()->result();
			$data['user4'] = $this->M_admin->tampil_data_tahap_pekerjaan()->result();
			$data['user3'] = $this->M_admin->tampil_data_jproyek()->result();
			$data['user2'] = $this->M_admin->tampil_data_proyek()->result();
			$data['user5'] = $this->M_admin->tampil_data_bulanan()->result();
			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/perencanaan/pengadaan',$data);
			$this->load->view('admin/inc/footer');
		}
		public function perencanaan_material(){
			
			$this->load->view('admin/inc/head');
			$this->load->view('admin/inc/sidebar');
			$this->load->view('admin/perencanaan/perencanaan');
			$this->load->view('admin/inc/footer');
		}
	/*Simpan Data*/
	/*Simpan Data*/

	public function simpan_proyek(){

		
		//$kode_proyek = $this->input->post('kode_proyek');
		$nama_proyek = $this->input->post('nama_proyek');
		$lokasi_proyek = $this->input->post('lokasi_proyek');
		$nama_pemilik = $this->input->post('nama_pemilik');
		$anggaran = $this->input->post('anggaran');
		$tanggal_kontrak = $this->input->post('tanggal_kontrak');
		$nomor_kontrak = $this->input->post('nomor_kontrak');
		$masa_kerja = $this->input->post('masa_kerja');
		$tanggal_mulai = $this->input->post('tanggal_mulai');
		$tanggal_selesai = $this->input->post('tanggal_selesai');

		$data = array(
			
			//'kode_proyek' => $kode_proyek,
			'nama_proyek' => $nama_proyek,
			'lokasi_proyek' => $lokasi_proyek,
			'nama_pemilik' => $nama_pemilik,
			'anggaran' => $anggaran,
			'tanggal_kontrak' => $tanggal_kontrak,
			'nomor_kontrak' => $nomor_kontrak,
			'masa_kerja' => $masa_kerja,
			'tanggal_mulai' => $tanggal_mulai,
			'tanggal_selesai' => $tanggal_selesai
			);
		$this->M_admin->input_data_proyek($data,'tb_proyek');
		redirect('C_admin/t_proyek');
	}

	public function simpan_jproyek(){

			
			//$id_jenis_pekerjaan = $this->input->post('id_jenis_pekerjaan');
			$nama_jenis_pekerjaan = $this->input->post('nama_jenis_pekerjaan');
			$kode_proyek = $this->input->post('kode_proyek');

			$data = array(
				
				//'id_jenis_pekerjaan' => $id_jenis_pekerjaan,
				'nama_jenis_pekerjaan' => $nama_jenis_pekerjaan,
				'kode_proyek' => $kode_proyek
				);
			$this->M_admin->input_data_jproyek($data,'jenis_pekerjaan');
			redirect('C_admin/jenis_proyek');
	}

		public function simpan_tahap_pekerjaan(){
		
		//$kode_tahap_pekerjaan = $this->input->post('kode_tahap_pekerjaan');
		$nama_tahap_pekerjaan = $this->input->post('nama_tahap_pekerjaan');
		$satuan = $this->input->post('satuan');
		$volume_kontrak = $this->input->post('volume_kontrak');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah = $this->input->post('jumlah');
		$id_jenis_pekerjaan = $this->input->post('id_jenis_pekerjaan');
		$kode_proyek = $this->input->post('kode_proyek');

		$data = array(
			
			//'kode_tahap_pekerjaan' => $kode_tahap_pekerjaan,
			'nama_tahap_pekerjaan' => $nama_tahap_pekerjaan,
			'satuan' => $satuan,
			'volume_kontrak' => $volume_kontrak,
			'harga_satuan' => $harga_satuan,
			'jumlah' => $jumlah,
			'id_jenis_pekerjaan' => $id_jenis_pekerjaan,
			'kode_proyek' => $kode_proyek
			);
		$this->M_admin->input_data_tahap_pekerjaan($data,'tahap_pekerjaan');
		redirect('C_admin/tahap_pekerjaan');
	}

		public function simpan_sumber_daya_material(){
		
		//$kode_sumber_daya_material = $this->input->post('kode_sumber_daya_material');
		$nama_sumber_daya = $this->input->post('nama_sumber_daya');
		$satuan = $this->input->post('satuan');
		$koofisien = $this->input->post('koofisien');
		$volume_kontrak = $this->input->post('volume_kontrak');
		$harga_satuan = $this->input->post('harga_satuan');
		$jumlah = $this->input->post('jumlah');
		$kode_tahap_pekerjaan = $this->input->post('kode_tahap_pekerjaan');
		$id_jenis_pekerjaan = $this->input->post('id_jenis_pekerjaan');
		$kode_proyek = $this->input->post('kode_proyek');

		$data = array(
			
			//'kode_sumber_daya_material' => $kode_sumber_daya_material,
			'nama_sumber_daya' => $nama_sumber_daya,
			'satuan' => $satuan,
			'koofisien' => $koofisien,
			'volume_kontrak' => $volume_kontrak,
			'harga_satuan' => $harga_satuan,
			'jumlah' => $jumlah,
			'kode_tahap_pekerjaan' => $kode_tahap_pekerjaan,
			'id_jenis_pekerjaan' => $id_jenis_pekerjaan,
			'kode_proyek' => $kode_proyek
			);
		$this->M_admin->input_data_sumber_daya_material($data,'sumber_daya_material');
		redirect('C_admin/sumber_daya_material');
	}
			public function simpan_pengadaan_material(){
					

					//$kode_rencana_pengadaan = $this->input->post('kode_rencana_pengadaan');
					$kode_tahap_pekerjaan = $this->input->post('kode_tahap_pekerjaan');
					$kode_jenis_pekerjaan = $this->input->post('kode_jenis_pekerjaan');
					$kode_proyek = $this->input->post('kode_proyek');
					$kode_periode_bulan = $this->input->post('kode_periode_bulan');
					$rencana_volume_bulan = $this->input->post('rencana_volume_bulan');
					$rencana_volume_minggu1 = $this->input->post('rencana_volume_minggu1');
					$rencana_volume_minggu2 = $this->input->post('rencana_volume_minggu2');
					$rencana_volume_minggu3 = $this->input->post('rencana_volume_minggu3');
					$rencana_volume_minggu4 = $this->input->post('rencana_volume_minggu4');

					$data = array(
						
						//'kode_rencana_pengadaan' => $kode_rencana_pengadaan,
						'kode_tahap_pekerjaan' => $kode_tahap_pekerjaan,
						'kode_jenis_pekerjaan' => $kode_jenis_pekerjaan,
						'kode_proyek' => $kode_proyek,
						'kode_periode_bulan' => $kode_periode_bulan,
						'rencana_volume_bulan' => $rencana_volume_bulan,
						'rencana_volume_minggu1' => $rencana_volume_minggu1,
						'rencana_volume_minggu2' => $rencana_volume_minggu2,
						'rencana_volume_minggu3' => $rencana_volume_minggu3,
						'rencana_volume_minggu4' => $rencana_volume_minggu4
						);
					$this->M_admin->input_data_pengadaan_material($data,'pengadaan_material');
					redirect('C_admin/pengadaan_material');
				}
		public function simpan_bulanan(){

		//$kode_periode_bulanan = $this->input->post('kode_periode_bulanan');
		$periode_bulanan = $this->input->post('periode_bulanan');
		$bulan = $this->input->post('bulan');
		$periode_tahun = $this->input->post('periode_tahun');
		$kode_proyek = $this->input->post('kode_proyek');
		$data = array(
			
			//'kode_periode_bulanan' => $kode_periode_bulanan,
			'periode_bulanan' => $periode_bulanan,
			'bulan' => $bulan,
			'periode_tahun' => $periode_tahun,
			'kode_proyek' => $kode_proyek
			);
		$this->M_admin->input_data_bulanan($data,'periode_bulanan');
		redirect('C_admin/bulanan');
	}

	/*Hapus Data Proyek*/

	public function hapus_proyek($kode_proyek)
	{
		$where = array('kode_proyek' => $kode_proyek);
	$this->M_admin->hapus_data_proyek($where,'tb_proyek');
	redirect('C_admin/t_proyek');

	}
	public function hapus_jproyek($id_jenis_pekerjaan)
	{
		$where = array('id_jenis_pekerjaan' => $id_jenis_pekerjaan);
	$this->M_admin->hapus_data_proyek($where,'jenis_pekerjaan');
	redirect('C_admin/jenis_proyek');
	}
	public function hapus_tahap_pekerjaan($kode_tahap_pekerjaan)
	{
		$where = array('kode_tahap_pekerjaan' => $kode_tahap_pekerjaan);
	$this->M_admin->hapus_data_tahap_pekerjaan($where,'tahap_pekerjaan');
	redirect('C_admin/tahap_pekerjaan');
	}
	public function hapus_sumber_daya_material($kode_sumber_daya_material)
	{
		$where = array('kode_sumber_daya_material' => $kode_sumber_daya_material);
	$this->M_admin->hapus_data_tahap_pekerjaan($where,'sumber_daya_material');
	redirect('C_admin/sumber_Daya_material');
	}

	public function hapus_bulanan($kode_periode_bulanan)
	{
		$where = array('kode_periode_bulanan' => $kode_periode_bulanan);
	$this->M_admin->hapus_data_tahap_pekerjaan($where,'periode_bulanan');
	redirect('C_admin/bulanan');
	}
	public function hapus_pengadaan_material($kode_rencana_pengadaan)
	{
		$where = array('kode_rencana_pengadaan' => $kode_rencana_pengadaan);
	$this->M_admin->hapus_data_pengadaan_material($where,'pengadaan_material');
	redirect('C_admin/pengadaan_material');
	}
}
