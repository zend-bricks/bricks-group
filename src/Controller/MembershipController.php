<?php

namespace ZendBricks\BricksGroup\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use ZendBricks\BricksUser\Api\GroupApiInterface;

class MembershipController extends AbstractActionController
{
    protected $api;

    public function __construct(GroupApiInterface $api) {
        $this->api = $api;
    }
}
