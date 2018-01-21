<?php
    // Répertoire racine du MVC
    $rootDirectory = dirname(__FILE__)."/../../mvc/";
    // chargement de la classe Autoload pour autochargement des classes
    require_once($rootDirectory.'Config/Autoload.php');
    try {
      Autoload::load();
    } catch(Exception $e){
      require (Config::getVues()["default"]) ;
    }
    session_start();

    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_POST["x"], false);

    $sql_query = "SELECT t1.name AS nameOfRoom, t1.id_room AS idOfRoom, t3.name AS nameOfFamilysensor, t4.value AS valueOfSensor, t2.id_sensor AS idOfSensor
                  /* It is important to rename the columns to avoid duplication */
                  FROM room t1
                  LEFT JOIN sensors t2 ON t2.id_room = t1.id_room
                  LEFT JOIN familysensor t3 ON t2.id_familysensor = t3.id_familysensor
                  LEFT JOIN datasensors t4 ON t2.id_sensor = t4.id_sensor
                  WHERE (t4.date_time = ? OR t4.date_time IS NULL) AND t1.id_accomodation = ?
                  ORDER BY t1.name";

    $query = DataBaseManager::getInstance()->prepareAndLaunchQuery($sql_query, [date('Y-m-d'), $_SESSION['id_accomodation']]);

    echo json_encode($query);
?>
