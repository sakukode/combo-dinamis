<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_combo');
	}

	public function index()
	{
		$data['obyek'] = $this->m_combo->get_obyek();

		$this->load->view('combo_view',$data);
	}

	public function get_jenis()
	{
		$id = $_GET['id'];
		$data = $this->m_combo->get_jenis($id);

		echo json_encode($data);
	}

	public function get_varian()
	{
		$id = $_GET['id'];
		$result = $this->m_combo->get_varian($id);

		if($result != null)
		{
			$data = array(
				'varian' => $result->nama_varian
			);

			echo json_encode($data);
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */