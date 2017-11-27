<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/animation.js"></script>
    <title>Test for the header</title>
  </head>

  <div id="mainHeader">

      <header>
        <span id="hamburgerIcon" onclick="setSideBarStatus()">&#9776;</span>
        <div class="header_right">
          <ul class="notificationPopup">
              <li>
                  <span class="howManyNotif">2</span>
                  <img src="img/notificationIcon.png" alt="Notification icon" title="Notifications"/>
                  <ul>
                      <li class="title">Notifications</li>
                      <li>
                          <a href="#">Lorem ipsum dolor sit amet</a>
                      </li>
                      <li>
                          <a href="#">Lorem ipsum dolor sit amet</a>
                      </li>
                      <li class="seeAll">
                          <a href="#">See all notifications</a>
                      </li>
                  </ul>
              </li>
          </ul>
          <!--img src="../img/notificationIcon.png" alt="Notification icon" title="Notifications"/-->
          <button class="buttonHeader" type="button" title="Profile">
            <img src="img/userIcon.png" alt="User icon" title="Page de profil"/>
            <a> DomISEP </a>
          </button>
          <img src="img/logoutIcon.png" alt="Logout icon" title="Logout"/>
        </div>
      </header>

  </div>

  <div id="iconBar">
      <a href="#"><i class="smallelliot"></i></a>
      <p></p> <!--Used only to put a space-->
      <a href="#"><i class="dashboard"></i></a>
      <a href="#"><i class="homeplan"></i></a>
      <a href="#"><i class="sensor"></i></a>
      <a href="#"><i class="support"></i></a>
      <p></p>
  </div>

  <body>

	<div id="mySideBar" class="sidebar">

			  <img id="bigIcon" src="img/ellIoT2.png">

			  <p></p>

			  <button>
				<div class="menu-image">
					<img src="img/dashboardIcon.png"/>
				</div>
				<div class="menu-name">
					Tableau de bord
				</div>
			  </button>

			  <button>
				<div class="menu-image">
					<img src="img/homeplanIcon.png"/>
				</div>
				<div class="menu-name">
					Plan du domicile
				</div>
			  </button>

			  <button>
				<div class="menu-image">
					<img src="img/sensorIcon.png"/>
				</div>
				<div class="menu-name">
					Capteurs/actionneurs
				</div>
			  </button>

			  <button>
				<div class="menu-image">
					<img src="img/supportIcon.png"/>
				</div>
				<div class="menu-name">
					Support
				</div>
			  </button>
	</div>

      <div id="main">

        <h2>Create an Account</h2>
        <form id="RegisterUserForm" method="post">
          <label for="last_name">Nom de famille</label>
          <input class="text" id="last_name" type="text" name="last_name" value="" />
          <label for="first_name">Prénom</label>
          <input class="text" id="first_name" type="text" name="first_name" value="" />
          <label for="phone_number">Téléphone</label>
          <input class="text" id="phone_number" type="tel" name="phone_number" value="" />
          <label for="birthday">Jour de naissance</label>
          <input class="text" id="birthday" type="text" name="birthday" value="" />
          <label for="mail">Email</label>
          <input class="text" id="mail" type="email" name="mail" value="" />
          <label for="password">Password</label>
          <input class="text" id="password" type="password" name="password" />
          <button id="registerNew" type="submit">Register</button>
        </form>
      </div>


      <?php
          if (isset($_POST['last_name']) && isset($_POST['first_name']) && isset($_POST['phone_number']) && isset($_POST['birthday']) && isset($_POST['mail']) && isset($_POST['password']) ) {
              $ctrl = new ControleurVisitor('inscription');
          }
      ?>

  </body>

</html>
