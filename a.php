$location = 'https://github.com/julic123/img/blob/71d673ebbd7a4115733987ee731468b594b24f69/tutorial_answer.jpg';
$extTemp = explode('.',basename($location));
$ext = $extTemp[1]; if($ext == 'jpg') { $ext = 'jpeg'; }
header('Content-Type: image/'.$ext.'');
readfile($location);
