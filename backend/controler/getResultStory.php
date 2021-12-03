<?php
    require('../model/storyManager.php');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Origin: *');
    

    $send['success'] = false;
    if(isset($_POST['research'])){
        $storyManager = new StoryManager();
        $objectArray = $storyManager->researchStory($_POST['research']);
        $send['result'] = array();
        $id = 0;
        foreach ($objectArray as $object){
            $send['result'][$id] = array();
            $send['result'][$id]['id'] = $object->getId();
            $send['result'][$id]['description'] = $object->getDescription();
            $send['result'][$id]['keyword'] = $object->getKeyword();
            $send['result'][$id]['title'] = $object->getTitle();
            $send['result'][$id]['storyDate'] = $object->getStoryDate();
            $send['result'][$id]['numberOfPeopleSave'] = $object->getNumberOfPeopleSave();
            $id++;
        }
        $send['success'] = true;
    }
    echo json_encode($send);
?>