<?php 
    
    if(!@mysql_connect("localhost","root","")|| !@mysql_select_db('ychm')){
        die("error connect the server db");
    }

?>