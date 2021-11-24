<?php 
// form login
echo "<h2>Login</h2>
<form action='cek_login.php' method='POST'>
    <table border=1>
        <tr>
            <td>Username</td>
            <td> : <input type='text' name='id_user'></td>
        </tr>
        <tr>
            <td>Password</td>
            <td> : <input type='text' name='password'></td>
        </tr>
        <tr>
            <td><img src='captcha.php' alt='captcha'></td>
            <td> : <input type='text' name='captcha_code'></td>
        </tr>
        <tr>
            <td colspan=2><input type='submit' value='Login'></td>
        </tr>
    </table>
</form>";
