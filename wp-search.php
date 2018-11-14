<title>WordPress theme search tool</title>
<link href="http://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet" type="text/css">
<style>
body {
	background:black;
	color:green;
	margin:4px;
	padding:50px;
	font-family: Share Tech Mono;
}
input[type=text] {
	color:green;
	background:black;
	border:1px solid green;
	margin:4px;
	padding:4px;
	font-family: Share Tech Mono;
}
input[type=submit] {
	color:black;
	background:green;
	border:1px solid green;
	margin:4px;
	padding:4px;
	font-family: Share Tech Mono;
}
</style>
<center><font new size="5">WordPress Theme Search Tool</font><br><form method="GET" action="">
<input type="text" placeholder="jupiter" name="name" value="<?=$_REQUEST['name'];?>"><input type="text" placeholder="page cn : 2" name="page"><input type="submit" name="send" value="Search">
<br>
</center>
<?php
// ustadcage_48
// indoxploit && res7ock crew
function curl($url){
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}
if($_GET['send']){
$name = $_GET['name'];
$page = $_GET['page'];
$get = curl("https://themetix.com/$name/$page");
preg_match_all("/>(.*?)<\/p><\/a>/", $get, $hasil);
foreach($hasil[1] as $ass){
	echo "http://".$ass."<br>";
}
}
?>