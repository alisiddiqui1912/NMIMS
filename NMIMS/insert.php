<?php

       $con=mysqli_connect('192.168.43.130','root','') ;

       if (!$con)
       {
           echo 'Not Connected To Server';

       }
       if (!mysqli_select_db($con,'tutorial'))
       {
          echo 'Database Not selected';

       }
       $Name=$_POST('username');
       $Email=$_POST('email');

        $sql="INSERT INTO person (NAME,EMAIL) Values ('$Name','$Email')";
        if(!mysql_query($con,$sql))
        {

        	echo 'Not Inserted';
        }
        else
        {
        	echo 'Inserted';
        }
        header("refresh:2; url=login.html");


    ?>