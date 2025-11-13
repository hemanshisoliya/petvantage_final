<?php
include 'db_connect.php';

$id = $_POST['deleteId'];

// Delete query
$sql = "DELETE FROM appointments WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "<script>
        alert('Your appointment has been cancelled successfully!');
        window.location.href = 'service.php';
    </script>";
} else {
    echo "<script>
        alert('Error while cancelling appointment!');
        window.location.href = 'service.php';
    </script>";
}

mysqli_close($conn);
?>