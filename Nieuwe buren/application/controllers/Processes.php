<?php

class Processes extends CI_Controller {


public function index()
{
	$this->load->view('main');
}
public function sign_up()
{

			$this->form_validation->set_rules('name','Name','required|alpha|min_length[3]|max_length[15]|trim',array(
			'required'=>'You must eneter data to field',
			'alpha'=>'please enter only letters',
			'min_length[3]'=>'the name must at least 3 letters'
		));
			
			$this->form_validation->set_rules('email','Email','required|trim|valid_email',array(
			'required'=>'You must eneter data to field',
			'valid_email'=>'please enter valid email',
			
		));
			$this->form_validation->set_rules('password','Password','required|min_length[3]|max_length[15]|trim',array(
			'required'=>'You must eneter data to field',
			
			'min_length[8]'=>'the name must at least 8 letters'

		));
			$this->form_validation->set_rules('confirm_password','Confirm_Password','required|min_length[3]|max_length[15]|trim|matches[password]',array(
			'required'=>'You must eneter data to field',
			
			'min_length[8]'=>'the name must at least 8 letters',
			'matches[password]'=>'no match'
		));



		if ($this->form_validation->run()==false) 
		{
			$this->load->view('home');
		}
		else
		{
			$data=array
			(
				'first_name'=>$this->input->post('fname',true),

				'last_name'=>$this->input->post('lname',true),
				'email'=>$this->input->post('email',true),
				'password'=>md5($this->input->post('password',true))

			);
			if ($this->user->is_user_exist($data['email'])) 
			{
				$message['errors']='you are already exist';
				$this->load->view('home',$message);
			}
			else
			{
				$this->user->insert_user($data);
				$message['succes']='you are registered';
				$this->load->view('home',$message);

			}
		}

			


}
public function sign_in()
{


	$data=array
	(
		'email'=>$this->input->post('email',true),
		'password'=>md5($this->input->post('password',true))
	
	);
	$result=$this->user->get_user($data);
	if ($result) 
	{
		$session_data=array

		(
			'id'=>$result[0]->id,
			'first_name'=>$result[0]->first_name,
			'last_name'=>$result[0]->last_name,
			'email'=>$result[0]->email

		);
		$this->session->set_userdata($session_data);
		$this->load->view('wall');

	}
	else
	{
		$message['errors']="invalid email or password";
		$this->load->view('home',$message);
	}
}
}
