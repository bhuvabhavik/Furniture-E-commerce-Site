<?php
    include('config.php');
    // $con = mysqli_connect('localhost','root','');
    // $db = mysqli_select_db($con,'deluxfurniture');
    if(isset($_POST["sub"]))
     {
        $name=$_POST["sname"];
        $email=$_POST["semail"];
        $address=$_POST["saddress"];
        $city=$_POST["scity"];
        $contact=$_POST["scontact"];

        $sql="INSERT INTO supplier(sup_name,sup_email,sup_contact,sup_address,sup_city) VALUES ('".$name."','".$email."','".$contact."','".$address."','".$city."')";
        $res=mysqli_query($con,$sql);
        //print_r($query);
        if(isset($res))
        {

            echo "<script type='text/javascript'>alert('Supplier Details Inserted');</script>";
        }
        else
        {
            echo "<script type='text/javascript'>alert('Supplier Details Not Inserted');</script>";
        }
        
     }

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin | Add Supplier </title>
        <?php include_once 'include-css.php';?>
    </head>
     <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <?php include_once 'sidebar.php';?>
                
                <div class="right_col" role="main">
                <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Add Supplier  <small>register here</small></h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form id="add_product_form"  method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left" > 
                                    <!-- <input type="hidden" id="insert_student" name="insert_student"
                                    value="1" /> -->
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="sname">Name
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="sname"  name="sname"  class="form-control col-md-7 col-xs-12">
                                            </div>  
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pprice">Email
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="semail"  name="semail"  class="form-control col-md-7 col-xs-12">
                                            </div>  
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="saddress">Address
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea class="form-control col-md-7 col-xs-12" id="saddress" name="saddress"></textarea>
                                            </div>  
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="scity">City
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="scity"  name="scity"  class="form-control col-md-7 col-xs-12">
                                            </div>  
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="scontact">Contact 
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="scontact"  name="scontact"  class="form-control col-md-7 col-xs-12">
                                            </div>  
                                        </div>

                                         <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" id="submit_btn" name="sub" class="btn btn-primary form-control">Submit</button>
                                            </div>
                                        </div>

                                    </form>
                                                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
               <?php include('footer.php') ?>     
   </body>
</html> 