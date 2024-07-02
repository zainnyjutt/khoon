<?php include('../common/basepath.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Donor</title>
    <link rel="stylesheet" href="<?php echo $bp; ?>css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $bp; ?>css/find_donor.css">
    <link rel="icon" href="<?php echo $bp; ?>assets/blooddrop.jpg">
</head>
<body>
<?php
include('../common/navbar.php');
include('../common/db.php');
?>

<div class="find-donor-container">
    <h2 class="find-donor-title">Find Donor</h2>
    <form id="find-donor-search-form" class="find-donor-form-inline mb-3 justify-content-end">
        <div class="form-group find-donor-form-group mx-2 mb-2">
            <label for="find-donor-blood-type" class="mr-2">Blood Type:</label>
            <select id="find-donor-blood-type" name="blood-type" class="form-control">
                <option value="">Select Blood Type</option>
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
        <div class="form-group find-donor-form-group mx-2 mb-2">
            <label for="find-donor-city" class="mr-2">Location:</label>
            <select id="find-donor-city" name="city" class="form-control" required>
                <option value="">Select City</option>
                <option value="Abbottabad">Abbottabad</option>
                <option value="Ahmadpur East">Ahmadpur East</option>
                <!-- Other cities omitted for brevity -->
                <option value="Zhob">Zhob</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Search</button>
    </form>

    <table id="find-donor-table" class="find-donor-table table table-striped table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date </th>
                <th>Blood</th>
                <th>Las</th>
                <th>Country</th>
                <th>Province</th>
                <th>City</th>
                <th>Address</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('../common/db.php');
            $sql = "SELECT * FROM donors";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['phone']}</td>
                        <td>{$row['dob']}</td>
                        <td>{$row['blood_group']}</td>
                        <td>{$row['last_do_date']}</td>
                        <td>{$row['country']}</td>
                        <td>{$row['province']}</td>
                        <td>{$row['city']}</td>
                        <td>{$row['address']}</td>
                        <td><a href='update_donor.php?id={$row['id']}' class='btn btn-primary'>Update</a></td>
                        <td><a href='delete_donor.php?id={$row['id']}' class='btn btn-danger'>Delete</a></td>
                    </tr>";
                }
            } else {
                echo "<tr><td colspan='12'>No donors found</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</div>

<?php
include('../common/footer.php');
?>
<script src="<?php echo $bp; ?>js/bootstrap.js"></script>
<script>
document.getElementById('find-donor-search-form').addEventListener('submit', function(event) {
    event.preventDefault();
    var bloodType = document.getElementById('find-donor-blood-type').value;
    var city = document.getElementById('find-donor-city').value.toLowerCase();
    var table = document.getElementById('find-donor-table').getElementsByTagName('tbody')[0];
    var rows = table.getElementsByTagName('tr');

    for (var i = 0; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName('td');
        var match = true;
        if (bloodType && cells[4].textContent !== bloodType) {
            match = false;
        }
        if (city && cells[8].textContent.toLowerCase().indexOf(city) === -1) {
            match = false;
        }
        rows[i].style.display = match ? '' : 'none';
    }
});
</script>
</body>
</html>
