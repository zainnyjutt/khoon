<?php
include('../common/basepath.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    
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
            <h2 class="h2ab">Blood Donation</h2>
            <p class="pab">Blood donation involves voluntarily giving blood, which is used for medical purposes like transfusions. Advantages include saving lives, maintaining blood supply, health benefits for donors, screening for health issues, community support, emergency preparedness, and aiding research. It serves both scientific and humanitarian purposes by promoting public health and solidarity among donors and recipients.</p>
        </section>
        <section class="sectionab">
            <h2 class="h2ab">Becoming a Donor</h2>
            <p class="pab">To become a blood donor, individuals can visit our website and simply click on the <a href="<?php echo $bp; ?>model/become_donor.html" style="text-decoration: none; font-weight: bolder;color: #680101;">Become a Donor</a> button. This will lead them to a registration page where they can provide necessary information such as personal details, medical history, and contact information. Once registered, they may be contacted for further steps, such as scheduling a donation appointment or receiving additional information about the donation process. We strive to make the process as convenient as possible, encouraging more people to become donors and contribute to saving lives.</p>
        </section>
        <section class="sectionab">
            <h2 class="h2ab">Finding a Donor</h2>
            <p class="pab">To find a donor on our website, users can navigate to the <a href="<?php echo $bp; ?>model/find_donor.html" style="text-decoration: none; font-weight: bolder;color: #680101;">Find a Donor</a> section and input their specific requirements such as blood type, location, and any other relevant criteria. The website will then generate a list of potential donors who match the specified criteria. Users can view the profiles of these donors, which may include details such as their blood type, location, availability, and any other pertinent information. They can then reach out to potential donors directly through the website to initiate the donation process. Our platform aims to facilitate connections between those in need of blood and willing donors, making it easier to find suitable matches and ultimately save lives.</p>
        </section>
        <section class="sectionab">
            <h2 class="h2ab">Our Mission</h2>
            <p class="pab">At Khoon.com, our mission is simple yet profound: to save lives through the power of blood donation. We strive to create a community where every individual recognizes the importance of donating blood and where those in need can readily find the support they require.</p>
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
