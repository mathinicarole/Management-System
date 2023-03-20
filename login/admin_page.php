<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Admin page</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- custom css file link -->
  <link rel="stylesheet" href="../assets/css/admin_style.css">
  <link rel="shortcut icon" type="image/jpg" href="/ALPHA TECH/Images/logo-small.ico" />
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
  <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
  <link rel="stylesheet" href="path/to/line-awesome/css/line-awesome-font-awesome.min.css">

</head>

<body>

  <body>
    <div class="sidebar">

      <div class="sidebar-brand">

        <h2> <span class="lab la-accusoft"></span>ALPHA tech Employee</h2>

      </div>
      <div class="sidebar-menu">
        <ul>
          <li>
            <a href="../view/admin/dashboard.php"><span class="las la-igloo"></span>
              <span>Dashboard</span></a>
          </li>
          <li>
            <a href="../view/admin/employee.php" class="active"><span class="las la-user"></span>
              <span>Employee</span></a>
          </li>
          <li>
            <a href="../view/admin/attendance.php"><span class="las la-gift"></span>
              <span>Attendance</span></a>
          </li>

          <li>
            <a href="../view/admin/department.php"><span class="las la-info-circle"></span>
              <span>Department</span></a>
          </li>
          <li>
            <a href="../view/admin/leave.php"><span class="las la-address-book"></span>
              <span>Leave</span></a>
          </li>
          <li>
            <a href="../view/admin/payroll.php"><span class="las la-comment-dots"></span>
              <span>Payroll</span></a>

          </li>
          <li>
            <a href="../view/admin/holiday.php"><span class="las la-sign-out-alt"></span>
              <span>Holiday</span></a>
          </li>
          <li>
            <a href="../view/admin/payheads.php"><span class="las la-receipt"></span>
              <span>Payheads</span></a>
          </li>

          <li>
            <a href="../view/admin/settings.php"><span class="las la-cog"></span>
              <span>Settings</span></a>
          </li>

          <div class="close">
            <?php

            ?>

            <a href="logout.php"><span class="las la-toggle-off">Logout</a>
          </div>

      </div>


    </div>
    </div>



  </body>
</body>

</html>