<div class="row-fluid">
	<div class="alert alert-info">
		<h3>File Upload Question</h3>
	</div>

	<p>Complete the File Upload feature and import the attached <?php echo $this->Html->link('<i class="icon-share
"></i> CSV file', '/files/FileUpload.csv', array('escape' => false)); ?>. Imported data will be shown below.</p>
	<p><em>* score will be given for filetype/mimetype checks</em></p>

	<hr />

	<div class="alert">
		<h3>Import Form</h3>
	</div>
<?php
echo $this->Form->create('FileUpload',['type' => 'file'],['name' => 'csv']);
echo $this->Form->file('csv');
echo $this->Form->button('Submit');
echo $this->Form->end();
?>

<?
$uploadPath ='../webroot/files/';
$files = scandir($uploadPath, 0);
echo "Files uploaded in files/ are:<br/>";
for($i = 2; $i < count($files); $i++)
   echo "File is - ".$files[$i]."<br>";
?>


	<div class="alert alert-success">
		<h3>Data Imported</h3>
	</div>

	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
				<th>Created</th>
			</tr>
			<?php
      			foreach ($results as $row):
      			echo "<tr><td>".$row->id."</td>";
      			echo "<td>".$row->username."</td>";
      			echo "<td>".$row->email."</td>";
	  			echo "<td>".$row->created."</td>";
      			endforeach;
  			 ?>
		</thead>
		<tbody>

		</tbody>
	</table>
</div>