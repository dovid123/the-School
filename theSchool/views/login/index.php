<h1>Login</h1>
<form action="<?php echo config::URL ?>login/authenticate" method="post">
    <table>
        <tr><td><label>Login</label></td><td><input type="email" name="Email"></td></tr>        
        <tr><td><label>Password</label></td><td><input type="password" name="Password"></td></tr>        
        <tr><td><input type="submit" value="Login"></td></tr>        
    </table>
</form>




