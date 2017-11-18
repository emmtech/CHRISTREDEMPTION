<?php include ('dbconnect.php'); ?>
 <?php
                    $nameErr = $emailErr = $subErr = $descErr ="";
                    if(isset($_POST['submit'])){
                        $fullname = $_POST['fullname'];
                        $email = $_POST['email'];
                        $subject = $_POST['subject'];
                        $desc = $_POST['desc'];
                        
                       if(!empty($fullname) && !empty($email) && !empty($subject) && !empty($desc)){
                           $sql = "INSERT INTO `contact` VALUES(null, '".test_input($fullname)."', '".test_input($email)."', '".test_input($subject)."','".test_input($desc)."')";
                           if($query = mysqli_query($dbconn, $sql)){
                               //header('Location: data-verification.php');
                              /* echo "<script>
                                       alert('Thank you for contacting us...')
                                    </script>";*/
									echo'<div class="alert-success">
										Thank you for contacting us.<br> Your message has been received!
									</div>';
                           }else{
                               echo "There is problem processing your request, please try again later";
                           }
                       }else 
                           if(empty($salute)){
                           $nameErr = "Your name is required";
                       }if(empty($email)){
                           $emailErr = "Your email is required";
                       }if(empty($subject)){
                           $subErr = "The subject of your message is required";
                       }if(empty($desc)){
                           $descErr = "Your description box cannot be empty";
                       }
                    }
                    
                    function test_input($data){
                        $data = trim($data);
                        $data = stripcslashes($data);
                        $data = htmlentities($data);
                        
                        return $data;
                    }
                    ?>