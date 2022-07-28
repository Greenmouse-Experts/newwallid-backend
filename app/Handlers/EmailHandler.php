<?php 

namespace App\Handlers;

use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\Mail;

use App\Mail\WelcomeMail;
use App\Mail\ActivationMail;

trait EmailHandler {

	use BaseHandler;

	function sendWelcomeMail($user) {
		$this->handle(Mail::to($user)->send(new WelcomeMail($user)));
	}

	function sendActivationMail($user) {
		$this->handle(Mail::to($user)->send(new ActivationMail($user)));
	}
}