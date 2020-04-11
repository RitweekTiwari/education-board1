<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subject extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Common_model');
			$this->load->model('Subject_model');
	}
	public function index()
	{
		$data= array();
		$data['page'] ='Subject';
	
		
		$data['main_content']= $this->load->view('Subject/addSubject',$data, true);
		$this->load->view('index',$data);
	}
	public function View()
	{
		$data= array();
		$data['page'] ='Subject';
		$data['subject']=  $this->Subject_model->select();
       
		$data['main_content']= $this->load->view('Subject/view',$data, true);
		$this->load->view('index',$data);
	}
	public function addLesson($id)
	{
		$data= array();
		$data['page'] ='Add Lesson';
		$data['subject']=  $this->Subject_model->select_by_id($id);
		$data['sub']=  $this->Subject_model->select_Lesson_by_id($id);
		$data['lesson']=  $this->Subject_model->select_Lesson();

		$data['main_content']= $this->load->view('Subject/addLesson',$data, true);
		$this->load->view('index',$data);
	}
	public function LessonAdd($id)
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);
			$count= $this->Subject_model->getMaxSerial($id); 
			
			if($count == NULL){
				$count=0;
			}
		foreach($data1['lesson'] as $row){
			 $course=[
			   'subject_id' =>$id,
            'Lesson_id' => $row,
            'serial' => ++$count
		];
		 $this->Common_model->insert($course,'subject_meta');
		}
		redirect(base_url() . 'admin/Subject/view', 'refresh');
			}
	}
	 public function Add()
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);
         $subject=[
             'name' => $data1['name'],
            
            'description' => $data1['description'],
        ];
		  $this->Common_model->insert($subject,'subject');
		  
			redirect(base_url() . 'admin/Subject', 'refresh');
	}
    }

    	 public function Update($id)
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);
         $subject=[
             'name' => $data1['name'],
           
            'description' => $data1['description'],
        ];
		  $this->Common_model->update($subject,'subject_id',$id,'subject');
		  
			redirect(base_url() . 'admin/Subject', 'refresh');
	}
    }
     public function Delete($id)
	{
            $data1=['subject_id'=> $id];
            $this->Common_model->delete($data1,'subject');
            redirect(base_url() . 'admin/Category', 'refresh');
    }
}
