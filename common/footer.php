
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>
    <link rel="stylesheet" href="<?php echo $bp; ?>css/bootstrap.css">
    <style>
        .footer {
            background-color: #680101;
            color: #fff;
        }
        .footer-links {
            margin-bottom: 10px;
            
        }
        .footer-links a {
            color: #fff;
            margin-right: 10px;
            text-decoration: none;
        }
        .contact-info {
            text-align: right;
        }
    </style>
</head>
<body>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <div class="footer-links">
                <a href="../index.php">Home</a>
                <a href="../model/about_us.php">About Us</a>
                <a href="../model/blogs.php">Blogs</a>
                <a href="../model/contact_us.php">Contact Us</a>
                <a href="../model/faqs.php">FAQs</a>
                <a href="../model/privacy_policy.php">Privacy Policy</a>
            </div>
            <div class="contact-info">
                <p>Contact Us:</p>
                <p>Email: info@khoon.com</p>
                <p>Phone: +92 (370) 806-2338</p>
            </div>
            <p class="text-muted text-center">Khoon | Donate Blood © 2024 </p>
        </div>
    </footer>
    <script src="<?php echo $bp; ?>js/bootstrap.js"></script>
</body>
</html>
