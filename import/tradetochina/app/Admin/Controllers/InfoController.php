<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

use App\Model\InfoManage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class InfoController extends Controller
{
    public function index()
    {
        $id = Input::get('id', 0);
        $users = DB::table('infomanage');
        if ($id > 0) {
            $users->where('id', $id);
        }
        $users = $users->paginate(config('admin_config.paginate'));
        return view('Admin.infomanage.index', ['infos' => $users]);
    }




}
