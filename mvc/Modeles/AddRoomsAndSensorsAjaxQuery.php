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
    $obj = json_decode($_POST["y"], false);


    // Reference for loop parses.
    $existentRoom = $obj->arrayForExistentRoom;
    $createdRoom = $obj->arrayForCreatedRoom;
    // The part above works perfectly.

    $lengthOfExistentRoom = sizeof($existentRoom);
    $lengthOfCreatedRoom = sizeof($createdRoom);

    // Defined values for queries.
    $sql_query = "";
    $arrayForQuery = [];


    // Loop an "INSERT" query for pre-existing rooms.
    for ($i=0; $i < $lengthOfExistentRoom; $i++) {
        $sensorToAdd = $existentRoom[$i];
        $name = $sensorToAdd->name;
        $familySensor = $sensorToAdd->familysensor;
        $idRoom = $sensorToAdd->id_room;
        $dataOfSensor = $sensorToAdd->data;

        $sql_query .= "INSERT INTO sensors(id_sensor, name, state, id_familysensor, id_room)
                       SELECT MAX(id_sensor)+1, ?, 1, (SELECT id_familysensor FROM familysensor t1 WHERE name = ?), ? FROM sensors;

                       INSERT INTO datasensors(id_datasensor, date_time, value, id_sensor)
                       SELECT MAX(id_datasensor)+1, ?, ?, (SELECT MAX(id_sensor) FROM sensors) FROM datasensors;";

        array_push($arrayForQuery, $name, $familySensor, $idRoom, date('Y-m-d'), $dataOfSensor);
    }


    // Loop an "INSERT" query for newly created rooms.
    for ($i=0; $i < $lengthOfCreatedRoom; $i++) {
        $roomToAdd = $createdRoom[$i][0];
        $lengthOfSensorsInRoom = sizeof($createdRoom[$i]);

        $sql_query .= "INSERT INTO room(id_room, name, id_accomodation)
                       SELECT MAX(id_room)+1, ?, ? FROM room;";

        array_push($arrayForQuery, $roomToAdd, $_SESSION['id_accomodation']);

        for ($j=1; $j < $lengthOfSensorsInRoom; $j++) {
            $sensorToAdd = $createdRoom[$i][$j];
            $name = $sensorToAdd->name;
            $familySensor = $sensorToAdd->familysensor;
            $dataOfSensor = $sensorToAdd->data;

            $sql_query .= "INSERT INTO sensors(id_sensor, name, state, id_familysensor, id_room)
                           SELECT MAX(id_sensor)+1, ?, 1, (SELECT id_familysensor FROM familysensor WHERE name = ?),
                           (SELECT MAX(id_room) FROM room) FROM sensors;

                           INSERT INTO datasensors(id_datasensor, date_time, value, id_sensor)
                           SELECT MAX(id_datasensor)+1, ?, ?, (SELECT MAX(id_sensor) FROM sensors) FROM datasensors;";

           array_push($arrayForQuery, $name, $familySensor, date('Y-m-d'), $dataOfSensor);
        }

    }


    // Execute the query
    $query = DataBaseManager::getInstance()->prepareAndLaunchQuery($sql_query, $arrayForQuery);

    // Check if the query complies to PHP.
    echo json_encode($query);
    
?>
