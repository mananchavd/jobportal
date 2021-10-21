
<?php
	$dir    = 'assets/';
	$files1 = scandir($dir);
	$files2 = scandir($dir, 1);

	print_r($files1);
	print_r($files2);
?>

<?php
	$directory = '/path/to/my/directory';
	$scanned_directory = array_diff(scandir($directory), array('..', '.'));
?>


<?php

$res = dirToArray($dir);

function dirToArray($dir) {
  
   $result = array();

   $cdir = scandir($dir);
   foreach ($cdir as $key => $value)
   {
      if (!in_array($value,array(".","..")))
      {
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
         {
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
         }
         else
         {
            $result[] = $value;
         }
      }
   }
  
   return $result;
}
?>
