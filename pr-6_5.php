<html>
<body>
    <?php
    //Practical 6_5
    ?>
    <body>
        <center>
            <form action="redirect_6_5.php" method="post" style="margin-top: 50px; text-align:center; width: 400px;">
                <p>
                    Username: <input name="username" type="text" value="<?php if (isset($_COOKIE["username"])) {
                                                                            echo $_COOKIE["username"];
                                                                        } ?>" class="input-field">
                </p>
                <p>
                    Password: <input name="password" type="password" value="<?php if (isset($_COOKIE["password"])) {
                                                                                echo $_COOKIE["password"];
                                                                            } ?>" class="input-field">
                </p>
                <p><input type="checkbox" name="remember"> Remember </p>
                <p><input type="submit" value="Login"></p>
            </form>
        </center>
    </body>
</body>
</html>
