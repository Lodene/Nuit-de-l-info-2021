<?php
    require('../model/rescuerManager.php');
    header('Content-Type: application/json');
    

    $send['success'] = false;
    if(isset($_POST['research'])){
        $rescuerManager = new RescuerManager();
        $objectArray = $rescuerManager->researchRescuer($_POST['research']);
        $send['result'] = array();
        $id = 0;
        foreach ($objectArray as $object){
            $send['result'][$id] = array();
            $send['result'][$id]['id'] = $object->getId();
            $send['result'][$id]['firstName'] = $object->getFirstName();
            $send['result'][$id]['lastName'] = $object->getLastName();
            $send['result'][$id]['birthDay'] = $object->getBirthDay();
            $send['result'][$id]['sources'] = $object->getSources();
            $send['result'][$id]['age'] = $object->getAge();
            $id++;
        }
        $send['success'] = true;
    }
    echo json_encode($send);
?>