<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Atsauksmes forma</title>
</head>
<body>
    <form action="contact-sent.php" method="post">
        <label>Vards: <input type="text" name="name" required></label><br>
        <label>Email: <input type="email" name="email" required></label><br>
        <label>Teksts:<br><textarea name="message" required></textarea></label><br>
        <button type="submit">nosutit</button>
    </form>
</body>
</html>

// contact-sent.php 
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>atsauksme</title>
</head>
<body>
    <h1>Paldeies par jusu </h1>
    <p>Vards: <?php echo htmlspecialchars($_POST['name']); ?></p>
    <p>Email:<?php echo htmlspecialchars($_POST['email']); ?></p>
    <p>Teksts: <?php echo nl2br(htmlspecialchars($_POST['message'])); ?></p>
</body>
</html>
