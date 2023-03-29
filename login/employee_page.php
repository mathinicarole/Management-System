<?php
session_start();


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Page</title>
  <link rel="stylesheet" href="../assets/css/employee_style.css">

  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="shortcut icon" type="image/jpg" href="/ALPHA TECH/Images/logo-small.ico" />
  <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">
</head>

<body>

  <div class="sidebar">

    <div class="sidebar-brand">

      <h2> <span class="lab la-accusoft"></span>ALPHA tech Employee</h2>

    </div>
    <div class="sidebar-menu">
      <ul>
        <li>
          <a href="../view/employee/dashboard.php"><span class="las la-igloo"></span>
            <span>Dashboard</span></a>
        </li>
        <li>
          <a href="../view/employee/profile.php" class="active"><span class="las la-user"></span>
            <span>Profile</span></a>
        </li>
        <li>
          <a href="../view/employee/details.php"><span class="las la-info-circle"></span>
            <span>Details</span></a>
        </li>
        <li>
          <a href="../view/employee/attendance.php"><span class="las la-address-book"></span>
            <span>Attendance</span></a>
        </li>
        <li>
          <a href="../view/employee/message.php"><span class="las la-comment-dots"></span>
            <span>Messages</span></a>
          <span class="message-count">22</span>
        </li>
        <li>
          <a href="../view/employee/leave.php"><span class="las la-sign-out-alt"></span>
            <span>Leave</span></a>
        </li>
        <li>
          <a href="../view/employee/salary_slips.php"><span class="las la-receipt"></span>
            <span>Salary slips</span></a>
        </li>
        <li>
          <a href="../view/employee/holiday.php"><span class="las la-gift"></span>
            <span>Holiday</span></a>
        </li>

        <li>
          <a href="../view/employee/settings.php"><span class="las la-cog"></span>
            <span>Settings</span></a>
        </li>

        <div class="close">
          <?php

          ?>

          <a href="logout.php"><span class="las la-toggle-off">Logout</a>
        </div>
      </ul>
      
    </div>
    
  </div>
  <section id="interface">
      <div class="navigation">
        <div class="n1">
          <div class="search">
          <i class="las la-search"></i>
            <input type="text" placeholder="Search">
          </div>
        </div>
        <div class="profile">
        <i class="las la-bell"></i>
        <img src="/ALPHA_TECH/images/profile.webp" alt="" height="50px" width="100px">
        </div>
      </div>
      <h3 class="i-name">Dashboard</h3>
      <div class="val-box">
        <i class="fas fa-users"></i>
        <div>
          <h3>56789</h3>
          <span>tcfgvyh</span>
        </div>
      </div>
    </section>
 

</body>

</html>