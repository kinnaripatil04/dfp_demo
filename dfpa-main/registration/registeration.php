<?php
$rfirstn=filter_input(INPUT_POST,'rfirst_name');
$rlastn=filter_input(INPUT_POST,'rlast_name');
$remail=filter_input(INPUT_POST,'remail');
$rphone=filter_input(INPUT_POST,'rphone');
$rp1name=filter_input(INPUT_POST,'rp1name');
$rp2name=filter_input(INPUT_POST,'rp2name');
$rp1g=filter_input(INPUT_POST,'rp1g');
$rp2g=filter_input(INPUT_POST,'rp2g');
$rp1dob=filter_input(INPUT_POST,'rp1dob');
$rp2dob=filter_input(INPUT_POST,'rp2dob');
$rp1pin=filter_input(INPUT_POST,'rp1pin');
$rp2pin=filter_input(INPUT_POST,'rp2pin');
$rp1add=filter_input(INPUT_POST,'rp1add');
$rp2add=filter_input(INPUT_POST,'rp2add');
if(!empty($rfirstn)){
    if(!empty($rlastn)){
        if(!empty($remail)){
            if(!empty($rphone)){
                if(!empty($rp1name)){
                    if(!empty($rp1g)){
                        if(!empty($rp1dob)){
                            if(!empty($rp1pin)){
                                if(!empty($rp1add)){
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
                                        $sql = "INSERT INTO register (r_firstname, r_lastname, r_email, r_phone, r_p1name, r_p2name, r_p1gender, r_p2gender, r_p1dob, r_p2dob, r_p1pincode, r_p2pincode, r_p1address, r_p2address)
                                        values ('$rfirstn','$rlastn','$remail','$rphone','$rp1name', '$rp2name', '$rp1g', '$rp2g', '$rp1dob', '$rp2dob', '$rp1pin', '$rp2pin', '$rp1add', '$rp2add')";
                                        if ($conn->query($sql)){
                                        header("Location: payment.php");
                                        }
                                        else{
                                        echo "There was an error, send the message again!". $sql ."<br>". $conn->error;
                                        }
                                        $conn->close();
                                    }
                                }
                                else{
                                    echo "Parent 1 address cant be empty!";
                                    die();
                                }
                            }
                            else{
                                echo "Parent 1 pincode cant be empty!";
                                die();
                            }
                        }
                        else{
                            echo "Parent 1 DOB cant be empty!";
                            die();
                        }
                    }
                    else{
                        echo "Parent 1 gender cant be empty!";
                        die();
                    }
                }
                else{
                    echo "Parent 1 name cant be empty!";
                    die();
                }
            }
            else{
                echo "Registerers contact no cant be empty!";
                die();
            }
        }
        else{
            echo "Registerers email cant be empty!";
            die();
        }
    }
    else{
        echo "Registerers last name cant be empty!";
        die();
    }
}
else{
    echo "Registerers first name cant be empty!";
    die();
}