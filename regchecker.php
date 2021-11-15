<?php
session_start();
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

<?php

header('Cache-control: no-cache, must-revalidate, max-age=0');

$_SESSION["searchfield"] = "display: none";
$_SESSION["buffiderror"] = "display: none";

require('db.php');

if (isset($_POST['mobile'])) {
    $getid = mysqli_real_escape_string($conn, $_POST['mobile']);
    $_SESSION["getid"] = $getid;

    $sqlbuffid = "SELECT * FROM radio_dept_hunt_2020 WHERE phone_number = '$getid'";
    $resultbuffid = mysqli_query($conn, $sqlbuffid) or die(mysqli_error($conn));
    $countbuffid = mysqli_num_rows($resultbuffid);


    if ($countbuffid > 0) {

        $databuffid = mysqli_fetch_array($resultbuffid, MYSQLI_ASSOC);
        unset($_SESSION["searchfield"]);

        if ($databuffid['reg_status'] == "Successful") {
            $paydue = "display: none;";
        } else {
            $paydone = "display: none;";
        }
    } else {
        unset($_SESSION["buffiderror"]);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BURADiO - Registration Checker</title>
    <link rel="shortcut icon" href="img/logo/favicon.ico">
    <style>
        html,
        body {
            margin: 0;
            background-color: #ffffff;
            font-family: Arial, Helvetica, sans-serif;
        }

        #bodycontainer {
            margin-bottom: 50px;
            max-width: 900px;
            margin: 0 auto;
            padding: 5px;
        }

        #navmenu {
            margin: 0 auto;
            margin-top: 15px;
        }

        .left {
            display: inline-block;
        }

        .right {
            float: right;
            margin-top: 10px;
        }

        .button2 {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            border: 1px solid #6f42c1;
            background-color: #6f42c1;
            padding: 10px 25px;
            color: #ffffff;
            text-decoration: none;
            height: 40px;
            cursor: pointer;
        }

        .button2:hover {
            background-color: #8158ce;
        }

        input {
            margin: 0 auto;
            border: 1px solid silver;
            height: 30px;
            max-width: 300px;
            width: 100%;
            font-size: 16px;
            color: #000;
            margin: 0 auto;
            text-align: left;
            border-radius: 7px;
            outline: none;
            padding-left: 5px;
            margin-left: 3px;
            margin-top: 3px;
            position: relative;
        }

        button {
            padding: 5px;
            background: #5a6dff;
            font-size: 14px;
            border: 1px solid #5a6dff;
            color: #fff;
            height: 34px;
            font-weight: 600;
            outline: none;
        }

        button:hover {
            cursor: pointer;
            background: #4c61ff;
        }

        .buffid {
            margin-top: 50px;
            clear: both;
            max-width: 500px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
            max-width: 750px;
            margin: 0 auto;
            font-family: Arial, Helvetica, sans-serif;
            clear: both;
        }

        table td,
        table th {
            padding: 25px 15px;
            text-align: left;
            font-size: 16px;
        }

        table tr {
            min-height: 100px;
            width: 400px;
            width: 100%;
            text-align: left;
            padding: 10px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid #ddd;
        }

        .ttitle {
            font-size: 14px;
        }

        .tvalue {
            margin-top: -10px;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 0px;
        }

        @media screen and (max-width: 600px) {

            table {
                border-collapse: collapse;
                width: 310px;
                margin: 0 auto;
            }

            table,
            table tbody,
            table tr,
            table td {
                display: block;
                text-align: left;
                padding: 0px 15px 10px 15px;
            }

        }

        .pay_due {
            background-color: red;
            padding: 3px;
            color: #ffffff;
            border-radius: 3px;
        }

        .pay_done {
            background-color: green;
            padding: 3px;
            color: #ffffff;
            border-radius: 3px;
        }

        .errormsg {
            clear: both;
            display: block;
            padding: 5px;
            font-size: 14px;
            border: 1px solid #bababa;
            color: red;
            width: 300px;
            height: 18px;
            border-radius: 7px;
            font-weight: 600;
            text-align: center;
            margin: 0 auto;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div id="bodycontainer">
        <!-- header nav bar -->
        <div id="navmenu">
            <div class="left">
                <a href="home"><img class="logo" src="img/logo/logo.png" height="50px"></a>
            </div>
            <div class="right">
                <a class="button2" href="home">HOME</a>
            </div>
        </div>
        <div style="margin: auto; max-width: 480px; text-align:center">
            <h2><u>Check Your Registration Status</u></h2>
            <div>
                <div class="buffid">
                    <form action="" method="post" enctype="form-data">
                        <label style="color: #666655; text-align: left; margin-left: 5px; font-size: 14px;">Mobile Number</label>
                        <input style="clear:both;" type="text" name="mobile" value="+880" required />
                        <button style="min-width: 120px; border-radius: 5px; margin-top: 10px; margin-left: 5px;" type="submit" name="regcheck">Check Status</button>
                    </form>
                </div>
            </div>
        </div>
        <div style="margin-top: 50px;<?php echo $_SESSION['searchfield']; ?>;">
            <table>
                <tbody>
                    <tr>
                        <td>
                            <div>
                                <p class="ttitle">Name:</p>
                                <p class="tvalue"><?php echo $databuffid['full_name'] ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="ttitle">Mobile:</p>
                                <p class="tvalue"><?php echo $databuffid['phone_number'] ?></p>
                            </div>
                        </td>
                        <td>
                            <div>
                                <p class="ttitle">Title:</p>
                                <p class="tvalue"><?php echo $databuffid['apply_for'] ?></p>
                            </div>
                        </td>
                        <td style="width: 155px;">
                            <div>
                                <p class="ttitle">Reg. Status:</p>
                                <p style="<?php echo $paydue ?>" class="tvalue pay_due">Not Complete</p>
                                <p style="<?php echo $paydone ?>" class="tvalue pay_done">Successful</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div style="<?php echo $_SESSION['buffiderror']; ?>;" class="errormsg">
            <a>Not Found!</a>
        </div>

    </div>

    <?php
    unset($_SESSION["getid"]);
    ?>
</body>

</html>