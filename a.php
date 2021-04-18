$location = 'https://github.com/julic123/img/blob/main/tutorial_answer.jpg?raw=true';
$extTemp = explode('.',basename($location));
$ext = $extTemp[1]; if($ext == 'jpg') { $ext = 'jpeg'; }
header('Content-Type: image/'.$ext.'');
readfile($location);
