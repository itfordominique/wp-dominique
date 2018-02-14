<?php
$files_in_directory = scandir('/opt/app-root/src/wp-content/');
$items_count = count($files_in_directory);
if ($items_count <= 2){
	print_r("Successfully initialized the wp-content folder with wp-content template.");
	exec("cp -R /opt/app-root/src/wp-content-template/* /opt/app-root/src/wp-content/");
}
?>