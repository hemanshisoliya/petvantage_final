<?php
include 'db_connect.php';

$id = $_POST['appointmentId'];
$time = $_POST['newTimeSlot'];

$sql = "UPDATE appointments SET timeslot='$time' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Your appointment has been updated successfully!');
        window.location.href = 'service.php';
    </script>";
} else {
    echo "<script>
        alert('Error while updating appointment!');
        window.location.href = 'service.php';
    </script>";
}

mysqli_close($conn);
?>