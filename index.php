<?php 
include 'database.php';
$db = new database();
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<title>Input Data Mahasiswa</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
<div class="container">
<div class="col s12">
<nav>
    <div class="nav-wrapper black darken-1">
      <ul id="nav-mobile" class="center hide-on-med-and-down">
        <a href="index.php">INPUT DATA MAHASISWA</a>
      </ul>
    </div>
  </nav>
</div>
<br />
<div class="row">
<div class="col s12">
<a href="input.php" title="Tambah Data" class="btn-floating btn-medium waves-effect waves-light teal"><i class="material-icons">add</i></a>
      <table class="highlight">
        <thead>
          <tr>
          <th data-field="id">No</th>
              <th data-field="id">Nama</th>
              <th data-field="name">Alamat</th>
              <th data-field="price">NIM</th>
              <th data-field="price">Email</th>
              <th data-field="price">Tool</th>
          </tr>
        </thead>
<?php
	$no = 1;
	foreach($db->tampil_data() as $data){
	?>
        <tbody>
          <tr>
        <td><?php echo $no++; ?></td>
		<td><?php echo $data['nama']; ?></td>
		<td><?php echo $data['alamat']; ?></td>
		<td><?php echo $data['NIM']; ?></td>
        <td><?php echo $data['email']; ?></td>
            <td> 
              
     
      <a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit" class="btn-floating blue darken-2"><i class="material-icons">mode_edit</i></a>
      <a href="proses.php?id=<?php echo $data['id']; ?>&aksi=hapus" class="btn-floating red"><i class="material-icons">delete</i></a>
  
            </td>
          </tr>
        </tbody>
        <?php 
	}
	?>
      </table>
</div>
    </div>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>