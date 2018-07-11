<?php
$index_file = 'index2.html';
if (file_exists($index_file)) {
	include($index_file);
} else {
	header('Location: build');
}
?>
