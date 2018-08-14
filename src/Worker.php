<?php namespace App\src;

use App\src\interfaces\{WorkableInterface, SleepableInterface, ManageableInterface};

class Worker implements WorkableInterface, SleepableInterface, ManageableInterface
{
  public function work()
  {
    var_dump('Worker is working.');
  }


  public function sleep()
  {
    var_dump('Worker is sleeping.');
  }


  public function manage()
  {
    $this->work();
    $this->sleep();
  }

}
