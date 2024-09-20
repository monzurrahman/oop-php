<?php
class ContactForm
{
    private $name;
    private $email;
    private $subject;
    private $message;
    private $referrer;
    private $allowedDomain = "https://yourdomain.com"; // Replace with your domain

    public function __construct($formData, $referrer)
    {
        $this->name = htmlspecialchars($formData['name']);
        $this->email = htmlspecialchars($formData['email']);
        $this->subject = htmlspecialchars($formData['subject']);
        $this->message = htmlspecialchars($formData['message']);
        $this->referrer = $referrer;
    }

    // Validate referrer
    private function isValidReferrer()
    {
        return strpos($this->referrer, $this->allowedDomain) === 0;
    }

    // Send email
    public function sendEmail()
    {
        if ($this->isValidReferrer()) {
            $to = "recipient@example.com"; // Replace with your email address
            $headers = "From: " . $this->email . "\r\n";
            $headers .= "Reply-To: " . $this->email . "\r\n";
            $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
            $emailSubject = "New Message from: " . $this->name . " - " . $this->subject;

            $emailBody = "
                <html>
                <head>
                <title>{$this->subject}</title>
                </head>
                <body>
                <h2>Message from {$this->name}</h2>
                <p><strong>Email:</strong> {$this->email}</p>
                <p><strong>Subject:</strong> {$this->subject}</p>
                <p><strong>Message:</strong></p>
                <p>{$this->message}</p>
                </body>
                </html>
            ";

            // Use mail function to send email
            if (mail($to, $emailSubject, $emailBody, $headers)) {
                return "Email sent successfully!";
            } else {
                return "Failed to send email.";
            }
        } else {
            return "Invalid request source.";
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $referrer = $_SERVER['HTTP_REFERER'];
    $contactForm = new ContactForm($_POST, $referrer);
    echo $contactForm->sendEmail();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
</head>
<body>
    <h2>Contact Us</h2>
    <form method="POST" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="subject">Subject:</label><br>
        <input type="text" id="subject" name="subject" required><br><br>

        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
