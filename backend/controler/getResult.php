<?php
    header('Content-Type: application/json');
    require('../model/rescuerManager');

    $send['success'] = false;
    if(isset($_POST['research'])){
        $rescuerManager = new RescuerManager();
        $send['result'] = $rescuerManager->researchRescuer($_POST['research']);
    }
    echo json_encode($send);
?>