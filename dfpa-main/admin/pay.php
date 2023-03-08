
<?php
$aname=filter_input(INPUT_POST,'a_name');
$aemail=filter_input(INPUT_POST,'a_email');
$aphone=filter_input(INPUT_POST,'a_phone');
$apayment=filter_input(INPUT_POST,'a_payment');
 if(!empty($aname)){
                        if(!empty($aemail)){
                            if(!empty($aphone)){
                                if(!empty($apayment)){
                                    $host = "localhost";
                                    $dbusername = "root";
                                    $dbpassword = "";
                                    $dbname = "dfp-project";
                                    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
                                    if(mysqli_connect_error()){
                                        die('Connect Error ('. mysqli_connect_errno() .') '
                                        . mysqli_connect_error());
                                    }
                                    else{
                                        $sql = "INSERT INTO payment ( name, email, contact, payment)
                                        values ('$aname','$aemail','$aphone','$apayment')";
                                        if ($conn->query($sql)){
                                        header("Location: newadmin.php");
                                        }
                                        else{
                                        echo "There was an error, send the message again!". $sql ."<br>". $conn->error;
                                        }
                                        $conn->close();
                                    }
                                }
                                else{
                                    echo "Payment status cannot be empty!";
                                    die();
                                }
                            }
                            else{
                                echo "Contact number cannot be empty!";
                                die();
                            }
                        }
                        else{
                            echo "email cannot be empty";
                            die();
                        }
                    }
                 else{
                            echo "Name cannot be empty";
                            die();
                        }
