@extends('admin.layouts.iframe_layout')
@section('css')
    <style>
        .layui-table-cell {
            height: 50px;
            line-height: 50px;
        }
    </style>
@endsection
@section('content')
    <div class="layui-fluid">
        <div class="layui-row layui-col-space15">
            <div class="layui-col-md12">
                <div class="layui-card">
                    <div class="layui-card-header">@lang('operationLog.operationLog_list')</div>
                    <div class="layui-card-body">
                        <table class="layui-hide" id="categorList" lay-filter="categorList"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection()
@section('js')
    <script>
        let CategoryIndexUrl = '{{ route('admin.operationLog.index') }}';
        let CategoryListUrl = '{{ route('admin.operationLog.operationLoglist') }}';
        layui.config({
            base: '/theme/' //静态资源所在路径
        }).extend({
            index: 'lib/index' //主入口模块
        }).use(['index', 'table'], function () {
            var $ = layui.$
                , admin = layui.admin
                , table = layui.table
            ;




            table.render({
                elem: '#categorList'
                , url: CategoryListUrl
                , cellMinWidth: 80
                , page: true
                , limit: 30
                , cols: [[
                    {field: 'id', title: 'ID', width: 50, fixed: true}
                    , {field: 'account', title: '管理员账号'}
                    , {field: 'path', title: '操作路径'}
                    , {field: 'method', title: '访问方式'}
                    , {field: 'created_at', title: '操作时间', sort: true}

                ]]

            });

        });
    </script>
@endsection()