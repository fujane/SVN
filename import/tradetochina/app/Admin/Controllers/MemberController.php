<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Model\adminUser;
use App\Model\MemberInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class MemberController extends Controller
{
    public function index()
    {
        $id = Input::get('id', 0);
        $users = DB::table('memberinfo');
        if ($id > 0) {
            $users->where('id', $id);
        }
        $users = $users->paginate(config('admin_config.paginate'));
        return view('Admin.member.index', ['users' => $users]);
    }

    /**
     * 购买记录
     * @return View
     */
    public function alipaylog()
    {
        $keyword = Input::get('keyword', "");
        $alipaylog = DB::table('alipaylog as a')
            ->leftJoin('memberinfo as b', 'a.memberid', '=', 'b.id');
        if ($keyword != "") {
            $alipaylog->where('b.name', 'like', '%' . $keyword . '%')
                ->orWhere('b.registerphone', 'like', $keyword)
                ->orWhere('b.id', $keyword);
        }
        $alipaylog = $alipaylog->select('a.*', 'b.name')->paginate(config('admin_config.paginate'));
        return view('Admin.member.alipaylog', ['alipaylogs' => $alipaylog]);
    }

    /**
     * @return View
     */
    public function  create()
    {
        $memberinfo = new MemberInfo();
        return view('Admin.member.create', ['memberinfo' => $memberinfo]);
    }


    /**
     * @param $id
     */
    public function  detail($id)
    {
        $memberinfo = MemberInfo::find($id);
        return view('Admin.member.detail', ['memberinfo' => $memberinfo]);
    }

    /**
     * 编辑
     * @param $id
     * @return
     */
    public function  edit($id)
    {
        $memberinfo = MemberInfo::find($id);
        return view('Admin.member.create', ['memberinfo' => $memberinfo]);
    }


    /**
     * 删除
     * @param $id
     */
    public function  delete($id)
    {

        $memberinfo = MemberInfo::find($id);
        if ($memberinfo->delete()) {
            return response()->json(['status' => 1, 'message' => '删除成功！']);
        } else {
            return response()->json(['status' => 0, 'message' => '删除失败！']);;
        }
    }

    /*
     * 导出
     */
    public function excel()
    {
        $keyword = Input::get('keyword', "");
        $alipaylog = DB::table('alipaylog as a')
            ->leftJoin('memberinfo as b', 'a.memberid', '=', 'b.id');
        if ($keyword != "") {
            $alipaylog->where('b.name', 'like', '%' . $keyword . '%')
                ->orWhere('b.registerphone', 'like', $keyword)
                ->orWhere('b.id', $keyword);
        }
        $alipaylog = $alipaylog->select('a.*', 'b.name')->get();
        foreach ($alipaylog as $key => $value) {
            $cellData[] = array(
                '交易ID' => $value->id,
                '交易类型' => $value->paytype,
                '交易人' => $value->name,
                '交易金额' => $value->money,
                '交易备注' => $value->remarks,
                '交易时间' => $value->created_at
                );
        }
        Array_unshift($cellData,['交易ID','交易类型','交易人','交易金额','交易备注','交易时间']);
        Excel::create(time(), function ($excel) use ($cellData) {
            $excel->sheet('Sheet1', function ($sheet) use ($cellData) {
                $sheet->rows($cellData);
            });
        })->export('xls');
    }

    /**
     * 更新状态
     * @param $id
     *
     */
    public function  update_state($id)
    {
        $state = request()->input('state');
        $num = MemberInfo::where('id', $id)
            ->update(['state' => $state]);
        if ($num > 0) {
            return response()->json(['status' => 1, 'message' => '操作成功！']);
        } else {
            return response()->json(['status' => 0, 'message' => '操作失败！']);;
        }
    }

    /**
     * 保存
     * @param Request $request
     */
    public function save(Request $request)
    {
        $Memberin = new MemberInfo();
        $id = $request->input('id');
        if (!empty($id)) {
            $Memberin = MemberInfo::find($id);
        }
        $validator = Validator::make($request->input(), [
            'MemberInfo.registerphone' => 'required|unique:memberinfo,registerphone,' . $id,
            'MemberInfo.name' => 'required',
            'MemberInfo.email' => 'required|email',
            'MemberInfo.idcard' => 'required',
            'MemberInfo.pwd' => 'required',
            'MemberInfo.pwd' => 'required|confirmed',
            'MemberInfo.pwd_confirmation' => 'required',
        ], [
            'required' => ':attribute 为必填项',
            'confirmed' => '密码不一致',
            'email' => ':attribute 格式错误',
            'unique' => ':attribute 为唯一性',

        ], [
            'MemberInfo.registerphone' => '手机号',
            'MemberInfo.name' => '姓名',
            'MemberInfo.email' => 'Email',
            'MemberInfo.idcard' => '身份证',
            'MemberInfo.pwd' => '密码',
            'MemberInfo.pwd_confirmation' => '确认密码',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = $request->input('MemberInfo');
        $Memberin->registerphone = $data['registerphone'];
        $Memberin->name = $data['name'];
        $Memberin->email = $data['email'];
        $Memberin->idcard = $data['idcard'];
        $Memberin->pwd = $data['pwd'];
        $Memberin->level = $data['level'];
        if ($Memberin->save()) {
            return redirect('admin/Member')->with('success', '保存成功!');
        } else {
            return redirect()->back();
        }
    }
}
