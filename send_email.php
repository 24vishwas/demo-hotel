<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arrival = $_POST['arrival'];
    $departure = $_POST['departure'];
    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $roomCategory = $_POST['room_category'];

    // Customer Email
    $customerSubject = "Booking Confirmation";
    $customerMessage = "Dear $firstName $lastName,\n\nThank you for booking with us!\nYour room category: $roomCategory\nArrival: $arrival\nDeparture: $departure\nMobile: $mobile\n\nWe look forward to hosting you!";
    $customerHeaders = "From: admin@hotel.com";

    // Admin Email
    $adminEmail = "vishwasjs2806@gmai.com";
    $adminSubject = "New Booking Received";
    $adminMessage = "New booking details:\n\nName: $firstName $lastName\nMobile: $mobile\nEmail: $email\nRoom: $roomCategory\nArrival: $arrival\nDeparture: $departure";
    $adminHeaders = "From: noreply@hotel.com";

    // Sending Emails
    if (mail($email, $customerSubject, $customerMessage, $customerHeaders) &&
        mail($adminEmail, $adminSubject, $adminMessage, $adminHeaders)) {
        echo "Booking confirmed and emails sent!";
    } else {
        echo "Error sending emails.";
    }
}
?>
