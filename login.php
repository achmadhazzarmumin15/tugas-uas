<?php
$title="login";
$error=null;
include_once 'koneksi.php';

if (isset($_POST['submit'])){
	$nama_user =$_POST['nama_user'];
	$password =$_POST['password'];
	$sql ="SELECT * FROM user WHERE nama_user='{$nama_user}' AND password='{$password}'";
	$result = mysqli_connect()($conn, $sql);
	if($result && $result->num_rows>0){
		session_start();
		$_SESSION['isLogin'] = 1;
		header('location: admin.php');
	} else
		$error = "username atau password salah.";

}
include_once 'header.php'; ?>

<div id="login">
	<div class="art-box art-blockcontent">
           <div class="art-box-body art-blockcontent-body">
          
          <form action="admin.php" method="post" name="login" id="form-login">
        <fieldset class="input" style="border: 0 none;">
       <p id="form-login-username">
<label for="modlgn_username">Username</label>
         <br />
         <input id="modlgn_username" type="text" name="username" class="inputbox" alt="username" size="18" />
       </p>
       <p id="form-login-email">
<label for="modlgn_email">Email</label>
         <br />
         <input id="modlgn_email" type="text" name="email" class="inputbox" alt="email" size="18" />
       </p>
<p id="form-login-password">
<label for="modlgn_passwd">Password</label>
         <br />
         <input id="modlgn_password" type="password" name="password" class="inputbox" size="18" alt="password" />
       </p>
<span class="art-button-wrapper">
         <span class="art-button-l"> </span>
         <span class="art-button-r"> </span>
         <input type="submit" name="Submit" class="art-button" value="Submit" />
       </span>
        </fieldset>
</form>
<div class="cleared">
</div>
</div>
</div>
<div class="cleared">
</div>
</div>
</div>
</div>
<?php include_once 'footer.php'; ?>