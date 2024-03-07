<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $fullname = $_POST["fullname"];
        $businessname = $_POST["businessname"];
        $businesstype = $_POST["businesstype"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $budgetmoney = $_POST["budgetmoney"];
        $budgettime = $_POST["budgettime"];
        $targetedarea = $_POST["targetedarea"];
        $message = $_POST["message"];

        $receiver_email = "gankoris@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Full Name: $fullname\n```php
<?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $fullname = $_POST["fullname"];
        $businessname = $_POST["businessname"];
        $businesstype = $_POST["businesstype"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        $budgetmoney = $_POST["budgetmoney"];
        $budgettime = $_POST["budgettime"];
        $targetedarea = $_POST["targetedarea"];
        $message = $_POST["message"];

        $receiver_email = "gankoris@gmail.com";
        $subject = "New Contact Form Submission";
        $body = "Full Name: $fullname\nBusiness Name: $businessname\nBusiness Type: $businesstype\nEmail: $email\nPhone Number: $phone\nBudget Money: $budgetmoney\nBudget Time/Period: $budgettime\nTargeted Area: $targetedarea\n\nMessage: $message";

        // Send email
        mail($receiver_email, $subject, $body);

        // Redirect back to the contact form
        header("Location: contact-form.html");
        exit();
    }
?>