<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Swanky Pure CSS Drop Down Menu V2.0</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">

  
</head>

  <!-- /////////// Begin Dropdown //////////// -->
  <div class='swanky_wrapper'>
    <input id='Dashboard' name='radio' type='radio'>
    <label for='Dashboard'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/dash.png'>
      <span>Dashboard</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>Tools</li>
          <li>Reports</li>
          <li>Analytics</li>
          <li>Code Blocks</li>
        </ul>
      </div>
    </label>
    <input id='Sales' name='radio' type='radio'>
    <label for='Sales'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/del.png'>
      <span>Sales</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>New Sales</li>
          <li>Expired Sales</li>
          <li>Sales Reports</li>
          <li>Deliveries</li>
        </ul>
      </div>
    </label>
    <input id='Messages' name='radio' type='radio'>
    <label for='Messages'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/mess.png'>
      <span>Messages</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>Inbox</li>
          <li>Outbox</li>
          <li>Sent</li>
          <li>Archived</li>
        </ul>
      </div>
    </label>
    <input id='Users' name='radio' type='radio'>
    <label for='Users'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/users.png'>
      <span>Users</span>
      <div class='lil_arrow'></div>
      <div class='bar'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>New User</li>
          <li>User Groups</li>
          <li>Permissions</li>
          <li>Passwords</li>
        </ul>
      </div>
    </label>
    <input id='Settings' radio='radio' type='radio'>
    <label for='Settings'>
      <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/217233/set.png'>
      <span>Settings</span>
      <div class='lil_arrow'></div>
      <div class='swanky_wrapper__content'>
        <ul>
          <li>Databases</li>
          <li>Design</li>
          <li>Change User</li>
          <li>Log Out</li>
        </ul>
      </div>
    </label>
  </div>
  <!-- /////////// End Dropdown //////////// -->
</div>
<!-- / My Footer -->

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>