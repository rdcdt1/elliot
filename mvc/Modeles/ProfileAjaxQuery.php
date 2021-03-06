<?php
    // Navigate through MVC root directory
    $rootDirectory = dirname(__FILE__)."/../../mvc/";

    // Implement the "Autoload" class to load automatically all classes.
    require_once($rootDirectory.'Config/Autoload.php');
    try {
      Autoload::load();
    } catch(Exception $e){
      require (Config::getVues()["default"]) ;
    }

    session_start();

    // Adapt the variable to an appropriate data understandable by PHP.
    header("Content-Type: application/json; charset=UTF-8");
    $obj = json_decode($_POST["x"], false);

    // Set the general query string to retrieve accomodation data from the database.
    $sql_query = "SELECT *, t2.name, t3.name FROM users t1
                  LEFT JOIN accomodation t2 ON t1.id_user = t2.id_user
                  LEFT JOIN building t3 ON t2.id_building = t3.id_building
                  ";

    // Execute the query
    $query = DataBaseManager::getInstance()->prepareAndLaunchQuery($sql_query, array());

    // Check if the query complies to PHP.
    echo json_encode($query);
    
?>