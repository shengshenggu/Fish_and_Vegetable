<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', ['user' => Auth::user()]);
    }

    public function setView()
    {
        return view('set', ['user' => Auth::user()]);
    }

    public function setEnvironment(Request $request)
    {
        // Validation
        $this->validate($request, [
                'tmp_max' => 'required|numeric|min:'.$request->tmp_min,
                'tmp_min' => 'required|numeric',
                'ph_max' => 'required|numeric|min:'.$request->ph_min,
                'ph_min' => 'required|numeric',
                'period' => 'required|numeric|min:0',
            ],
            [
                'tmp_max.min' => '溫度上限 不能低於 :min',
                'ph_max.min' => 'PH上限 不能低於 :min',
                'numeric' => '此欄位必須為數字',
                'required' => '此欄位必須填寫',
                'period.min' => '週期需大於0',
            ]
        );

        $user = Auth::user();
        $user->tmp_max = $request->tmp_max;
        $user->tmp_min = $request->tmp_min;
        $user->ph_max = $request->ph_max;
        $user->ph_min = $request->ph_min;
        $user->period = $request->period;

        if ($user->save()) {
            return redirect('/setEnvironment')->with('success', '儲存成功');
        }
        return redirect('/setEnvironment')->with('error', '儲存失敗');
    }

    public function getEnvironment(Request $request)
    {
        $user = Auth::user();
        $json = [
            'tmp' => $user->environment->tmp,
            'ph' => $user->environment->ph,
            'tmp_max' => $user->tmp_max,
            'tmp_min' => $user->tmp_min,
            'ph_max' => $user->ph_max,
            'ph_min' => $user->ph_min,
            'period' => $user->period,
        ];

        return response()->json($json);
    }

    public function changeStatus(Request $request)
    {
        $user = Auth::user();
        if ($request->status == 'true') {
            $user->status = 1;
        } else {
            $user->status = 0;
        }
        $result = $user->save();
        return response()->json(['result' => $result]);
    }
}
