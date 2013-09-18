<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Hello World
 * Date: 2013-09-06
 * Time: 15:50
 * To change this template use File | Settings | File Templates.
 */

namespace view;


class HTMLForm {
    public function getLoginForm()
    {
        $username = "";
        if (isset($_SESSION['username']))
        {
            $username = $_SESSION['username'];
        }

        return "
            <form action='formaction.php' method='post' >
                <label>Username</label>
                <input type='text' name='user' value='$username'>
                <label>Password</label>
                <input type='password' name='password'>
                <input type='submit' value='submit'>
            </form>";
    }
    public function getLogoutForm()
    {
        return "
            <form action='logout.php' method='post' >
                <input type='submit' value='Logout'>
            </form>
        ";
    }
}
?>