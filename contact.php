<?php include "validation.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hackers-poulette">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>hackers-poulette</title>
</head>

<body>
    <h1>Contact</h1>
    <form method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" minlength="2" maxlength="255" required value="<?php echo (isset($_POST["name"]) && !isset($error_name) )? $_POST["name"] : ''; ?>">
            <?php echo (isset($error_name))? $error_name: '';?>
        </div>
        <div>
            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" minlength="2" maxlength="255" required value="<?php echo (isset($_POST["firstname"]) && !isset($error_firstname))? $_POST["firstname"] : ''; ?>">
            <?php echo (isset($error_firstname))? $error_firstname: '';?>
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" minlength="2" maxlength="255" required value="<?php echo (isset($_POST["email"]) && !isset($error_email) )? $_POST["email"] : ''; ?>">
            <?php echo (isset($error_email))? $error_email: '';?>
        </div>
        <div>
            <label for="comment">Comment</label>
            <textarea name="comment" rows="5" minlength="250" maxlength="1000" required ><?php echo (isset($_POST["comment"])&& !isset($error_comment) )? $_POST["comment"] : ''; ?></textarea>
            <?php echo (isset($error_comment))? $error_comment: '';?>
        </div>
        <!-- Champ caché pour honeypot -->
        <input type="text" name="hp" style="display: none;">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>

