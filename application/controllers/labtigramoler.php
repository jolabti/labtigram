<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Labtigramoler extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('labtigramodel');
	}

	public function index()
	{
		$this->load->view('v_home');
	}

	public function sayhello(){

			echo "Hello Gundar";
	}

	public function admin(){

			$this->load->view('v_admin');

	}

	public function login(){
		if($this->session->userdata('validamin')){

			redirect('labtigramoler/admin');
		}
		else
		{

			$this->load->view('v_login');

		}

	}

	public function testsession(){


				$data = $this->session->userdata('validamin');
				echo json_encode($data);

	}

	public function showdata(){
		$data['photoslab'] = $this->labtigramodel->get_data_photos_model();
		$this->load->view('v_tablemin', $data);

	}

	public function editdata($idphotos){
		$data['photoslab'] = $this->labtigramodel->get_edit_photos_model($idphotos);
		$this->load->view('v_admin_update', $data);
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');



		$sess_array = array(
			'username' => $username,
			'password' => $password,
			'validamin' => true
			);

		$cek = $this->labtigramodel->checklogin($username,$password);

	 	if ($cek !=NULL) {
			  	$this->session->set_userdata('logged_in', $sess_array);
					redirect('labtigramoler/admin');
		}
		else
		{

					echo "<script>";
					echo "alert('Pastikan Authentikasi Benar')";
					echo "</script>";
					$this->load->view('v_login');
					//redirect('labtigramoler/login');
		}

	}

	public function uploadphotocontroller(){
			$config['upload_path'] = './photosfolder';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = '5000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('fileupload')) {
					echo $this->upload->display_errors();

			}
			else
			{
			//here $file_data receives an array that has all the info
			//pertaining to the upload, including 'file_name'

				$file_data = $this->upload->data();
				$filenamepass = $file_data['file_name'];

				$this->labtigramodel->uploadphotomodel($filenamepass);
				redirect('labtigramoler/showdata');
			}

}


	public function logout(){

				$this->session->sess_destroy();
				redirect('labtigramoler/login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
