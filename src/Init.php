<?php

namespace App;

use App\Hooks;

/**
 * Plugin initialization
 */ 
class Init
{
  public function __construct() {
		// hooks
		(new Hooks())->register();
	}
}
