<?php
if(isset($_POST["sbm"])){
	$username = $_POST['username']; // belom berhasil login
	$pass= $_POST['pass'];
	if($username=="Admin" AND $pass=="ridza"){
?>
        <meta http-equiv="refresh" content="2; url=./homeadm.html" />
        <center>
    	<h2>Berhasil Login</h2>kamu akan dialihkan kembali ke halaman admin dalam 2 detik
	</center>
	<div class="d-flex justify-content-center">
  			<div class="spinner-border text-success" role="status" style="width: 10rem; height: 10rem;">
   				 <span class="sr-only"></span>
  			</div>
	</div>	
<?php
    }
}
?>
