@extends('layout.admin')
@section('content')
    <section class="content-header">
        <h1>
            会员信息
            <small>{{empty($info->id) ? '创建':'编辑' }}</small>
        </h1>
    </section>
    <section class="content">
        @if(Session::has('error'))
        <div class="alert alert-danger alert-dismissable" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-ban"></i>error</h4>
            <p><strong>失败!</strong>{{Session::get('error')}}</p>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">{{empty($info->id) ? '创建':'编辑' }}</h3>

                        <div class="box-tools">
                            <div class="btn-group pull-right" style="margin-right: 10px">
                                <a href="/admin/info" class="btn btn-sm btn-default"><i
                                            class="fa fa-list"></i>&nbsp;列表</a>
                            </div>

                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form action="/admin/info/save" method="post" accept-charset="UTF-8"
                          class="form-horizontal">
                        <div class="box-body">
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

                                <div class="form-group {{empty($errors->first('MemberInfo.level')) ? "" : "has-error"}}">
                                    <label for="level" class="col-sm-2 control-label">会员级别</label>
                                    <div class="col-sm-8">
                                        @if(!empty($errors->first('MemberInfo.level')))
                                            <label class="control-label" for="inputError">
                                                <i class="fa fa-times-circle-o"></i>
                                                {{$errors->first('MemberInfo.level')}}
                                            </label>
                                            <br>
                                        @endif
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                            <select id="level" name="MemberInfo[level]" class="form-control">
                                                <option  value="0" {{(old('MemberInfo')['level']?old('MemberInfo')['level']:$memberinfo->level)==0 ?"selected=''":""}}>普通会员</option>
                                                <option  value="1" {{(old('MemberInfo')['level']?old('MemberInfo')['level']:$memberinfo->level)==1 ?"selected=''":""}}>VIP会员</option>
                                                <option value="2" {{(old('MemberInfo')['level']?old('MemberInfo')['level']:$memberinfo->level)==2 ?"selected=''":""}}>蓝钻会员</option>
                                                <option value="3" {{(old('MemberInfo')['level']?old('MemberInfo')['level']:$memberinfo->level)==3 ?"selected=''":""}}>黄钻会员</option>
                                            </select>
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
                        <div class="box-footer">
                            {{csrf_field()}}
                            <div class="col-sm-2">
                            </div>
                            <div class="col-sm-8">
                                <div class="btn-group pull-right">
                                    <input type="hidden" name="id" value="{{$memberinfo->id}}">
                                    <button type="submit" class="btn btn-info pull-right"
                                            data-loading-text="<i class='fa fa-spinner fa-spin '></i> 提交">提交
                                    </button>
                                </div>
                                <div class="btn-group pull-left">
                                    <button type="reset" class="btn btn-warning">撤销</button>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-footer -->
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection