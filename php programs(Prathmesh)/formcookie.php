<!DOCTYPE html>
<html>
<head>
	<title>COOKIE EXAMPLE</title>
</head>
<body>
	<form action="formcookie.php" method='POST' class="form">
		<div class="row text-center p-3 m-4">
			<div class="col">
				<button class="btn btn-dark" name="Mod-button">Modify Cookie value</button>
			</div>
			<div class="col">
				<button class="btn btn-danger" name="Del-button">Delete cookie</button>
			</div>
		</div>
		<div class="row text-center p-3 m-4">
			<div class="col">
				<button class="btn btn-success" name="chk-button">Check if cookie is enabled</button>
			</div>
			<div class="col">
				<button class="btn btn-primary" name="Res-button">Set default cookie</button>
			</div>
		</div>
	</form>

</body>
</html>
<?php
if(isset($_POST['Mod-button'])){
	modifyCookie();
}
if(isset($_POST['Del-button'])){
	delCookie();
}
if(isset($_POST['chk-button'])){
	checkCookie();
}
if(isset($_POST['Res-button'])){
	resetCookie();
}
function checkCookie(){
	$cookieName = "user";
	$cookieValue= "Prathmesh Patil";
	setcookie($cookieName,$cookieValue,time()-180,"/");
	if (count($_COOKIE)>0) {
		echo "<h1 class='text-success text-center'>Cookies Are enabled!<h1>";
	}else{
		echo "<h1 class='text-danger text-center'>Cookies Are not Enabled</h1>";
	}
}
function delCookie(){
	$cookieName="user";
	setcookie($cookieName,"",time()-9999,"/");
	if(isset($_COOKIE['$cookieName'])){
		echo "<h4 class='text-center'>Cookie : $cookieName is now Deleted </h4><h1
		class='text-muted text-center'>You may set cookie by </h1><h4 class='text-muted text-center'>
		Clicking modify button or reset button </h4>";
	}
}
function chkCookie($cookieName){
	if (isset($_COOKIE[$cookieName])) {
		echo '<script type="text/JavaScript">alert("If you don\'t see any change, then kindly
		reload the page once again ");</script>';
		echo "<h1 class='text muted text-center'>COOKIE SET!</h1>";
		$x = $_COOKIE[$cookieName];
		echo "<h4 class='text-muted text-center'>Cookie Name:$cookieName<br>Value:
		$_COOKIE[$cookieName]</h4>";
	}else{
		echo "<h4 class='text-center'>Cookie : $cookieName is not set </h4><h1 class='text-muted text-center'>
		SETTING COOKIE...</h1><h4 class='text-muted text-center'>RELOAD THE PAGE NOW</h4>";
	}
}
function modifyCookie(){
	$cookieName="user";
	$cookieValue="Prathmnesh P";
	setcookie($cookieName, $cookieValue,time()+180,"/");
	chkCookie($cookieName);
}
function resetCookie(){
	$cookieName="user";
	$cookieValue="Prathmesh Patil";
	setcookie($cookieName,$cookieValue,time()+180,"/");
	chkCookie($cookieName);
}