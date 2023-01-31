<?php include "validation.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="hackers-poulette">
    <link rel="stylesheet" href="./assets/css/style.css">
    <script defer src="assets/js/script.js"></script>
    <title>hackers-poulette</title>
</head>

<body>
    <h1>Contact</h1>
    <form method="post" class="form">
        <div>
            <label for="name">Name</label>
            <input type="text" class="name" name="name"   value="<?php echo (isset($_POST["name"]) && !isset($error_name) )? $_POST["name"] : ''; ?>">
            <?php echo (isset($error_name))? $error_name: '';?>
        </div>
        <div>
            <label for="firstname">Firstname</label>
            <input type="text" class="firstname" name="firstname"  value="<?php echo (isset($_POST["firstname"]) && !isset($error_firstname))? $_POST["firstname"] : ''; ?>">
            <?php echo (isset($error_firstname))? $error_firstname: '';?>
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" class="email" name="email"  value="<?php echo (isset($_POST["email"]) && !isset($error_email) )? $_POST["email"] : ''; ?>">
            <?php echo (isset($error_email))? $error_email: '';?>
        </div>
        <div>
            <label for="comment">Comment</label>
            <textarea name="comment" class="comment" rows="5"  ><?php echo (isset($_POST["comment"])&& !isset($error_comment) )? $_POST["comment"] : ''; ?></textarea>
            <?php echo (isset($error_comment))? $error_comment: '';?>
        </div>
        <!-- Champ caché pour honeypot -->
        <input class="hp" type="text" name="hp" style="display: none;">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>


