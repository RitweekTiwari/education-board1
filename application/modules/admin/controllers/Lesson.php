<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lesson extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Common_model');
			$this->load->model('Lesson_model');
	}
	public function index()
	{
		$data= array();
		$data['page'] ='Lesson';
		
		
		$data['main_content']= $this->load->view('Lesson/addLesson',$data, true);
		$this->load->view('index',$data);
	}
	public function View()
	{
		$data= array();
		$data['page'] ='Lesson';
		$data['lesson']=  $this->Lesson_model->select();
        
		$data['main_content']= $this->load->view('Lesson/view',$data, true);
		$this->load->view('index',$data);
	}

	 public function Add()
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);
         $lesson=[
             'name' => $data1['name'],
            
            'description' => $data1['description'],
        ];
		 $this->Common_model->insert($lesson,'lesson');
		  
			redirect(base_url() . 'admin/Lesson', 'refresh');
	}
    }
     public function Update($id)
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);
         $lesson=[
             'name' => $data1['name'],
            
            'description' => $data1['description'],
        ];
		 $this->Common_model->update($lesson,'lesson_id',$id,'lesson');
		  
			redirect(base_url() . 'admin/Lesson', 'refresh');
	}
    }
 public function Delete($id)
	{
            $data1=['lesson_id'=> $id];
            $this->Common_model->delete($data1,'lesson');
            redirect(base_url() . 'admin/Lesson', 'refresh');
    }
}
