<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class IndexController extends Controller
{

    public function index()
    {
        return view('Home/index');
    }

    public function  redisdemo()
    {
        //Redis:: sort ( 'tab' ) ;   //返回array(2,3,17)

        //使用参数,可组合使用 array('sort' => 'desc','limit' => array(1, 2))
        // Redis::sort ( 'tab' , array ( 'sort'  =>  'desc' ) ) ;   //降序排列,返回array(17,3,2)
//        $index = $_GET['page'];
//        $tab = Redis::lrange('tab', ($index * 20), (($index * 20) + 20));
////        $tab=Redis::sort('tab' , array ('limit'  =>  array (11,10)) ) ;   //返回顺序位置中1的元素2个(这里的2是指个数,而不是位置),返回array(3,17)
//        $recount = Redis::llen('tab');
//        echo '总条数：'.$recount;
//        echo  '<br/> 总页数：'.floor($recount/20);
//        dd($tab);
//        exit;
//        Redis::sort('tab', array('limit' => array('alpha' => true)));  //按首字符排序返回array(17,2,3),因为17的首字符是'1'所以排首位置
//        Redis::sort('tab', array('limit' => array('store' => 'ordered')));  //表示永久性排序,返回元素个数
//        Redis::sort('tab', array('limit' => array('get' => 'pre_*')));  //使用了通配符'*'过滤元素,表示只返回以'pre_'开头的元素

//        session('name',[
//            'user'=>'张三',
//            'age'=>'28'
//        ]);
    }

    public function page_mysql()
    {

        $users = DB::table('user')->paginate(15);
        dd($users);
    }

    public function  redis_demo()
    {
        $users = DB::table('members')->get();
        for ($i = 0; $i < 10000; $i++) {
            foreach ($users as $info) {
                Redis:: rpush('tab', json_encode($info));
            }
        }
    }

    public function  insert_demo()
    {
        //john@example.com
        $arr = array();
        for ($i = 0; $i < 5000; $i++) {
            $ar = [
                'Username' => 'zhangsan' . $i,
                'Password' => 'c3284d0f94606de1fd2af172aba15bf3',
                'UserLevel' => '1',
                'Description' => 'admin',
                'Status' => '1',
                'DateCreated' => '2013-11-08 15:19:29',
                'DateModified' => '2013-11-08 15:19:29'
            ];
            $arr[$i] = $ar;
        }
        DB::table('user')->insert(
            $arr
        );


    }


    public function demo_test()
    {

        $users = DB::table('demo')->get();
        dd($users);
    }


    public function  insert_test()
    {

        DB::table('demo')->insert(
            [
                'name' => 'hello_li',
                'content' => 'hello word! this is insert',
            ]
        );
    }


    public function  session_demo(Request $request)
    {

//        session('name',[
//           'user'=>'张三',
//            'age'=>'28'
//        ]);
        $request->session()->put('lang', 'en');

        $value = $request->session()->get('name');
        var_dump(session('name'));

    }


}
