<?php
/**
*  @author    Eduardo Pinuaga Linares Did-web.com <info@did-web.com>
*  @copyright did-web.com 2018
*  @license   GNU General Public License version 3
*  @version   1.0.0
*  Did-web.com
*
*
**/

namespace ratioruntime\classes;

class RatioRuntime {

  private $initTime;


  public function __construct() {
    $this->setInitTime();
  }

  public function calculateTime() {
    list($useg, $seg) = explode(" ", microtime());
    return ((float)$useg + (float)$seg);
  }


  public function setInitTime() {
    $this->initTime = $this->calculateTime();
  }


  public function endCal($output = null) {

    $endTime = $this->calculateTime();
    $timeExecution = ($endTime - $this->initTime);

    switch($output) {
      case null:
        return $timeExecution;
      default:
        return false;
    }

  }

  public function getInitTime() {
       return $this->initTime;
  }

}
 ?>
