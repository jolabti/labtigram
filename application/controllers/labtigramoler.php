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

	public function admin(){
			$this->load->view('v_admin');

	}

	public function uploadphotocontroller(){
			$config['upload_path'] = './photosfolder';
			$config['allowed_types'] = 'gif|jpg|jpeg|png|pdf';
			$config['max_size'] = '5000';
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('fileupload')) {
					echo $this->upload->display_errors();

			} else
			{
			//here $file_data receives an array that has all the info
			//pertaining to the upload, including 'file_name'

				$file_data = $this->upload->data();
				$filenamepass = $file_data['file_name'];

				$this->labtigramodel->uploadphotomodel($filenamepass);



	}

}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
