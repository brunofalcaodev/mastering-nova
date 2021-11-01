<?php

namespace MasteringNova\Features\GiveAway\Newsletter\Controllers;

use MasteringNova\Http\Controllers\Controller;
use MasteringNova\Models\Giveaway;
use MasteringNova\Models\Subscriber;
use Illuminate\Http\Request;
use Spatie\Honeypot\ProtectAgainstSpam;

class NewsletterController extends Controller
{
    public function __construct()
    {
        if (app()->environment() == 'production') {
            $this->middleware(['throttle:3,1', ProtectAgainstSpam::class])
                 ->only(['subscribe']);
        }
    }

    public function form(Request $request)
    {
        return flame();
    }

    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email:rfc,dns',
        ]);

        // Subscribe to the giveaway table.
        Giveaway::firstOrCreate([
            'email' => $request->input('email'),
            'contest_number' => env('GIVEAWAY_CONTEST_NUMBER'),
        ]);

        // Add to the subscribers table.
        Subscriber::firstOrCreate(['email' => $request->input('email')]);

        return flame();
    }
}
