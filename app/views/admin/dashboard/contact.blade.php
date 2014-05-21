@extends('admin/layouts/construct')

@section('breadcrumb')
<li>個人資料</li>
<li class="active">基本資料</li>
@stop

@section('page-header')
個人資料
<small>
<i class="fa fa-angle-double-right"></i> 聯絡方式
</small>
@stop

@section('page-content')
<div class="col-xs-12">
    {{ Form::open(array('class' => 'form-horizontal', 'role' => 'form', 'url' => '/admin/dashboard/contact')) }}
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="address"> 地址</label>
        <div class="col-sm-9">
            <input type="text" id="address" name="address" placeholder="地址" class="col-xs-10 col-sm-5" value="{{ $contact->address }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="phone"> 電話</label>
        <div class="col-sm-9">
            <input type="text" id="phone" name="phone" placeholder="電話" class="col-xs-10 col-sm-5" value="{{ $contact->phone }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="cellphone"> 行動電話</label>
        <div class="col-sm-9">
            <input type="text" id="cellphone" name="cellphone" placeholder="行動電話" class="col-xs-10 col-sm-5" value="{{ $contact->cellphone }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="email"> 電子郵件</label>
        <div class="col-sm-9">
            <input type="text" id="email" name="email" placeholder="電子郵件" class="col-xs-10 col-sm-5" value="{{ $contact->email }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right" for="website"> 個人網站</label>
        <div class="col-sm-9">
            <input type="text" id="website" name="website" placeholder="個人網站" class="col-xs-10 col-sm-5" value="{{ $contact->website }}">
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
