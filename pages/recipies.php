<?php require_once '../config/dbConnect.php';
include_once '../includes/header.php'; ?>
<div class="container">
<?php
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>
</div>
<?php include_once '../includes/footer.php'; ?>