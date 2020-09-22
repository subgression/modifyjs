<?
  $files = array();

  foreach (glob("../../*.html") as $filename) {
    array_push($files, $filename);
  }

  echo json_encode($files);
?>
