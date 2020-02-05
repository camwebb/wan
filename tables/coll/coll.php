<?php

class tables_coll {

    // change Title for the record
    function getTitle(&$record){
        return $record->val('collector').' '.$record->val('collector_no');
   }
    
    // Hiding long and lat if user not logged in
    function longitude__permissions(&$record){
        $auth =& Dataface_AuthenticationTool::getInstance();
        $user =& $auth->getLoggedInUser();
        if ( !isset($user) ) return Dataface_PermissionsTool::NO_ACCESS();
    }

   function latitude__permissions(&$record){
        $auth =& Dataface_AuthenticationTool::getInstance();
        $user =& $auth->getLoggedInUser();
        if ( !isset($user) ) return Dataface_PermissionsTool::NO_ACCESS();
    }

    function locality__permissions(&$record){
        $auth =& Dataface_AuthenticationTool::getInstance();
        $user =& $auth->getLoggedInUser();
        if ( !isset($user) ) return Dataface_PermissionsTool::NO_ACCESS();
    }

}
?>
