<?php include "layout/header.php"; ?>
  <h2>Add user</h2>
    <form method="post">
      <label for="firstname">First Name</label>
      <input type="text" name="firstname" id="firstname" required>

      <label for="lastname">Last Name</label>
      <input type="text" name="lastname" id="lastname" required>

      <label for="email">Email address </label>
      <input type="text" name="email" id="email" required>

      <label for="age">Age</label>
      <input type="text" name="age" id="age">

      <label for="location">Location</label>
      <input type="text" name="Location" id="location">

      <input type="submit" name="submit" value="submit">
    </form>

<a href="Apt.php">Back to home</a>

<?php include "layout/footer.php"; ?>
