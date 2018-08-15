<?php namespace App\src;

use App\src\interfaces\{WorkableInterface, ManageableInterface};

class Robot implements WorkableInterface, ManageableInterface
{
  public function work()
  {
    var_dump('Robot working');
  }


  public function manage()      //this method will be used by the consumer class
  {
    $this->work();
  }
}
