<!DOCTYPE html>

<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BU RADiO - Department Representative Hunt Registration Form</title>
   <link rel="stylesheet" href="styles.css">
   <!-- Favicon -->
   <link rel="shortcut icon" href="img/logo/favicon.ico">

   <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

   <script>
      function showHide() {
         if (document.getElementById('termscheckbox').checked) {
            document.getElementById('terms').style.display = 'none';
            document.getElementById('regform').style.display = 'block';
         } else {
            document.getElementById('regform').style.display = 'none';
         }
      }
   </script>
   <script type="text/javascript">
      function mousehandler(e) {
         var myevent = (isNS) ? e : event;
         var eventbutton = (isNS) ? myevent.which : myevent.button;
         if ((eventbutton == 2) || (eventbutton == 3)) return false;
      }
      document.oncontextmenu = mischandler;
      document.onmousedown = mousehandler;
      document.onmouseup = mousehandler;

      function disableCtrlKeyCombination(e) {
         var forbiddenKeys = new Array("a", "s", "c", "x", "u");
         var key;
         var isCtrl;
         if (window.event) {
            key = window.event.keyCode;
            //IE
            if (window.event.ctrlKey)
               isCtrl = true;
            else
               isCtrl = false;
         } else {
            key = e.which;
            //firefox
            if (e.ctrlKey)
               isCtrl = true;
            else
               isCtrl = false;
         }
         if (isCtrl) {
            for (i = 0; i < forbiddenKeys.length; i++) {
               //case-insensitive comparation
               if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
                  return false;
               }
            }
         }
         return true;
      }
   </script>
</head>

