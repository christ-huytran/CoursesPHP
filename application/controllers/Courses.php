<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller {
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Course');
  }

  public function index()
  {
    $courses = $this->Course->index();
    $this->load->view('courses/index', array('courses'=> $courses));
  }

  public function create()
  {
    $this->Course->create($this->input->post());
    redirect('/');
  }

  public function show_delete_page($id)
  {
    $course = $this->Course->show($id);
    $this->load->view('courses/delete_page', array('course' => $course));
  }

  public function delete($id)
  {
    $this->Course->delete($id);
    redirect('/');
  }
}
