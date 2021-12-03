<?php
    require('../model/rescuerManager.php');
    header('Content-Type: application/json');
    

    $send['success'] = false;
    if(isset($_POST['research'])){
        $rescuerManager = new RescuerManager();
        $objectArray = $rescuerManager->researchRescuer($_POST['research']);
        $send['result'] = array();
        foreach ($objectArray as $object){
            $id = $object->getId();
            $send['result'][$id] = array();
            array_push($send['result'][$id], $object->getFirstName());
            array_push($send['result'][$id], $object->getLastName());
            array_push($send['result'][$id], $object->getBirthDay());
            array_push($send['result'][$id], $object->getSources());
            array_push($send['result'][$id], $object->getAge());
        }
        $send['success'] = true;
    }
    echo json_encode($send);
?>