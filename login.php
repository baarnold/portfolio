<?php
    if (isset($errors) && !empty($errors)) {
        echo '<h1>Error!</h1>
            <p class="error">The following error(s) occured:<br>';
        foreach ($errors as $msg) {
            echo " - $msg<br>\n";
        }
    }
    echo "</p><p>Please Try Again.</p>";
?>
<h1>Login</h1>
<form action="login.php" method="post">
    <p>Username: <input type="text" name="username" /></p>
    <p>Password: <input type="password" name="password" /></p>
    <p><input type="submit" name="submit" value="Login" /></p>
</form>

