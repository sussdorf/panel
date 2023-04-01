<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class MonitoringController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function overview(Request $request)
    {
        $email = Auth::user()->email;
        $monitoring = DB::select('select * from monitoring where user = :user', ['user' => $email]);

        return view('monitoring.overview', ['monitoring' => $monitoring]);
    }

}
