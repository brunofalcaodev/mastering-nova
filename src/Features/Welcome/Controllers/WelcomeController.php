<?php

namespace MasteringNova\Features\Welcome\Controllers;

use App\Http\Controllers\Controller;
use Eduka\Mail\DefaultMail;
use Eduka\Models\Chapter;
use Eduka\Models\Course;
use Eduka\Models\Subscriber;
use Eduka\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use ProtoneMedia\LaravelPaddle\Paddle;

class WelcomeController extends Controller
{
    public function __construct()
    {
        if (app()->environment() == 'production') {
            $this->middleware(['throttle:2,1'])
                 ->only(['subscribe']);
        }
    }

    public function options()
    {
        return flame();
    }

    public function index()
    {
        /*
        dd(Paddle::product()
                 ->createCoupon()
                 ->productId('594915')
                 ->numCoupons(3)
                 ->description('Pre-subscriber Special Discount Coupon')
                 ->couponType('product')
                 ->discountType('percentage')
                 ->discountAmount(10)
                 ->allowedUses(1)
                 ->group('Pre-Subscribers Coupons')
                 ->send());
        */

        return flame([
            'videos' => Video::query(),
            'totalVideos' => Video::all()->count(),
            'website' => Course::first(),
            'chapters' => Chapter::orderBy('index')->get(),
        ]);
    }

    public function subscribe(Request $request)
    {
        // Testing reasons with my email.
        Subscriber::where('email', 'bruno.falcao@live.com')->forceDelete();

        Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns|unique:subscribers,email',
        ])->validate();

        Subscriber::create(['email' => $request->input('email')]);

        // Mail data construction.
        $data = [
            'markdown' => "# Thanks for subscribing!
Hey there!<br/>
Thanks a lot for subscribing to my course!<br/>
I'll keep you posted about my progress and the launch date as soon as possible.
You'll also give you a special discount coupon that you can use to
buy my course at a special early-access price!
",
        'button' => [
        'text' => 'Click here to redeem',
        'url' => 'https://www.publico.pt'
            ]
        ];

        Mail::to($request->input('email'))
            ->send(new DefaultMail('Thank you for subscribing!', $data));

        return flame([
            'videos' => Video::query(),
            'totalVideos' => Video::all()->count(),
            'website' => Course::first(),
            'chapters' => Chapter::orderBy('index')->get(),
        ]);
    }
}
