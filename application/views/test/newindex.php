<?php echo form_open('mycon.php'); ?>

    <label for="Firstname">First Name:</label>
    <input type="text" name="Firstname" placeholder="First Name"><br>

    <label for="lastname">Last Name:</label>
    <input type="text" name="lastname" placeholder="Last Name"><br>

    <label for="email">Email:</label>
    <input type="text" name="email" placeholder="Email"><br>

    <label for="age">Age:</label>
    <input type="number" name="age" placeholder="Age"><br>

    <!-- Add more input fields as needed -->

    <button type="submit">Submit</button>
<?php echo form_close(); ?>