$location = '54-544029_ubuntu-wallpaper-4k.jpg';
$extTemp = explode('.',basename($location));
$ext = $extTemp[1]; if($ext == 'jpg') { $ext = 'jpeg'; }
header('Content-Type: image/'.$ext.'');
readfile($location);
