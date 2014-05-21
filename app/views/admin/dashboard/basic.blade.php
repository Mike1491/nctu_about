@extends('admin/layouts/construct')

@section('breadcrumb')
<li>個人資料</li>
<li class="active">基本資料</li>
@stop

@section('page-header')
個人資料
<small>
<i class="fa fa-angle-double-right"></i> 基本資料
</small>
@stop

@section('page-content')
<div class="col-xs-12">
    {{ Form::open(array('class' => 'form-horizontal', 'role' => 'form', 'url' => '/admin/dashboard/basic')) }}
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="username"> 使用者帳號 </label>
        <div class="col-sm-9">
            <span class="lead"><strong>{{ $user->username }}</strong></span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="cname"> 中文名</label>
        <div class="col-sm-9">
            <input type="text" id="cname" name="cname" placeholder="中文名" class="col-xs-10 col-sm-5" value="{{ $user->cname }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="ename"> 英文名</label>
        <div class="col-sm-9">
            <input type="text" id="ename" name="ename" placeholder="英文名" class="col-xs-10 col-sm-5" value="{{ $user->ename }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="welcome_text"> 歡迎詞</label>
        <div class="col-sm-9">
            <input type="text" id="welcome_text" name="welcome_text" placeholder="歡迎詞" class="col-xs-10 col-sm-5" value="{{ $user->welcome_text }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="company"> 任職公司</label>
        <div class="col-sm-9">
            <input type="text" id="company" name="company" placeholder="任職公司" class="col-xs-10 col-sm-5" value="{{ $user->company }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="position"> 目前職稱</label>
        <div class="col-sm-9">
            <input type="text" id="position" name="position" placeholder="目前職稱" class="col-xs-10 col-sm-5" value="{{ $user->position }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="slogan"> 座右銘</label>
        <div class="col-sm-9">
            <input type="text" id="slogan" name="slogan" placeholder="座右銘" class="col-xs-10 col-sm-5" value="{{ $user->slogan }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="description"> 自介</label>
        <div class="col-sm-9">
            <textarea class="col-xs-10 col-sm-5" rows="5" placeholder="自介" name="description">{{ $user->description }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="customers"> 客戶數</label>
        <div class="col-sm-9">
            <input type="text" id="customers" name="customers" placeholder="ex: 10" class="col-xs-6 col-sm-1" value="{{ $user->customers }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="experience"> 工作經歷</label>
        <div class="col-sm-9">
            <input type="text" id="experience" name="experience" placeholder="ex: 10" class="col-xs-6 col-sm-1" value="{{ $user->experience }}"> &nbsp;<span class="bigger-110">年</span>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="awards"> 獲獎數</label>
        <div class="col-sm-9">
            <input type="text" id="awards" name="awards" placeholder="ex: 10" class="col-xs-6 col-sm-1" value="{{ $user->awards }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="projects"> 專案數</label>
        <div class="col-sm-9">
            <input type="text" id="projects" name="projects" placeholder="ex: 10" class="col-xs-6 col-sm-1" value="{{ $user->projects }}">
        </div>
    </div>
    <div class="clearfix form-actions">
        <div class="col-md-offset-3 col-md-9">
            <button class="btn btn-info" type="submit">
                <i class="icon-ok fa fa-check bigger-110"></i> 儲存
            </button>
            &nbsp;&nbsp;&nbsp;
            <button class="btn" type="reset">
                <i class="icon-undo fa fa-repeat bigger-110"></i> 取消
            </button>
        </div>
    </div>
    {{ Form::close() }}
</div>
@stop
