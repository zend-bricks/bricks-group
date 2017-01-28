<?php

namespace ZendBricks\BricksUser\Api;

interface GroupApiInterface {
    const SERVICE_NAME = 'BricksGroupApi';
    
    public function createGroup(array $values);
    
    public function getGroupData();
    
    public function editGroup($id, array $values);
    
    public function deleteGroup($id);
    
    public function makeUserToGroupOwner($id);
    
    public function addMember($id);
    
    public function removeMember($id);
}
