<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "userdb";

$conn = mysqli_connect($server,$username,$password,$dbname);


        $search = mysqli_real_escape_string($conn,$_POST['search']);

        $result = mysqli_query($conn, "SELECT * FROM posts");
        $count = 0;

        echo '<table border="2" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td><b> <font face="Arial">ID</font><b> </td> 
          <td><b> <font face="Arial">First Name</font><b> </td> 
          <td><b> <font face="Arial">Last Name</font><b> </td> 
          <td><b> <font face="Arial">Email</font><b> </td> 
          <td><b> <font face="Arial">Address</font><b> </td> 
          <td><b> <font face="Arial">Home Ph.</font><b> </td>
          <td><b> <font face="Arial">Mob. Ph.</font><b> </td>
      </tr>';

        while ($row = $result->fetch_assoc()) {
            $count =$count+1;
            $field0name = $row["id"];
            $field1name = $row["first_name"];
            $field2name = $row["last_name"];
            $field3name = $row["email"];
            $field4name = $row["address"];
            $field5name = $row["home_num"]; 
            $field6name = $row["mob_num"];
    
            echo '<tr> 
                      <td><b>'.$field0name.'<b></td>
                      <td>'.$field1name.'</td> 
                      <td>'.$field2name.'</td> 
                      <td>'.$field3name.'</td> 
                      <td>'.$field4name.'</td> 
                      <td>'.$field5name.'</td> 
                      <td>'.$field6name.'</td>
                  </tr>';
        }
        $result->free();
        if ($count==0){
            echo "<b style='color:bisque;margin-left:50px'>No Results Found</b><br><br>";
        }
        else{
            echo "<b style='color:bisque;margin-left:50px'>$count Results Found</b><br><br>";
        }

        
        mysqli_close($con);

     ?>