<body onload="hidder();" oncontextmenu="return false">

   <img src="top_banner2.jpg" style='width:100%;' border="0" alt="Null" />

   <form method="post" enctype="multipart/form-data">
      <div class="wrapper">

         <div class="form" id="terms">

            <div class="title">
               Terms And Conditions
            </div>

            <ol style="padding-left:20px;">
               <li>Candidate must have good quality smart phone or pc of his/her own.</li><br>
               <li>Candidate must have high speed internet facility (Broadband or celluler network).</li><br>
               <li>The candidate must have the mentality of working 6-7 hours per week.</li><br>
               <li>Candidates must have the mentality to work 7 days in a week.</li><br>
               <li>The work schedule may change at any time.</li><br>
            </ol> <br>

            <div class="inputfield terms">
               <label class="check">
                  <input type="checkbox" id="termscheckbox" onclick="showHide()" required>
                  <span class="checkmark"></span>
               </label>
               <p>I Agreed to <a href="#">terms and conditions</a> of <a href="https://buradio.org" target="_blank">BU RADiO</a></p>
            </div>
         </div>



         <div class="form" id="regform" style="display:none">

            <div class="title">
               Registration Form
            </div>

            <div class="inputfield">
               <label>Application Title:</label>
            </div>
            <div class="inputfield">
               <input type="text" name="fullname" class="input" value="Department Representative" readonly>
            </div>

            <div class="inputfield">
               <label>Full Name (Capital Letter)<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="text" name="fullname" class="input" required>
            </div>

            <div class="inputfield">
               <label>Nick Name<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="text" name="nickname" class="input" required>
            </div>

            <div class="inputfield">
               <label>Date of Birth<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="date" name="dob" class="input" required>
            </div>

            <div class="inputfield">
               <label>Gender<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <div class="custom_select">
                  <select name="gender" required>
                     <option value="">Select</option>
                     <option value="Male">Male</option>
                     <option value="Female">Female</option>
                     <option value="Other">Other</option>
                  </select>
               </div>
            </div>

            <div class="inputfield">
               <label>Present Address<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <textarea class="textarea" name="presentaddress" required></textarea>
            </div>

            <div class="inputfield">
               <label>Permanent Address<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <textarea class="textarea" name="permanentaddress" required></textarea>
            </div>

            <div class="inputfield">
               <label>Department<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <div class="custom_select">
                  <select name="dept" required>
                     <option value="">Select</option>
                     <option value="Accounting & Information Systems">Accounting & Information Systems</option>
                     <option value="Bangla">Bangla</option>
                     <option value="Boichemistry & Biotechnology">Boichemistry & Biotechnology</option>
                     <option value="Botany">Botany</option>
                     <option value="Chemistry">Chemistry</option>
                     <option value="Coastal Studies & Disaster Management">Coastal Studies & Disaster Management</option>
                     <option value="Computer Science & Engineering">Computer Science & Engineering</option>
                     <option value="Economics">Economics</option>
                     <option value="English">English</option>
                     <option value="Finance & Banking">Finance & Banking</option>
                     <option value="Geology & Mining">Geology & Mining</option>
                     <option value="History & Civilization">History & Civilization</option>
                     <option value="Law">Law</option>
                     <option value="Management Studies">Management Studies</option>
                     <option value="Marketing">Marketing</option>
                     <option value="Mass Communication & Journalism">Mass Communication & Journalism</option>
                     <option value="Mathematics">Mathematics</option>
                     <option value="Philosophy">Philosophy</option>
                     <option value="Physics">Physics</option>
                     <option value="Political Science">Political Science</option>
                     <option value="Public Administration">Public Administration</option>
                     <option value="Sociology">Sociology</option>
                     <option value="Soil & Environmental Sciences">Soil & Environmental Sciences</option>
                     <option value="Statistics">Statistics</option>
                  </select>
               </div>
            </div>

            <div class="inputfield">
               <label>Session<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <div class="custom_select">
                  <select name="session" required>
                     <option value="">Select</option>
                     <option value="2017-2018">2017-2018</option>
                     <option value="2018-2019">2018-2019</option>
                     <option value="2019-2020">2019-2020</option>
                  </select>
               </div>
            </div>

            <div class="inputfield">
               <label>Email Address<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="email" name="email" class="input" required>
            </div>

            <div class="inputfield">
               <label>Contact Number<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="phone" name="phone" value="+880" class="input" required>
            </div>

            <div class="inputfield">
               <label>Facebook Profile<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="text" name="fbprofile" value="https://www.facebook.com/" class="input" required>
            </div>

            <div class="inputfield">
               <label>Your Extra Curriculum Activities (Mention N/A if you don't have)<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="text" name="eca" class="input" required>
            </div>

            <div class="inputfield">
               <label>Why do you want to join in BU RADiO?<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="text" name="personalopinion" class="input" required>
            </div>

            <div class="inputfield">
               <label>Can you make friend easily?<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <div class="custom_select">
                  <select name="opinionaboutfriendmaking" required>
                     <option value="">Select</option>
                     <option value="Agree">Agree</option>
                     <option value="Strongly Agree">Strongly Agree</option>
                     <option value="Neither agree or disagree">Neither agree or disagree</option>
                     <option value="Disagree">Disagree</option>
                  </select>
               </div>
            </div>

            <div class="inputfield">
               <label>BU RADiO will not give you any salary, what is your opinion regarding this?<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <input type="text" name="opinionaboutradio" class="input" required>
            </div>

            <div class="inputfield">
               <label>Do you have your own PC/Laptop?<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <div class="custom_select">
                  <select name="pc" required>
                     <option value="">Select</option>
                     <option value="Yes">Yes</option>
                     <option value="No">No</option>
                  </select>
               </div>
            </div>

            <div class="inputfield">
               <label>What is your internet connection type?<a style="color:red"> *</a></label>
            </div>
            <div class="inputfield">
               <div class="custom_select">
                  <select name="internet" required>
                     <option value="">Select</option>
                     <option value="3G">3G</option>
                     <option value="4G">4G</option>
                     <option value="Broadband / WiFi">Broadband / WiFi</option>
                  </select>
               </div>
            </div>

            <!--- 
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox" id="checkbox" required>
            <span class="checkmark"></span>
          </label>
          <p>Agreed to <a href="/rjhunt/terms.php" target="_blank">terms and conditions</a></p>
       </div> --->
            <div class="inputfield" style="padding-top:20px;">
               <input type="submit" onclick="popUp()" name="submit" id="submit" value="Register" class="btn">
            </div>

            <!--- Copyright Text --->
            <div style="padding-top:50px;">
               <label>
                  <p class="copy-right">&copy; copyright 2019-2020, Developed By <a href="http://abuubaida921.com/" target="_blank">Abu Ubaida</a>, <a href="https://www.facebook.com/sharier.himu" target="_blank">Sharier Kabir</a> & Maintained By <a href="https://buradio.org/" target="_blank">BU RADiO</a></p>
               </label>
            </div>
         </div>
      </div>
   </form>

</body>

</html>

<?php
require('db.php');

if (isset($_POST["submit"])) {
   date_default_timezone_set('Asia/Dhaka');
   $timestamp = date('Y-m-d G:i:s A');
   $ip = getenv('HTTP_CLIENT_IP') ?: getenv('HTTP_X_FORWARDED_FOR') ?: getenv('HTTP_X_FORWARDED') ?: getenv('HTTP_FORWARDED_FOR') ?: getenv('HTTP_FORWARDED') ?: getenv('REMOTE_ADDR');
   // $ip = $_SERVER['REMOTE_ADDR'];
   $full_name = htmlspecialchars($_POST['fullname']);
   $nick_name = htmlspecialchars($_POST['nickname']);
   $dob = $_POST['dob'];
   $gender = $_POST['gender'];
   $present_address = htmlspecialchars($_POST['presentaddress']);
   $permanent_address = htmlspecialchars($_POST['permanentaddress']);
   $dept = $_POST['dept'];
   $session = $_POST['session'];
   $email = htmlspecialchars($_POST['email']);
   $phone = htmlspecialchars($_POST['phone']);
   $fb_profile = htmlspecialchars($_POST['fbprofile']);
   $eca = htmlspecialchars($_POST['eca']);
   $personal_opinion = htmlspecialchars($_POST['personalopinion']);
   $opinionaboutfriendmaking = $_POST['opinionaboutfriendmaking'];
   $opinionaboutradio = htmlspecialchars($_POST['opinionaboutradio']);
   $pc = $_POST['pc'];
   $internet = $_POST['internet'];

   $full_name = mysqli_real_escape_string($conn, $full_name);
   $nick_name = mysqli_real_escape_string($conn, $nick_name);
   $present_address = mysqli_real_escape_string($conn, $present_address);
   $permanent_address = mysqli_real_escape_string($conn, $permanent_address);
   $email = mysqli_real_escape_string($conn, $email);
   $phone = mysqli_real_escape_string($conn, $phone);
   $fb_profile = mysqli_real_escape_string($conn, $fb_profile);
   $eca = mysqli_real_escape_string($conn, $eca);
   $personal_opinion = mysqli_real_escape_string($conn, $personal_opinion);
   $opinionaboutradio = mysqli_real_escape_string($conn, $opinionaboutradio);

   $check = mysqli_query($conn, "select * from radio_dept_hunt_2020 where phone_number='$phone'");
   $checkrows = mysqli_num_rows($check);

   if ($checkrows > 0) {
      echo '<script>alert("Already Registered Using This Contact Number");</script>';
   } else {

      #sql query to insert into database
      $sql = "INSERT into radio_dept_hunt_2020 (time_stamp, submission_ip, apply_for, full_name, nick_name, date_of_birth, gender, present_address, permanent_address, department, session, email, phone_number, fb_profile, extra_curriculum_activities, why_do_you_want_to_join, can_you_make_friend_easily, opinion_about_radio, pc_status, broadband_status, reg_status) 
                        VALUES('$timestamp','$ip','Department Representative', '$full_name','$nick_name','$dob','$gender','$present_address','$permanent_address','$dept','$session','$email','$phone','$fb_profile','$eca','$personal_opinion','$opinionaboutfriendmaking','$opinionaboutradio','$pc','$internet','Successful')";

      if (mysqli_query($conn, $sql)) {

         echo '<script>alert("Sucessfully Submitted");</script>';
         //  echo "File Sucessfully uploaded";
      } else {
         echo '<script>alert("Unexpected Error Occured, Try after Sometime");</script>';
      }
   }
}
?>