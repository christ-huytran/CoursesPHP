<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Model {

  public function index()
  {
    $query = 'SELECT * FROM courses';
    return $this->db->query($query)->result_array(); // Notice the use of result_array() here. Why?
  }

  public function create($post)
  {
    $query = 'INSERT INTO courses (course, description, created_at, updated_at) VALUES (?, ?, NOW(), NOW())';
    $values = array($post['course'], $post['description']);
    return $this->db->query($query, $values);
  }

  public function show($id)
  {
    $query = 'SELECT * FROM courses WHERE id = ?';
    $value = array($id);
    return $this->db->query($query, $value)->row_array(); // Notice the use of row_array() here. Why?
  }

  public function delete($id)
  {
    $query = 'DELETE FROM courses WHERE id = ?';
    $value = array($id);
    return $this->db->query($query, $value);
  }
}
