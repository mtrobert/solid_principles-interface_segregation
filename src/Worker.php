<?php namespace App\src;

class Worker  implements WorkableInterface, SleepableInterface, ManageableInterface
{
  public function work()
  {
    var_dump('Worker is working.');
  }


  public function sleep()
  {
    var_dump('Worker is sleeping.');
  }

}
