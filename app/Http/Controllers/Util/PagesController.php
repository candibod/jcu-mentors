<?php

namespace App\Http\Controllers\Util;

use App\Jobs\Emails\Application\MailCustomApplicationAlertToApplicant;
use App\Jobs\Emails\Application\MailCustomApplicationAlertToTeam;
use App\Jobs\Emails\ReportIssue\ReportIssueAlertToTeam;
use App\Jobs\Emails\SignUp\MailCLDSignUpAlertToTeamJob;
use App\Jobs\Emails\Util\MailCustomerNotInterestedToTeam;
use App\Jobs\HandleStoppingTicketAutoFollowup;
use App\Models\Collection\CollectionOptions;
use App\Models\Package\Package;
use App\Models\Ticket\Ticket;
use App\Models\Ticket\TicketFalloutFeedback;
use App\Models\Ticket\TicketFollowup;
use App\Models\Ticket\TicketReminderStack;
use App\Models\Types\TypeFalloutFeedback;
use App\Models\Util\ReportIssue;
use App\Models\Util\City;

use App\Models\Util\FAQ;
use App\Models\Util\Feedback;
use App\Models\Util\Team;
use App\Models\Util\VendorSignUp;
use App\Models\Vendor\Vendor;
use App\Jobs\Emails\Feedback\MailWebsiteFeedbackToCustomerJob;
use App\Jobs\Emails\Feedback\MailWebsiteFeedbackToTeam;
use App\Jobs\Emails\SignUp\MailSignUpAlertToTeamJob;
use App\Jobs\Emails\SignUp\MailSignUpThanksToVendorJob;
use App\Models\Types\TypeVendor;
use App\Http\Controllers\Base\BaseHomeController;

use App\Models\Venue\Venue;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PagesController extends BaseHomeController
{
	public function showSample()
	{
		return view("app.sample.home");
	}

	public function showMentee()
	{
		return view("app.sample.mentee");
	}

	public function showSampleLogin()
	{
		return view("app.sample.login");
	}
}