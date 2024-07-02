<?php
include('../common/basepath.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a Blood Donor</title>
    <link rel="stylesheet" href="<?php echo $bp; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $bp; ?>css/become_donor.css">
    <link rel="icon" href="<?php echo $bp; ?>assets/blooddrop.jpg">
</head>
<body>
<?php
include('../common/navbar.php')
?>
    <div class="containerd">
        <h2 class="h2d">Become a Blood Donor</h2>
        <form action="<?php echo $bp; ?>controller/become_donor.php" method="POST">
            <div class="form-groupd">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-groupd">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-groupd">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <div class="form-groupd">
                <label for="cnic">CNIC:</label>
                <input type="text" id="cnic" name="cnic" required>
            </div>
            <div class="form-groupd">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
            </div>
            <div class="form-groupd">
                <label for="blood-group">Blood Group:</label>
                <select id="blood-group" name="blood-group" required>
                    <option value="">Select Blood Group</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
            <div class="form-groupd">
                <label for="last-donation">Last Donation Date:</label>
                <input type="date" id="last-donation" name="last-donation">
            </div>
            <div class="form-groupd">
                <label for="country">Country:</label>
                <select id="country" name="country" required>
                    <option value="">Select Country</option>
                    <option value="Pakistan">Pakistan</option>
                    <!-- Add more countries if needed -->
                </select>
            </div>
            <div class="form-groupd">
                <label for="province">Province/State:</label>
                <select id="province" name="province" required>
                    <option value="">Select Province/State</option>
                    <!-- Add provinces/states of Pakistan -->
                    <option value="Punjab">Punjab</option>
                    <option value="Sindh">Sindh</option>
                    <option value="Balochistan">Balochistan</option>
                    <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                    <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                    <option value="Azad Kashmir">Azad Kashmir</option>
                </select>
            </div>
            <div class="form-groupd">
                <label for="city">City:</label>
                <select id="city" name="city" required>
                    <option value="">Select City</option>
                    <option value="Abbottabad">Abbottabad</option>
                    <option value="Ahmadpur East">Ahmadpur East</option>
                    <option value="Arifwala">Arifwala</option>
                    <option value="Athmuqam">Athmuqam</option>
                    <option value="Badin">Badin</option>
                    <option value="Bahawalnagar">Bahawalnagar</option>
                    <option value="Bahawalpur">Bahawalpur</option>
                    <option value="Bannu">Bannu</option>
                    <option value="Burewala">Burewala</option>
                    <option value="Charsadda">Charsadda</option>
                    <option value="Chakwal">Chakwal</option>
                    <option value="Chaman">Chaman</option>
                    <option value="Chichawatni">Chichawatni</option>
                    <option value="Chiniot">Chiniot</option>
                    <option value="Chishtian">Chishtian</option>
                    <option value="Dadu">Dadu</option>
                    <option value="Daggar">Daggar</option>
                    <option value="Daska">Daska</option>
                    <option value="Dasu">Dasu</option>
                    <option value="Dera Bugti">Dera Bugti</option>
                    <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                    <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                    <option value="Faisalabad">Faisalabad</option>
                    <option value="Ghotki">Ghotki</option>
                    <option value="Gilgit">Gilgit</option>
                    <option value="Gojra">Gojra</option>
                    <option value="Gujranwala">Gujranwala</option>
                    <option value="Gujrat">Gujrat</option>
                    <option value="Hafizabad">Hafizabad</option>
                    <option value="Hangu">Hangu</option>
                    <option value="Haripur">Haripur</option>
                    <option value="Hasilpur">Hasilpur</option>
                    <option value="Haveli Lakha">Haveli Lakha</option>
                    <option value="Hyderabad">Hyderabad</option>
                    <option value="Islamabad">Islamabad</option>
                    <option value="Jacobabad">Jacobabad</option>
                    <option value="Jaranwala">Jaranwala</option>
                    <option value="Jhang">Jhang</option>
                    <option value="Jhelum">Jhelum</option>
                    <option value="Kamalia">Kamalia</option>
                    <option value="Kamoke">Kamoke</option>
                    <option value="Kandhkot">Kandhkot</option>
                    <option value="Karachi">Karachi</option>
                    <option value="Kasur">Kasur</option>
                    <option value="Khanewal">Khanewal</option>
                    <option value="Kharian">Kharian</option>
                    <option value="Khairpur">Khairpur</option>
                    <option value="Kharian">Kharian</option>
                    <option value="Khuzdar">Khuzdar</option>
                    <option value="Kohat">Kohat</option>
                    <option value="Kohlu">Kohlu</option>
                    <option value="Kot Adu">Kot Adu</option>
                    <option value="Kotri">Kotri</option>
                    <option value="Kundian">Kundian</option>
                    <option value="Lahore">Lahore</option>
                    <option value="Lala Musa">Lala Musa</option>
                    <option value="Larkana">Larkana</option>
                    <option value="Layyah">Layyah</option>
                    <option value="Loralai">Loralai</option>
                    <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                    <option value="Mardan">Mardan</option>
                    <option value="Mastung">Mastung</option>
                    <option value="Mianwali">Mianwali</option>
                    <option value="Mirpur Khas">Mirpur Khas</option>
                    <option value="Multan">Multan</option>
                    <option value="Muridke">Muridke</option>
                    <option value="Murree">Murree</option>
                    <option value="Mustafabad">Mustafabad</option>
                    <option value="Muzaffargarh">Muzaffargarh</option>
                    <option value="Nankana Sahib">Nankana Sahib</option>
                    <option value="Narowal">Narowal</option>
                    <option value="Nawabshah">Nawabshah</option>
                    <option value="New Mirpur City">New Mirpur City</option>
                    <option value="Nowshera">Nowshera</option>
                    <option value="Okara">Okara</option>
                    <option value="Pakpattan">Pakpattan</option>
                    <option value="Peshawar">Peshawar</option>
                    <option value="Quetta">Quetta</option>
                    <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                    <option value="Raiwind">Raiwind</option>
                    <option value="Rawalpindi">Rawalpindi</option>
                    <option value="Sadiqabad">Sadiqabad</option>
                    <option value="Sahiwal">Sahiwal</option>
                    <option value="Sargodha">Sargodha</option>
                    <option value="Shahdadkot">Shahdadkot</option>
                    <option value="Shahdadpur">Shahdadpur</option>
                    <option value="Sheikhupura">Sheikhupura</option>
                    <option value="Shikarpur">Shikarpur</option>
                    <option value="Sialkot">Sialkot</option>
                    <option value="Sibi">Sibi</option>
                    <option value="Sukkur">Sukkur</option>
                    <option value="Swabi">Swabi</option>
                    <option value="Tando Adam">Tando Adam</option>
                    <option value="Tando Allahyar">Tando Allahyar</option>
                    <option value="Turbat">Turbat</option>
                    <option value="Vehari">Vehari</option>
                    <option value="Wah Cantonment">Wah Cantonment</option>
                    <option value="Wazirabad">Wazirabad</option>
                    <option value="Zhob">Zhob</option>
                </select>
                
            </div>
            <div class="form-groupd">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="address" required>
            </div>
            <div class="form-groupd">
                <button type="submit" class="btnd">Submit</button>
            </div>
        </form>
    </div>
    <?php
include('../common/footer.php')
?>
    <script src="<?php echo $bp; ?>js/bootstrap.js"></script>
</body>
</html>
