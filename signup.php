<?php
@ob_start();
session_start();
header('refresh:3 ; url = modal.php');
extract( $_POST );
$USERNAME = $_POST["USERNAME"];
$PASSWORD = $_POST["PASSWORD"];
$filename="password.txt";


// check if user has left USERNAME or PASSWORD field blank
if ( !$USERNAME || !$PASSWORD ) {
   fieldsBlank();
   die();
}


if(isset($SIGNUP)){
    
    if ( !( $file= fopen( $filename,'a+'))) {                        
   print("1");
    // print error message and terminate script 
    // execution if file cannot be opened
    print( "<title>Error</title></head><body>
      Could not open password file. Redirecting....
      </body></html>" );
    die();
    }

    // write username and password to file and 
    // call function userAdded
    userAlready($USERNAME,$PASSWORD);

    }



function userAlready($name,$pass) {

    if ( !( $file= fopen( 'password.txt','a+'))){ 
   
        print( "<title>Error</title></head>
           <body>Could not open password file. Redirecting....
           </body></html>" );
        die();
     }
     $userNamecheck = 0;
   

     // read each line in file and check username
     // and password
     while ( !feof( $file ) && !$userNamecheck ) {
       

        // read line from file
        $line = fgets( $file, 255 );
        

        // remove newline character from end of line
        $line = chop( $line );
       
        

        // split username and password
        $field = explode( ",", $line, 2 );
        
        // verify username
        if ( $name == $field[ 0 ] ) {
           $userNamecheck = 1;
           userExists($name);
         }
        }

        if ($userNamecheck==0){
            fputs( $file, "\n$name,$pass" );
            userAdded( $USERNAME );
        }
    }




        function userExists( $name ) 
        {
          print( "<title>Thank You</title></head>
             <body style = \"font-family: arial; 
             font-size: 1em; color: black\"> 
             <strong>User, $name ,already exists. Sign Up with a different username.
             <br />Enjoy the site. \nRedirecting....</strong>" );
            
       }


     
     function userAdded( $name ) 
     {
       print( "<title>Thank You</title></head>
          <body style = \"font-family: arial; 
          font-size: 1em; color: black\"> 
          <strong>You have been added 
          to the user list, $name.
          <br />Try logging in. \nRedirecting....</strong>" );
    }

    


     // print a message indicating that fields 
     // have been left blank
    function fieldsBlank()
    {
       print( "<title>Access Denied</title></head>
          <body style = \"font-family: arial; 
          font-size: 1em; color: red\">
          <strong>Please fill in all form fields.\nRedirecting....
          <br /></strong>" );
    } 
 
 ?>