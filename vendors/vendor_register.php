<?php 
session_start();
error_reporting(0);

include('includes/dbconnection.php');
if(isset($_POST['submit']))
  {
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $mobno=$_POST['mobilenumber'];
    $gender=$_POST['gender'];
    $addr=$_POST['address'];
    $pincode=$_POST['pincode'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $district=$_POST['district'];
    $password=md5($_POST['password']);

    $imgs=$_FILES["vimages"]["name"];
    $extension = substr($imgs,strlen($imgs)-4,strlen($imgs));
    $allowed_extensions = array(".jpg","jpeg",".png",".gif");

if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Featured image has Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{

$vimages=md5($imgs).time().$extension;
 move_uploaded_file($_FILES["vimages"]["tmp_name"],"images/".$vimages);
    $ret=mysqli_query($con, "select Email from tblvendor where Email='$email' || MobileNumber='$mobno'");
    $result=mysqli_fetch_array($ret);
    if($result>0){
$msg="This email or Contact Number already associated with another account";
    }
    else{
    $query=mysqli_query($con, "insert into tblvendor(FullName,Email,MobileNumber,Gender,Address,Pincode,City,State,District,Images,Password) value('$fullname','$email','$mobno','$gender','$addr','$pincode','$city','$state','$district','$vimages','$password')");
    if ($query) {
    $msg="You have successfully registered";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }
}
}
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="header.css">
    <link rel="stylesheet" type="text/css" href="footer.css">
    <link rel="stylesheet" type="text/css" href="custlogin.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" type="text/css" href="custlogin2.css">
    <link rel="stylesheet" type="text/css" href="custlogin3.css">
</head>
<body topmargin = 0 leftmargin = 0>
    <div class="header">
    <img class="logo" src="a430e409239fe7d460e7dcad29afd43e.png">
    <a href="../index.php" style="font-family: cursive;font-size: 50px;font-weight: bold;color: white;position: absolute;left: 20px;top: 40px;text-decoration: none;">Krishan Bazar</a>
  </div>
  <div style="position: absolute;top: 200px;width: 100%;">
    <span style="position: absolute;top: -30px;left: 41%;font-size: 40px;font-family: cursive;font-weight: bold;">New Account</span>
    <form  action="" name="signup" method="post" onsubmit="return checkpass();" enctype="multipart/form-data">
    <p style="font-size:16px; color:red" align="center"> <?php if($msg){
    echo $msg;
  }  ?> </p>
                        
                            
    <div>
        <input style="position: absolute;top: 100px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="fullname" id="fullname" placeholder="Full Name" required="true" autocomplete="off">
    </div>

                             
                            
    <div>
        <input style="position: absolute;top: 200px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="compname" id="compname" placeholder="Company Name" required="true" autocomplete="off">
    </div>
   
   

                               
<input style="position: absolute;top: 270px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="email" name="email" id="email" placeholder="Enter your email" required="true" autocomplete="off">
                               
                           <div>
                                    <input style="position: absolute;top: 350px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="mobilenumber" required="true" placeholder="Enter Your Mobile Number" maxlength="10" pattern="[0-9]+"  autocomplete="off">
                                </div>
                          

                            <div>
                                
                                    <input style="position: absolute;top: 420px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="vnid" required="true" placeholder="Enter Vendor ID"autocomplete="off">
                                </div>
                            
    <div style="position: absolute;top: 485px;left: 40%;">
              <label style="color: grey;font-family: cursive;font-size: 23px;">Gender: </label>
              <input type="radio" name="gender" id="gender" value="Female"><strong style="color: grey">Female</strong>
              <label>
              <input type="radio" name="gender" id="gender" value="Male"><strong style="color: grey">Male</strong>
              </label>
             
            </div>

                            
                                <div>
                                    <input style="position: absolute;top: 700px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="address" required="true"
                                           placeholder="Enter your Address" autocomplete="off">
                                </div>
                            </div>
                            
                                <div>
                                    <input style="position: absolute;top: 800px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="pincode" required="true" 
                                           placeholder="Enter the Pincode" autocomplete="off">
                                </div>
                            

                            
                                <div>
                                    <input style="position: absolute;top: 900px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="city" required="true"
                                           placeholder="Enter your City" autocomplete="off">
                              
                            </div>
                           
                                <div>
                                    <input style="position: absolute;top: 1000px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="state" required="true" class="form-control form-control-lg no-b"
                                           placeholder="Enter your State" autocomplete="off">
                                </div>
                           
                           

                            
                                <div>
                                    <input style="position: absolute;top: 1100px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="text" name="district" required="true"
                                           placeholder="Enter your District" autocomplete="off">
                                </div>
                            

                        
                          
                            
                             
                                <div>
                                    <input style="position: absolute;top: 1200px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="file" name="vimages" required="true" title="Images" autocomplete="off">
                                </div>
                            
                           
                                <div>
                                    <input style="position: absolute;top: 1300px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" name="password" required="true" 
                                           placeholder="Enter your Password" autocomplete="off">
                                </div>
                            
                            
                                <div>
                                    <input style="position: absolute;top: 1400px;left: 30%;border: solid silver;border-radius: 5px;font-family: cursive;color: grey;font-size: 20px;box-sizing: border-box;width: 40%;height: 50px;" type="password" name="password" required="true" 
                                           placeholder="Re-enter your Password" autocomplete="off">
                                </div>
                             
                           
                           
                           
                            <button style="position: absolute;top: 1550px;left: 30%;" class="fill" type="submit" name="submit" value="Register">Create Account</button>
            <p>
    <a class="accountcr" style="position: absolute;top: 1550px;left: 48%;" href="login.php"> Already Have an Account ? </a></p>
                                <p><a href="../index.php"> Back to Home!!</a></p>
                            </div>
                        </div>
                    </form>
                     <!--footer starts here-->
  <footer class="footer-distributed" style="position: absolute;top: 1700px;">
 
      <div class="footer-left">
          <img src="a430e409239fe7d460e7dcad29afd43e.png">
        <h3>About<span>KRISHAN BAZAR</span></h3>
 
        <p class="footer-links">
          <a href="../index.php">Home</a>
          |
          <a href="#">Farmer</a>
          |
          <a href="#">Vendor </a>
          |
          <a href="#">Contact</a>
        </p>
 
        <p class="footer-company-name">?? 2019 Krishan bazar limited</p>
      </div>
 
      <div class="footer-center">
        <div>
          <a class="marker" href=""><i class="fa fa-map-marker"></i></a>
            <p><span>309 - Rupa Solitaire,
             Bldg. No. A - 1, Sector - 1</span>
            Mahape, Navi Mumbai - 400710</p>
        </div>
 
        <div>
          <i class="fa fa-phone"></i>
          <p>add phone number</p>
        </div>
        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="#">support@krishanbazar.com</a></p>
        </div>
      </div>
      <div class="footer-right">
        <p class="footer-company-about">
          <span>About the company</span>
          With more than 125 years of successful business, we have a lot to tell. Learn more about ours history, discover the role we play in sustainable transport and read all our news.</p>
        <div class="footer-icons">
          <a class="facebook" href="https://www.facebook.com/campaign/landing.php?campaign_id=1653993517&extra_1=s%7Cc%7C318504235901%7Ce%7Cfacebook%20%27%7C&placement=&creative=318504235901&keyword=facebook%20%27&partner_id=googlesem&extra_2=campaignid%3D1653993517%26adgroupid%3D63066387003%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%26device%3Dc%26devicemodel%3D%26adposition%3D1t1%26target%3D%26targetid%3Dkwd-360705453827%26loc_physical_ms%3D9040190%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=CjwKCAiA98TxBRBtEiwAVRLqu44a2Kavp8vnsMkQMHOmFEkUHSwMrZRWF_B1_4LsmBW2fK96wd-gJBoCCOkQAvD_BwE"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
          <a class="instagram" href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          <a class="youtube" href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
        </div>
      </div>
    </footer>
               
</body>
</html>
