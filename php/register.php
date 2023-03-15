     <?php 
     $username = $_POST['username'];
     if(empty($username)){
         echo "Name is required";
     }
     else{
         $email = $_POST['email'];
         if(empty($email)){
             echo "Email is required";
         }
         else{
             $contact = $_POST['contact'];
             if(empty($contact)){
                 echo "contact is required";
             }
             else{
              $college = $_POST['college'];
              if(empty($college)){
                  echo "college is required";
              }
              else{
                $category = $_POST['category'];
                if(empty($category)){
                    echo "category is required";
                }
             else{
                 $feedback = $_POST['feedback'];
                 $db = mysqli_connect("localhost","root","","makeindiaproud");
                 $sql = mysqli_query($db,"INSERT INTO `register`(`username`, `email`, `college`,`contact`,`category`,`feedback`) VALUES ('$username','$email','$college','$contact', '$category','$feedback')");
                 if($sql){
                     echo "success";
                 } 
                 else{
                     echo "error";
                 }
             }
         }
     }
    }
  }

    //       if($_POST['username'] == '' OR $_POST['email'] == '' OR $_POST['contact'] == '' OR $_POST['college'] == '' OR $_POST['category'] == '') {
    //         echo "some inputs are empty";
            
    //       } else {
    
    //         $email = $_POST['email'];
    //         $username = $_POST['username'];
    //         $college = $_POST['college'];
    //         $cotact = $_POST['contact'];
    //         $category = $_POST['category'];
    //         $feedback = $_POST['feedback'];
    
    //         $insert = $conn->prepare("INSERT INTO users (username, email, college, contact, category, feedback) 
    //          VALUES (:username, :email, :college, :contact, :category, :feedback)");
    
    //          $insert->execute([
    //           ':username' => $username,
    //           ':email' => $email,
    //           ':college' => $college,
    //           ':contact' => $contact,
    //           ':category' => $category,
    //           ':feedback' => $feedback,
    //          ]);
    
    //       }
    //     }
    
    
    //  ?>


