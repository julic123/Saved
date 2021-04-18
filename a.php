$location = '이미지 주소';
$extTemp = explode('.',basename($location));
$ext = $extTemp[1]; if($ext == 'jpg') { $ext = 'jpeg'; }
header('Content-Type: image/'.$ext.'');
readfile($location);
