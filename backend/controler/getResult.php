<?php
    require('../model/rescuerManager.php');
    header('Content-Type: application/json');
    

    $send['success'] = false;
    if(isset($_POST['research'])){
        $rescuerManager = new RescuerManager();
        $objectArray = $rescuerManager->researchRescuer($_POST['research']);
        $send['result'] = $objectArray;
        
    }
    echo json_encode($send);
?>