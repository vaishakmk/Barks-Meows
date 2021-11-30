<?php
            ob_start();
            session_start();
            
            
            extract( $_POST );
            $USERNAME = $_POST["USERNAME"];
            $PASSWORD = $_POST["PASSWORD"];
            $filename="password.txt";
         
            
            // check if user has left USERNAME or PASSWORD field blank
         if ( isset( $LOGIN ) ) {
            

               // if a new user is not being added, open file
               // for reading
               if ( !( $file = fopen( $filename,"r" ) ) ) {  
                  print("3");                      
                  print( "<title>Error</title></head>
                     <body>Could not open password file
                     </body></html>" );
                  die();
               }
               $userVerified = 0;
             
   
               // read each line in file and check username
               // and password
               while ( !feof( $file ) && !$userVerified ) {
                 
   
                  // read line from file
                  $line = fgets( $file, 255 );
                  
        
                  // remove newline character from end of line
                  $line = chop( $line );
                 
                  
   
                  // split username and password
                  $field = explode( ",", $line, 2 );
                  
                  // verify username
                  if ( $USERNAME == $field[ 0 ] ) {
                     $userVerified = 1;
      
                     // call function checkPassword to verify
                     // user’s password
                     if ( checkPassword( $PASSWORD, $field ) 
                        == true ){
                        accessGranted( $USERNAME );
                        }
                     else   {
                        wrongPassword();
                        
                     }
                  }
                  
               }
      
               // close text file
               fclose( $file );
      
               // call function accessDenied if username has 
               // not been verified
               if ( !$userVerified )
                 accessDenied();
            }
   
             // verify user password and return a boolean
            function checkPassword( $userpassword, $filedata )
            {
               if ( $userpassword == $filedata[ 1 ] )
                  return true;
               else
                  return false;
            }
   
           
  
            // print a message indicating permission 
            // has been granted
           function accessGranted( $name )
           {
                header('refresh:2 ; url = userlist.php'); 
                print( "<title>Thank You</title></head>
                 <body style = \"font-family: arial;
                 font-size: 1em; color: black\">
                 <strong>Permission has been 
                 granted, $name. <br />
                 Enjoy the site.\nRedirecting....</strong>" );
                 
                
           }
            // print a message indicating password is invalid
           function wrongPassword()
           {
               header('refresh:2 ; url = modal.php');
              
               print( "<title>Access Denied</title></head>
                 <body style = \"font-family: arial; 
                 font-size: 1em; color: red\">
                 <strong>You entered an invalid 
                 password.<br />Access has 
                 been denied.\nRedirecting....</strong>" );
           }
  
            // print a message indicating access has been denied
           function accessDenied()
           {
                header('refresh:2 ; url = modal.php');
              print( "<title>Access Denied</title></head>
                 <body style = \"font-family: arial; 
                 font-size: 1em; color: red\">
                 <strong>
                 You were denied access to this server.\nRedirecting....
                 <br /></strong>" );
           } 
  
            // print a message indicating that fields 
            // have been left blank
           function fieldsBlank()
           {
                header('refresh:2 ; url = modal.php');
              print( "<title>Access Denied</title></head>
                 <body style = \"font-family: arial; 
                 font-size: 1em; color: red\">
                 <strong>
                 Please fill in all form fields.\nRedirecting....
                 <br /></strong>" );
           } 
        ?>