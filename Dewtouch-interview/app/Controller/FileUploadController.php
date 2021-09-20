<?php
class FileUploadController extends AppController {
	public function index() {
    
// Upload csv file
if ($this->request->is('post')) {
    
    $fileobject = $this->data['FileUpload']['csv'];		
    $fileName = $fileobject['name'];
    $tmpName = $fileobject['tmp_name'];
    $uploadFolder = '../webroot/files/';
    $destination = $uploadFolder.$fileName;	
    if(move_uploaded_file($tmpName, $destination))
    { 
       $this->setFlash('File uploaded successfully.');
// write CSV file to table  
    if (($handle = fopen($destination, "r")) !== FALSE) {
        while (($row = fgetcsv($handle, 0, ",")) !== FALSE) {
       $this->FileUpload->create();
       $this->request->data['FileUpload']['name']=$row[0];								
       $this->request->data['FileUpload']['email']=$row[1];
       $this->request->data['FileUpload']['valid']=1;
       $this->request->data['FileUpload']['created']=date('Y-m-d H:i:s');
       $this->request->data['FileUpload']['modified']=date('Y-m-d H:i:s');  
       $this->FileUpload->save($this->data);       
  }
  fclose($handle);
}
    }
    }
}
}
class FileUploadsController extends AppController {
	public function index() {
        $this->loadModel(FileUploads);//this is to load table name
        $result=$this->FileUploads->find(all);//this statement is nothing but select * from employee
        $this->set(results,$result);
    }
}
?>
