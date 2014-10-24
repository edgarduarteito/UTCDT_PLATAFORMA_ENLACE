<?php

namespace Utilities;

use Utilities\MobileDetect;

class ControlNavegador {

    public $tablet_dev_flag = false;
    public $phone_dev_flag = false;
    public $mobile_detect = null;

    public function __construct() {
        $this->mobile_detect = new MobileDetect();
    }

    public function getMobileDetect() {
        return $this->mobile_detect;
    }

    public function getPhoneDevFlag() {
        return $this->phone_dev_flag;
    }

    public function getTabletDevFlag() {
        return $this->tablet_dev_flag;
    }

    public function setPhoneDevFlag($value) {
        $this->phone_dev_flag = $value;
    }

    public function setTabletDevFlag($value) {
        $this->tablet_dev_flag = $value;
    }

}


?>
