<?php
namespace App\Model;

/**
 * Base class for presenters, basically used for connect to the DB
 */

class Base extends \Nette\Object {
  
    /** @var Nette\Database\Context */
    public $database;
    
    public function __construct(\Nette\Database\Context $database) {
       $this->database = $database;
    }
    
}
