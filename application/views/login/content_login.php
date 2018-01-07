
<body>
  <div class="container">
  <div class="login">
    <h1 class="login-heading">
      <strong>Welcome.</strong> Please login.</h1>
      <form action="<?php echo site_url('Login/verifyLogin')?>" method="POST">
        <input type="text" name="username" placeholder="Username" required="required" class="input-txt" />
          <input type="password" name="password" placeholder="Password" required="required" class="input-txt" />
          <div class="login-footer">
            <select class="input-txt" name="level">
              <option>Select Role</option>
              <option value="0">Admin</option>
              <option value="1">User</option>
            </select>
            
    
          </div>
          <button type="submit" class="btn btn--right">Sign in  </button>
      </form>
  </div>
</div>
  