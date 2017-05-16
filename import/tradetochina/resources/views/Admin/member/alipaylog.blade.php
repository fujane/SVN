@extends('layout.admin')
@section('content')
    <section class="content-header">
        <h1>
            购买记录管理
            <small>列表</small>
        </h1>

    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title"></h3>

                        <div class="pull-right">
                            <div class="form-inline pull-right">
                                <form action="/admin/Member/alipaylog" method="get" pjax-container>
                                    <fieldset>
                                        <a class="btn btn-sm btn-twitter" href="/admin/Member/excel" target="_blank">
                                            <i class="fa fa-download"></i>
                                            导出
                                        </a>
                                        <div class="input-group input-group-sm" style="width: 230px">
                                            <span class="input-group-addon"><strong>关键字</strong></span>
                                            <input type="text" class="form-control" placeholder="手机号、会员编号、会员姓名" name="keyword" value="">
                                        </div>

                                        <div class="btn-group btn-group-sm">
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i>
                                            </button>
                                            <a href="/admin/Member/alipaylog" class="btn btn-warning"><i
                                                        class="fa fa-undo"></i></a>
                                        </div>

                                    </fieldset>
                                </form>
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
                                <th>交易ID
                                </th>
                                <th>交易类型</th>
                                <th>交易人</th>
                                <th>交易金额</th>
                                <th>交易备注</th>
                                <th>交易时间</th>

                            </tr>
                            @foreach ($alipaylogs as $alipaylog)
                                <tr>
                                    <td>{{ $alipaylog->id }}</td>
                                    <td>{{ $alipaylog->paytype }}</td>
                                    <td>{{ $alipaylog->name }}</td>
                                    <td>{{ $alipaylog->money }}</td>
                                    <td>{{ $alipaylog->remarks }}</td>
                                    <td>{{ $alipaylog->created_at }}</td>

                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="box-footer clearfix">
                        {{$alipaylogs->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script type="text/javascript">
        $(function () {

            $('.grid-refresh').on('click', function () {

                $.pjax.reload('#pjax-container');
                toastr.success('刷新成功 !');
            });

            $('.grid-per-pager').on("change", function (e) {
                $.pjax({url: this.value, container: '#pjax-container'});
            });


        });

    </script>
@endsection
