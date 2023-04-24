<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(['form_validation','session']);
		$this->load->database();
		$this->load->model('Login');
	}

	public function index() {

		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login/login_form');
		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users',['email' => $email])->row();
			// echo "<pre>";print_r($user);//die;
			if(!$user) {
				//echo "if---";die;
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

	
			// if(!password_verify($password,$user->password)) {
			// 	echo "if";die;
			// 	$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
			// 	redirect(uri_string());
			// }

			 $data = array(
					'user_id' => $user->user_id,
					'first_name' => $user->first_name,
					'last_name' => $user->last_name,
					'email' => $user->email,
					);

				
			$this->session->set_userdata($data);

			//redirect('/'); // redirect to home
			// echo 'Login success!'; exit;
			redirect('user/my_profile');
			
		}		
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('user/index');
    }

	public function my_profile()
	{
		// echo "<pre>";print_r($_SESSION);die;
		if(isset($_SESSION['email']))
		{
			$email = $_SESSION['email'];
			$result['data'] = $this->Login->get_user_data(array('email'=>$email));
			// echo "<pre>";print_r($result);die;
			$this->load->view('login/my_profile',$result);
		}
		else
		{
			redirect('user/index');
		}
	}

	public function update_profile()
	{
		// echo "here";
		if(isset($_SESSION['email']))
		{
			$get = $_REQUEST;
			$email = $_SESSION['email'];
			// echo "<pre>";print_r($_REQUEST);die;
				$result['data'] = $this->Login->update_profile( $email );
				
				$result1['data'] = $this->Login->get_user_data(array('email'=>$email));
				$result1['success'] = "Successfully Updated!";
				// echo "<pre>";print_r($result1);die;
				$this->load->view('login/my_profile', $result1);
        }
		else
		{
			redirect('user/index');
		}
	}

	public function dashboard()
	{
		if(isset($_SESSION['email']))
		{
			$data = $_REQUEST;
			
			if(empty($data))
			{
				$this->load->view('login/dashboard');
			}
			else
			{
				$data1 = array(
					'first_name'=> $data['first_name'],
					'last_name' => $data['last_name'],
					'email' => $data['email'],
					'service_date' => $data['service_date'],
					'origin_address' => $data['origin_address'],
					'destination_address' => $data['destination_address'],
					'state' => $data['state'],
					'city' => $data['city'],
					'dest_state' => $data['state1'],
					'dest_city' => $data['city1']
				);

				if ($this->input->post('submit')) {

					$this->Login->insert_dashboard_data($data1);
					redirect('user/my_leads');
				}
			}
		}
		else
		{
			redirect('user/index');
		}
	}

	public function my_leads()
	{
		if(isset($_SESSION['email']))
		{
			$result['data'] = $this->Login->get_dashboard_data();
			$this->load->view('login/my_leads',$result);
		}
		else
		{
			redirect('user/index');
		}
	}
}