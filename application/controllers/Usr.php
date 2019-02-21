<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usr extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function kasir()
	{
		$this->load->view('page/meja_kasir');
	}

	public function pelayan()
	{
		$this->load->view('page/meja_pelayan');
	}

	public function menu()
	{
		$this->load->view('page/menu');
	}

	public function menu_load($m = '001')
	{
		$nomeja = $this->input->post('nomeja',true);
		$menu = $this->input->post('menu',true);
		$harga = $this->input->post('harga',true);
		$jumlah = $this->input->post('jumlah',true);
		$pesanan = json_encode(array("no-meja" => 'ERP'.date("dmy").'-'.$nomeja,"menu" => $menu,"Harga" => $harga, "jumlah" =>$jumlah));
		$total = 0;
		for ($i=0; $i < sizeof($harga); $i++) { 
			$t = $harga[$i]*$jumlah[$i];
			$total += $t;
		}
		echo $total;
		$jbeli = array("pelayan" => $_SESSION['user'], "data" => $pesanan, "total" => $total);
		// print_r($jbeli);
		$this->usr_model->save_transaksi($jbeli);
		$_SESSION[$nomeja] = "penuh";
		redirect('usr/pelayan');
	}

	public function unset()
	{
		$s = $this->input->get('sess',true);
		unset($_SESSION[$s]);
		redirect('usr/kasir');
	}

	public function laporan()
	{
		$this->load->view('page/total');
	}

}
