<nav>
  <ul>
    <li><a href="FirstPage">Home</a></li>
    <li><a href="#">Recipes</a>
      <ul class="dropdown">
        <li><a href="AmericanPancakeDirect">American Pancakes</a></li>
        <li><a href="SwedishPancakeDirect">Swedish Pancakes</a></li>
      </ul>
    </li>
    <li><a href="CalendarDirect">TastyCalender</a></li>
    <li><a href="LoginDirect">LOG IN</a></li>
    <li class="phpsession"><li class="phpsession"><span id="res"></span></li>
    <?php
    if($this->session->get('username') != null){
      if($this->session->get('username') != 'Fel'){
        ?>
          <li class="phpsession-logout"><a id="logOut" onclick="logOut()">LOG OUT</a></li>
      <?php  }}
      ?>
  </ul>
  <p id="session_username" hidden><?php echo $this->session->get('username') ?></p>
</nav>
