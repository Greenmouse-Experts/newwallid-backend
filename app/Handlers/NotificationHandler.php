<?php 

namespace App\Handlers;

use App\Handlers\BaseHandler;
use Illuminate\Support\Facades\Mail;
use App\Notifications\EmailVerificationNotification;
use App\Notifications\MemberApprovalNotification;
use App\Notifications\InvitationNotification;

trait NotificationHandler {

	use BaseHandler;

	function sendEmailVerificationNotification($user) {
		$this->handle($user->notify(new EmailVerificationNotification($user)));
	}

	function sendApprovalNotification($user) {
		$this->handle($user->notify(new MemberApprovalNotification($user)));
	}

	function sendInvitationNotification($user, $event) {
		$this->handle($user->notify(new InvitationNotification($event)));
	}
}