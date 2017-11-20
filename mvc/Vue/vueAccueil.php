<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/headerTest.css">
    <script src="js/headerTest.js"></script>
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
            <img src="img/dashboardIcon.png"/>
            Dashboard
          </button>

          <button>
            <img src="img/homeplanIcon.png"/>
            Plan du domicile
          </button>

          <button>
            <img src="img/sensorIcon.png"/>
            Capteurs / Actionneurs
          </button>

          <button>
            <img src="img/supportIcon.png"/>
            Support
          </button>

      </div>

      <div id="main">
          <img style="width:95%;" src="../img/internet_of_things.png" alt="Dashboard example">
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
          <p>SOMETHING COOL WILL HAPPEN NEXT</p>
      </div>


  </body>

</html>