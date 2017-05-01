<!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" />
	<meta name="author" content="Hakko Bio Richard" />
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
<div class="col s6">
      <form action="proses.php?aksi=tambah" method="post">
        <div class="input-field">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="nama" id="nama" class="validate">
          <label for="icon_prefix">First Name</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">room</i>
          <input id="icon_telephone" type="text" name="alamat" id="alamat"  class="validate">
          <label for="icon_telephone">Alamat</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">stars</i>
          <input id="icon_telephone" type="text" name="NIM" id="NIM"  class="validate">
          <label for="icon_telephone">NIM</label>
        </div>
        <div class="input-field">
          <i class="material-icons prefix">message</i>
          <input id="icon_telephone" type="email" name="email" id="email"  class="validate">
          <label for="icon_telephone">Email</label>
        </div>
        <div class="input-field">
        <i class="material-icons prefix">message</i>
          <input class="btn waves-effect waves-light" type="submit" value="Simpan">
        </div>
      
    </form>
    </div>
</div>  
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>