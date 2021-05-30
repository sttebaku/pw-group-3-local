<?php require_once '../config/dbConnect.php';
include_once '../includes/header.php'; ?>
<div class="container"></div>
<?php include_once '../includes/footer.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>