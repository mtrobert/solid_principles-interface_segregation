<?php namespace App\src;

use App\src\interfaces\ManageableInterface;

class Manager
{
  public function manage(ManageableInterface $worker)
  {
    $worker->manage();
  }
}
