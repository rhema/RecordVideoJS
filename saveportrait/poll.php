<?

//TBD add a "since" attribute

$videos_folder = "uploads/";

$files = array();
foreach (glob($videos_folder."*webm") as $file) {
	// echo $file;
  $ts = (int) explode(".", explode("-", $file)[1])[0];
  if(filesize($file) < 1000000)
    continue;
  $files[] =  array('file' => $file, 'timestamp'=>$ts);
}


header('Content-type: application/json');

$arr = array('files'=>$files);

echo json_encode($arr);

?>