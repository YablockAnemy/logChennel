<?php
    if($_REQUEST["logmsg"]){
        $fd = fopen(date("d/M/H:i:s").".log", "w");
        fwrite($fd, $_REQUEST["logmsg"]);
        fclose($fd);
    }
?>
