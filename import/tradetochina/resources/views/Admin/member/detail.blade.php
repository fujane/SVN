@extends('layout.admin')
@section('content')
    <section class="content-header">
        <h1>
            Users
            <small>edit</small>
        </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">编辑</h3>

                        <div class="box-tools">
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="/admin/demo/users" class="btn btn-sm btn-default"><i class="fa fa-list"></i>&nbsp;列表</a>
                            </div>
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a class="btn btn-sm btn-default form-history-back"><i class="fa fa-arrow-left"></i>&nbsp;返回</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="/admin/Member/save" method="post" accept-charset="UTF-8"
                          class="form-horizontal">
                        <div class="box-body">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class=active>
                                        <a href="#tab-form-1" data-toggle="tab">
                                            Basic <i class="fa fa-exclamation-circle text-red hide"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#tab-form-2" data-toggle="tab">
                                            Password <i class="fa fa-exclamation-circle text-red hide"></i>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content fields-group">
                                    <div class="tab-pane active" id="tab-form-1">
                                        <div class="fields-group">
                                            <div class="form-group {{empty($errors->first('MemberInfo.registerphone')) ? "" : "has-error"}}">
                                                <label for="registerphone" class="col-sm-2 control-label">手机号</label>
                                                <div class="col-sm-8">
                                                    @if(!empty($errors->first('MemberInfo.registerphone')))
                                                        <label class="control-label" for="inputError">
                                                            <i class="fa fa-times-circle-o"></i>
                                                            {{$errors->first('MemberInfo.registerphone')}}
                                                        </label>
                                                        <br>
                                                    @endif
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" id="registerphone" name="MemberInfo[registerphone]"
                                                               value="{{old('MemberInfo')['registerphone']?old('MemberInfo')['registerphone']:$memberinfo->registerphone}}"
                                                               class="form-control registerphone" placeholder="输入手机号"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group {{empty($errors->first('MemberInfo.name')) ? "" : "has-error"}}">
                                                <label for="name" class="col-sm-2 control-label">名称</label>
                                                <div class="col-sm-8">
                                                    @if(!empty($errors->first('MemberInfo.name')))
                                                        <label class="control-label" for="inputError">
                                                            <i class="fa fa-times-circle-o"></i>
                                                            {{$errors->first('MemberInfo.name')}}
                                                        </label>
                                                        <br>
                                                    @endif
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" name="MemberInfo[name]" class="form-control" id="name"
                                                               value="{{old('MemberInfo')['name']?old('MemberInfo')['name']:$memberinfo->name}}"
                                                               placeholder="输入名称" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group {{empty($errors->first('MemberInfo.email')) ? "" : "has-error"}}">
                                                <label for="email" class="col-sm-2 control-label">Email</label>
                                                <div class="col-sm-8">
                                                    @if(!empty($errors->first('MemberInfo.email')))
                                                        <label class="control-label" for="inputError">
                                                            <i class="fa fa-times-circle-o"></i>
                                                            {{$errors->first('MemberInfo.email')}}
                                                        </label>
                                                        <br>
                                                    @endif
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" id="email" name="MemberInfo[email]"
                                                               value="{{old('MemberInfo')['email']?old('MemberInfo')['email']:$memberinfo->email}}" class="form-control email"
                                                               placeholder="输入Email"/>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group {{empty($errors->first('MemberInfo.idcard')) ? "" : "has-error"}}">
                                                <label for="idcard" class="col-sm-2 control-label">身份证</label>
                                                <div class="col-sm-8">
                                                    @if(!empty($errors->first('MemberInfo.idcard')))
                                                        <label class="control-label" for="inputError">
                                                            <i class="fa fa-times-circle-o"></i>
                                                            {{$errors->first('MemberInfo.idcard')}}
                                                        </label>
                                                        <br>
                                                    @endif
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                                        <input type="text" id="idcard" name="MemberInfo[idcard]"
                                                               value="{{old('MemberInfo')['idcard']?old('MemberInfo')['idcard']:$memberinfo->idcard}}" class="form-control idcard"
                                                               placeholder="输入身份证"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group {{empty($errors->first('MemberInfo.pwd')) ? "" : "has-error"}}">
                                                <label for="pwd" class="col-sm-2 control-label">密码</label>
                                                <div class="col-sm-8">
                                                    @if(!empty($errors->first('MemberInfo.pwd')))
                                                        <label class="control-label" for="inputError">
                                                            <i class="fa fa-times-circle-o"></i>
                                                            {{$errors->first('MemberInfo.pwd')}}
                                                        </label>
                                                        <br>
                                                    @endif
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>
                                                        <input type="password" id="pwd" name="MemberInfo[pwd]"
                                                               value="{{old('MemberInfo')['pwd']?old('MemberInfo')['pwd']:$memberinfo->pwd}}"
                                                               class="form-control pwd" placeholder="输入 密码"/>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group {{empty($errors->first('MemberInfo.pwd')) ? "" : "has-error"}}">
                                                <label for="password_confirmation" class="col-sm-2 control-label">确认密码</label>
                                                <div class="col-sm-8">
                                                    @if(!empty($errors->first('MemberInfo.pwd_confirmation')))
                                                        <label class="control-label" for="inputError">
                                                            <i class="fa fa-times-circle-o"></i>
                                                            {{$errors->first('MemberInfo.pwd_confirmation')}}
                                                        </label>
                                                        <br>
                                                    @endif
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-eye-slash"></i></span>

                                                        <input type="password" id="pwd_confirmation"
                                                               name="MemberInfo[pwd_confirmation]" value="{{old('MemberInfo')['pwd_confirmation']?old('MemberInfo')['pwd_confirmation']:$memberinfo->pwd}}"
                                                               class="form-control password_confirmation" placeholder="输入 确认密码"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="tab-pane " id="tab-form-2">
                                        <div class="form-group 1">
                                            <label for="password" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-eye-slash"></i></span>
                                                    <input type="password" id="password" name="password" value=""
                                                           class="form-control password" placeholder="输入 Password"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group 1">
                                            <label for="password_confirmation" class="col-sm-2 control-label">Password
                                                confirmation</label>
                                            <div class="col-sm-8">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i
                                                                class="fa fa-eye-slash"></i></span>
                                                    <input type="password" id="password_confirmation"
                                                           name="password_confirmation" value=""
                                                           class="form-control password_confirmation"
                                                           placeholder="输入 Password confirmation"/>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            {{csrf_field()}}
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-8">
                                <div class="btn-group pull-right">
                                    <button type="submit" class="btn btn-info pull-right"
                                            data-loading-text="<i class='fa fa-spinner fa-spin '></i> 提交">提交
                                    </button>
                                </div>
                                <div class="btn-group pull-left">
                                    <button type="reset" class="btn btn-warning">撤销</button>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="_tabmethod" id="_tabmethod" value="tab-form-1"/>
                        <!-- /.box-footer -->
                    </form>
                </div>

            </div>
        </div>
    </section>
@section('script')
    <script data-exec-on-popstate>
        $(function () {
            var hash = document.location.hash;
            if (hash) {
                $("#_tabmethod").val(hash);
                $('.nav-tabs a[href="' + hash + '"]').tab('show');
            }
            $('.nav-tabs a').on('shown.bs.tab', function (e) {
                $("#_tabmethod").val(e.target.hash);
                history.pushState(null,null, e.target.hash);
            });
            if ($('.has-error').length) {
                $('.has-error').each(function () {
                    var tabId = '#'+$(this).closest('.tab-pane').attr('id');
                    $('li a[href="'+tabId+'"] i').removeClass('hide');
                });
                var first = $('.has-error:first').closest('.tab-pane').attr('id');
                $('li a[href="#'+first+'"]').tab('show');
            }
            $('.form-history-back').on('click', function () {
                event.preventDefault();
                history.back(1);
            });
        });
    </script>
@endsection
@endsection