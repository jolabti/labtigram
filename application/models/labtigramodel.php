<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Labtigramodel extends CI_Model {

	/**
	 Created by : Johan Nainggolan
	 Email : johandata@yahoo.com
	 Repository : www.github.com/jolabti
	 */




	public function uploadphotomodel($filenamepass){

		$namaphoto = $this->input->post('namaphoto');
		$ttlphoto = $this->input->post('ttlphoto');
		$emailphoto = $this->input->post('emailphoto');
		$socmedphoto = $this->input->post('socmedphoto');
		$telponphoto = $this->input->post('telponphoto');
		$angkatanphoto = $this->input->post('angkatanphoto');

		$data = array(
				'id_photos'=>rand(),
				'namaphoto'=>$namaphoto,
				'emailphoto'=>$emailphoto,
				'socmedphoto'=>$socmedphoto,
				'telponphoto'=>$telponphoto,
				'angkatanphoto'=>$angkatanphoto,
				'urlphoto'=>$filenamepass
		);

		$this->db->insert('photos', $data);

	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
