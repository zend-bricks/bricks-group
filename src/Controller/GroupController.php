<?php

namespace ZendBricks\BricksGroup\Controller;

use ZendBricks\BricksCommon\Controller\CrudController;
use ZendBricks\BricksUser\Api\GroupApiInterface;

class GroupController extends CrudController
{
    protected $api;

    public function __construct(GroupApiInterface $api) {
        $this->api = $api;
    }
}
