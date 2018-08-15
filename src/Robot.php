<?php namespace App\src;

use App\src\interfaces\{WorkableInterface, ManageableInterface};

class Robot implements WorkableInterface, ManageableInterface
{
  public function manage()
  {
    $this->work();
  }


  public function work()
  {
    var_dump('Robot working');
  }
}
