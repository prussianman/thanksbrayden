<?php
    session_start();
    require_once "common.php";
    $dao = new InterviewDAO();

    $result = $dao->createBooking($_SESSION["id"], $_POST['interviewer_id'], $_POST['radio_timeslot']);

    header("Location: ../../guugle-main/guugle/main_page/profile.php");

    // Add error message here if booking already exists
    return $result;
?>