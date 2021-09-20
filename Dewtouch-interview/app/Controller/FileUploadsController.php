<?php
class FileUploadsController extends AppController {
	public function index() {
        $this->loadModel(FileUploads);//this is to load table name
        $result=$this->FileUploads->find(all);//this statement is nothing but select * from employee
        $this->set(results,$result);

?>