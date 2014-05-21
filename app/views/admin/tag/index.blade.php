@extends('admin.layouts.construct')

@section('breadcrumb')
<li class="active">標籤管理</li>
@stop

@section('page-header')
標籤管理
<small>設定標籤更易搜尋</small>
@stop

@section('page-content')
<div class="col-md-12">
    <div class="widget-box">
        <div class="widget-header"><h4>新增標籤</h4></div>
    </div>
    <div class="widget-body">
        @if(Session::has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong>
                <i class="fa fa-times"></i>
                {{ Session::get('error') }}
            </strong>
        </div>
        @elseif (Session::has('success'))
        <div class="alert alert-block alert-success">
            <button type="button" class="close" data-dismiss="alert">
                <i class="fa fa-times"></i>
            </button>
            <strong>
                <i class="fa fa-check"></i>
                {{ Session::get('success') }}
            </strong>
        </div>
        @endif
        <div class="widget-main">
            {{ Form::open(array('url' => '/admin/tag', 'class' => 'form-search', 'method' => 'POST')) }}
            <div class="row">
                <div class="col-xs-12 col-sm-8">
                    <div class="col-sm-5">
                        <input type="text" class="form-control" placeholder="請輸入要新增的標籤" name="tag">
                    </div>
                    <div class="col-sm-5">
                        <select class="selectpicker" name="category">
                            <option value="{{ Tags::CATEGORY_PEOPLE }}">人名</option>
                            <option value="{{ Tags::CATEGORY_LOCATION }}">地名</option>
                            <option value="{{ Tags::CATEGORY_EVENT }}">活動/事件</option>
                            <option value="{{ Tags::CATEGORY_BUILDING }}">機關名稱/設施名稱</option>
                            <option value="{{ Tags::CATEGORY_OTHER }}">其他</option>
                        </select>
                    </div>
                    <div class="col-sm-2">
                        <span class="input-group-btn"><button type="submit" class="btn btn-purple btn-sm"><i class="fa fa-plus bigger-110"></i>新增</button></span>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
    <hr />
    <div class="col-md-12">
        <div class="tabbable tabs-left">
            <ul class='nav nav-tabs'>
                <li class="active">
                    <a data-toggle="tab" href="#people"><i class="blue fa fa-user bigger-110"></i> 人物</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#location"><i class="blue fa fa-location-arrow bigger-110"></i> 地名</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#event"><i class="blue fa fa-calendar bigger-110"></i> 活動、事件</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#building"><i class="blue fa fa-building-o bigger-110"></i> 機關、設施</a>
                </li>
                <li>
                    <a data-toggle="tab" href="#other"><i class="blue fa fa-question bigger-110"></i> 其他</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="people" class="tab-pane in active">
                    @include('admin.tag.tab', array('tagitems' => $tags[1]))
                </div>
                <div id="location" class="tab-pane">
                    @include('admin.tag.tab', array('tagitems' => $tags[2]))
                </div>
                <div id="event" class="tab-pane">
                    @include('admin.tag.tab', array('tagitems' => $tags[3]))
                </div>
                <div id="building" class="tab-pane">
                    @include('admin.tag.tab', array('tagitems' => $tags[4]))
                </div>
                <div id="other" class="tab-pane">
                    @include('admin.tag.tab', array('tagitems' => $tags[0]))
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('external_style')
<link rel="stylesheet" href="/packages/bootstrap-select/bootstrap-select.min.css" />
@stop

@section('inline_style')
.tag-grid li {
    border: 0px;
}
@stop

@section('external_js')
<script src="/packages/bootstrap-select/bootstrap-select.min.js"></script>
@stop

@section('inline_js')
$(function() {
    $('.selectpicker').selectpicker();

    $('a.delete-link').on('click', function(ev) {
        var id = $(this).attr('data-id'),
            name = $(this).attr('data-name'),
            form = $('#del-form-' + id);

        bootbox.confirm('請確定要刪除此標籤<' + name + '>', function(result) {
            if(result) {
                form.submit();
            }
        });
    });
});
@stop
