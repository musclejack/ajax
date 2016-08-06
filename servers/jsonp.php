<?php 
    $callback = $_GET['callback'];
    echo $callback.'({jsonp:"jsonp"})';
?>