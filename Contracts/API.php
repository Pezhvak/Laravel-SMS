<?php
namespace App\Classes\SMS\Contracts;

interface SMS{

	/**
	 * @return mixed result
	 */
	public function send();
}