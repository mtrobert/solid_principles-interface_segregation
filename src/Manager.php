<?php namespace App\src;

class Manager
{
  public function manage(ManageableInterface $worker)
  {
    $worker->manage();
  }
}
