<?php
session_start();
// Restrict assess to users not signed in by redirecting them to login page
include '../includes/restrict_access.php';

// Logs user out after 1hr of inactivity
include '../includes/session_tracking.php';

// Get booking number
$booking_no = $_SESSION['booking']['bookingno'];

// Db connect
require_once "../data/DatabaseConnector.php";
$conn = new DatabaseConnector();
$conn = $conn->getConnection();

include '../includes/header.php';
?>

<!-- Booking success confirmation container -->
<div class="container">
    <h3 class="pb-4 my-4 fst-italic border-bottom">Your booking was successful.</h3>
    <div class="bg-light p-5 rounded-2 text-center">
        <h3 class="text-muted">Thank you for booking with StayHere.com</h3>

        <!-- Echo booking no. / order number -->
        <h5 class="lead mt-4">Your order number is: <b>"<?php echo $booking_no; ?>"</b></h5>
        <div class="d-flex justify-content-center mt-4">
            <div class="d-grid gap-2 col" style="max-width:475px">
                
            <!-- View Bookings button -->
                <button class="btn btn-primary"><a style="color: #fff; text-decoration: none;" href="../pages/bookings.php">View booking</a></button>
             
                <!-- Download Invoice button -->
                <button class="btn btn-outline-primary" id="download-button">Download Invoice</button>
             
                <!-- Done button -back to hotel page-->
                <button class="btn btn-success px-5"><a style="color: #fff; text-decoration: none;" href="../pages/hotel.php">Done</a></button>
            </div>
        </div>
    </div>
</div>

<!-- Event listener to download invoice -->
<script>
    document.getElementById("download-button").addEventListener("click", function() {
        window.location.href = "../pages/confirm_booking.php?download=true";
    });
</script>
<?php
include '../includes/footer.php';
?>