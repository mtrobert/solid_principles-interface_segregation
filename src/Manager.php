<?php namespace App\src;

class Manager
{
  public function manage(Manageable $worker)
  {
    $worker->manage();
  }
}
