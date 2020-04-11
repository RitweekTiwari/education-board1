<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct()
	{
			parent::__construct();
			$this->load->model('Common_model');
			$this->load->model('Course_model');
	}
	public function index()
	{
		$data= array();
		$data['page'] ='Course';
		$data['tag']=  $this->Common_model->select('tags');
		$data['category']=  $this->Common_model->select('category');
		$data['main_content']= $this->load->view('course/addCourse',$data, true);
		$this->load->view('index',$data);
	}
	public function ViewCourse()
	{
		$data= array();
		$data['page'] ='Course';
		$data['course']=  $this->Course_model->select();

		$data['main_content']= $this->load->view('course/viewCourse',$data, true);
		$this->load->view('index',$data);
	}
		public function ViewCourseGrid()
	{
		$data= array();
		$data['page'] ='Course';
		$data['course']=  $this->Course_model->select();

		$data['main_content']= $this->load->view('course/viewCourseGrid',$data, true);
		$this->load->view('index',$data);
	}
		public function View($id)
	{
		$data= array();
		$data['page'] ='View Course';
		$data['course']=  $this->Course_model->select_by_id($id);
		$data['sub']=  $this->Course_model->select_Subject_by_id($id);
		$data['subject']=  $this->Course_model->select_subject();

		$data['main_content']= $this->load->view('course/addSubject',$data, true);
		$this->load->view('index',$data);
	}
		public function AddSubject($id)
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);
			$count= $this->Course_model->getMaxSerial($id); 
			
			if($count == NULL){
				$count=0;
			}
		foreach($data1['subject'] as $row){
			 $course=[
			   'course_id' =>$id,
            'subid' => $row,
            'serial' => ++$count
		];
		 $this->Common_model->insert($course,'course_meta');
		}
		redirect(base_url() . 'admin/Course/ViewCourse', 'refresh');
			}
	}
	 public function Add()
	{
		if($_POST){
			 $data1=$this->security->xss_clean($_POST);

         $course=[
            'name' => $data1['coursename'],
            'description' => $data1['description'],
        ];
		  $id =   $this->Common_model->insert($course,'course');
		  $tag=$_POST['tag'];
		  foreach($tag as $row){
			$data=[
            'root' => $id,
						'port' => $row,
						'type' =>'tag'
					];
		 $this->Common_model->insert($data,'indexing');
		  }
		    $category=$_POST['category'];
		  foreach($category as $row){
			$data=[
            'root' => $id,
			'port' => $row,
			'type' =>'category'
        ];
		 $this->Common_model->insert($data,'indexing');
		  }
			redirect(base_url() . 'admin/Course', 'refresh');
		}
    }
	public function Delete($id)
	{
            $data1=['course_id'=> $id];
            $this->Common_model->delete($data1,'course');
            redirect(base_url() . 'admin/Category', 'refresh');
    }
}
