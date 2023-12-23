<?php
        $firstname=$_REQUEST['firstname'];
        $lastname=$_REQUEST['lastname'];
        $email=$_REQUEST['email'];
        $mobile=$_REQUEST['mobile'];
        $password=$_REQUEST['password'];
        $confirm_password=$_REQUEST['confirm_password'];
        $country=$_REQUEST['country'];
        $birthday=$_REQUEST['birthday'];

        if( isset($_post['button']))
        {

       
            $host="localhost";
            $user="root";
            $password="";
            $db="HireMe";

            @$conn = mysqli_connect($host,$user,$password,$db);

            $insert="insert into form values('$fistname', '$lastname' , '$email' , '$mobile, '$password'
           , '$confirm_password' , '$country' , '$birthday' )";
            
           mysql_query($conn,$insert);

           if($conn)
           {
            echo(" <h1 style='color:green;'> your account in Done </h1> ");
           }
           else
           {
            echo(" <h1 style='color:green;'> Error!please try again </h1> ");
           }
        }

        







?>