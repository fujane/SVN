@extends('layout.admin')
@section('content')
    <section class="content-header">
        <h1>
            会员管理
            <small>列表</small>
        </h1>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h4><i class="icon fa fa-check"></i>success</h4>

                        <p><strong>成功!</strong> {{Session::get('success')}}</p>
                    </div>
                @endif
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>

                        <div class="pull-right">
                            <div class="form-inline pull-right">
                                <form action="/admin/Member" method="get" pjax-container>
                                    <fieldset>

                                        <div class="input-group input-group-sm">
                                            <span class="input-group-addon"><strong>Id</strong></span>
                                            <input type="text" class="form-control" placeholder="Id" name="id" value="">
                                        </div>

                                        <div class="btn-group btn-group-sm">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                            </button>
                                            <a href="/admin/Member" class="btn btn-warning"><i
                                                        class="fa fa-undo"></i></a>
                                        </div>

                                    </fieldset>
                                </form>
                            </div>
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="/admin/Member/create" class="btn btn-sm btn-success">
                                    <i class="fa fa-save"></i>&nbsp;&nbsp;新增
                                </a>
                            </div>

                        </div>
                        <span>
                             <a class="btn btn-sm btn-primary grid-refresh"><i class="fa fa-refresh"></i> 刷新</a>
                        </span>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>会员ID
                                </th>
                                <th>名称</th>
                                <th>手机号</th>
                                <th>Email</th>
                                <th>身份证</th>
                                <th>会员级别</th>
                                <th>状态</th>
                                <th>注册时间</th>
                                <th>操作</th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td><a href="{{url('admin/Member/edit',['id'=>$user->id])}}">{{ $user->id }}</a>
                                    </td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->registerphone }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->idcard }}</td>
                                    <td>
                                        @if ($user->level =="0")<span class="badge bg-gray">普通会员</span>
                                        @elseif($user->level =="1")<span class="badge bg-red">VIP会员</span>
                                        @elseif($user->level =="2")<span class="badge bg-light-blue">蓝钻会员</span>
                                        @elseif($user->level =="3")<span class="badge bg-yellow">黄钻会员</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($user->state =="0")<span class="label label-primary">启用</span>
                                        @else($user->state =="-1")<span class="label label-danger">禁用</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->created_at }}</td>

                                    <td>
                                        <a href="{{url('admin/Member/edit',['id'=>$user->id])}}">
                                            <i class="fa fa-edit"></i>
                                        </a>&nbsp;&nbsp;
                                        <a class="grid-row-delete" href="javascript:void(0);" data-id="{{$user->id}}">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                        @if ($user->state =="-1")
                                            &nbsp;&nbsp;
                                            <a class="grid-row-eye" href="javascript:void(0);" data-id="{{$user->id}}">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        @else
                                            &nbsp;&nbsp;
                                            <a  class="grid-row-slash" href="javascript:void(0);" data-id="{{$user->id}}">
                                                <i class="fa fa-eye-slash"></i>
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        $(function () {
            $('.grid-row-delete').unbind('click').click(function () {
                if (confirm("确认删除?")) {
                    $.ajax({
                        method: 'post',
                        url: '/admin/Member/delete/' + $(this).data('id'),
                        data: {
                            _method: 'delete',
                            _token: LA.token
                        },
                        success: function (data) {
                            $.pjax.reload('#pjax-container');
                            if (typeof data === 'object') {
                                if (data.status) {
                                    toastr.success(data.message);
                                } else {
                                    toastr.error(data.message);
                                }
                            }
                        }
                    });
                }
            });
            $('.grid-row-eye').unbind('click').click(function () {
                if (confirm("确认操作?")) {
                    update_state(0,$(this).data('id'));
                }
            });

            $('.grid-row-slash').unbind('click').click(function () {
                if (confirm("确认操作?")) {
                    update_state(-1,$(this).data('id'));
                }
            });
            $('.grid-refresh').on('click', function () {

                $.pjax.reload('#pjax-container');
                toastr.success('刷新成功 !');
            });

            $('.grid-per-pager').on("change", function (e) {
                $.pjax({url: this.value, container: '#pjax-container'});
            });


        });

        //更新状态
        function update_state(state,id){
            $.ajax({
                method: 'post',
                url: '/admin/Member/update_state/' + id,
                data: {
                    _token: LA.token,
                    'state':state
                },
                success: function (data) {
                    $.pjax.reload('#pjax-container');
                    if (typeof data === 'object') {
                        if (data.status) {
                            toastr.success(data.message);
                        } else {
                            toastr.error(data.message);
                        }
                    }
                }
            });
        }
    </script>
@endsection
