<?php
include('../common/basepath.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    
    <link rel="stylesheet" href="<?php echo $bp; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $bp; ?>css/about_us.css">
    <link rel="icon" href="<?php echo $bp; ?>assets/blooddrop.jpg">
</head>
<body>
    <?php
  include('../common/navbar.php')
  ?>
    <div class="containerab">
        <section class="sectionab">
            <h2 class="h2ab">Our Mission</h2>
            <p class="pab">At Khoon.com, our mission is simple yet profound: to save lives through the power of blood donation. We strive to create a community where every individual recognizes the importance of donating blood and where those in need can readily find the support they require.</p>
        </section>
        <section class="sectionab">
            <h2 class="h2ab">What Drives Us</h2>
            <p class="pab">Inspired by a personal commitment to making a difference, <strong>Muhammad Zain Iftikhar</strong> embarked on a journey to establish Khoon.com. Having witnessed the challenges faced by patients and their families in accessing blood donations, he envisioned a platform that would streamline the process, making it easier for donors to contribute and for recipients to receive the help they desperately need.</p>
        </section>
        <section class="sectionab">
            <h2 class="h2ab">Our Commitment</h2>
            <p class="pab">At Khoon.com, we are committed to upholding the highest standards of transparency, efficiency, and compassion. We understand the critical nature of our work and the profound impact it can have on individuals and communities. That's why we continuously strive to improve our services, leveraging technology to connect donors with those in need seamlessly.</p>
        </section>
        <section class="sectionab">
            <h2 class="h2ab">Join Us in Our Mission</h2>
            <p class="pab">Whether you're a potential donor, a recipient, or simply someone who believes in our cause, there are many ways to get involved with Khoon.com. Explore our website to learn more about blood donation, find upcoming donation drives, or register as a donor yourself. Together, we can make a difference, one donation at a time.</p>
        </section>
        <section class="sectionab">
            <h2 class="h2ab">Contact Us</h2>
            <p class="pab">Have questions, feedback, or just want to say hello? We'd love to hear from you! Feel free to reach out to us at <a href="<?php echo $bp; ?>model/contact_us.html" style="text-decoration: none; font-weight: bolder;color: #680101;">Contact Us</a> or through our social media channels.</p>
        </section>
    </div>

    <?php
  include('../common/footer.php')
  ?>
    <script src="<?php echo $bp; ?>js/bootstrap.js"></script>
</body>
</html>
