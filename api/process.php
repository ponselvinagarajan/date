<?php
// PHP code to handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email from the POST data
    $email = $_POST['email'];

    // Here, you can add code to send the email or save it to a database, etc.
    // For now, let's just display the submitted email.
    echo "<div class='alert alert-success mt-3'>Email submitted successfully: " . htmlspecialchars($email) . "</div>";
}
?>