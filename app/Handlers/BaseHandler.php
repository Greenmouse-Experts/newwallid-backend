<?php

namespace App\Handlers;

trait BaseHandler {

	public function handle($action) {
		try {
			return $action;
		} catch (Exception $e) {
			\Log::error($e);
		}
	}
}