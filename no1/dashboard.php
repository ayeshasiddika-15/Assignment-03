<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="no.css">
</head>

<body>
    <div class="dashboard">

        <?php
        session_start();
        if (isset($_SESSION['username'])) {
            echo "Welcome, " . $_SESSION['username'] . "!<br>";
            echo "<a href='no1-logout.php'>Logout</a>";
        } else {
            header("Location: no1-login.html");
        }
        ?>

    </div>
</body>

</html>