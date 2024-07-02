<?php
include('../common/basepath.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="<?php echo $bp; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $bp; ?>css/contact_us.css">
    <link rel="icon" href="<?php echo $bp; ?>assets/blooddrop.jpg">
</head>

<body>
<?php
include('../common/navbar.php')
?>

    <div class="containerc">
        <h2 class="h2c">Contact Us</h2>
        <form id="contact-form" onsubmit="sendEmail(event)">
            <div class="form-groupc">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-groupc">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-groupc">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <div class="form-groupc">
                <button type="submit" class="btnc">Submit</button>
            </div>
        </form>
    </div>

    <?php
include('../common/footer.php')
?>

    <script src="<?php echo $bp; ?>js/bootstrap.js"></script>
    <script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <script type="text/javascript">
        (function() {
            emailjs.init("46ztUtbIj0Lhcdrtw"); // Replace with your EmailJS user ID
        })();

        function sendEmail(event) {
            event.preventDefault(); // Prevent the default form submission

            var serviceID = 'service_lkc64ay'; // Your EmailJS service ID
            var templateID = 'template_4ncp9of'; // Your EmailJS template ID

            var templateParams = {
                name: document.getElementById('name').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value
            };

            emailjs.send(serviceID, templateID, templateParams)
                .then(function(response) {
                    console.log('SUCCESS!', response.status, response.text);
                    alert('Your message has been sent!');
                    document.getElementById('contact-form').reset(); // Clear the form fields
                }, function(error) {
                    console.log('FAILED...', error);
                    alert('Failed to send the message. Please try again later.');
                });
        }
    </script>
</body>

</html>
