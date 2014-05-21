@extends('admin.layouts.construct')

@sectio"('breadcrumb')
<li><a href="/admin/event">事件管理</a></li>
"li class="active">{{ $event->id ? '編輯' : '新增' }}</li>
@stop

@section('page-header')
事件管理
<small>
    <i class="fa fa-angle-double-right"></i> 新增
</small>
@stop

@section('page-content')
<div class="col-sm-12">
    <div class="tabbable">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#info"><i class="green fa fa-info-circle bigger-110"></i> 事件資訊</a></li>
            @if($event->id)
            <li><a data-toggle="tab" href="#photos"><i class="blue fa fa-picture-o bigger-110"></i> 事件照片</a></li>
            <li><a data-toggle="tab" href="#dropzone"><i class="blue fa fa-cloud-upload bigger-110"></i> 上傳媒體 </a></li>
            @endif
        </ul>
        <div class="tab-content">
            <div id="info" class="tab-pane active row">
                <div class="col-xs-12">
                <span class="red">* 爲必填欄位</span>
                {{ Form::open(array('url' => '/admin/event' . ($event->id ? '/' . $event->id : ''), 'class' => 'form-horizontal', 'role' => 'form', 'method' => ($event->id ? 'PUT' : 'POST'))) }}
                    @if ($event->id)
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="serial">編號</label>
                        <div class="col-sm-9"><span class="lead"><strong>{{ $event->getSerial() }}</strong></span></div>
                    </div>
                    <div class="space-4"></div>
                    @endif
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="topic">事件標題<span class="red">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" id="topic" name="topic" placeholder="請輸入事件標題" class="col-xs-12" value="{{ $event->topic }}" data-validation="required">
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="start_date">起始日期<span class="red">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" id="start_date" name="start_date" placeholder="1981-11-16 (請輸入西園年月日，皆須兩碼，若不知正確日期請填00)" class="col-xs-12" value="{{ $event->start_date }}" data-validation="custom" data-validation-regexp="^([0-9]{4}-[0-9]{2}-[0-9]{2})$">
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="start_date">結束日期<span class="red">*</span></label>
                        <div class="col-sm-9"><input type="text" id="end_date" name="end_date" placeholder="1981-11-16 (請輸入民國年月日，皆須兩碼，若不知正確日期請填00)" class="col-xs-12" value="{{ $event->end_date }}" data-validation="custom" data-validation-regexp="^([0-9]{4}-[0-9]{2}-[0-9]{2})$"></div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="description">事件描述</label>
                        <div class="col-sm-9">
                            <textarea class="col-xs-12 autosize-transition" rows="3" id="description" name="description" placeholder="事件描述">{{ $event->description }}</textarea>
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="tags">事件標籤</label>
                        <div class="col-sm-9">
                            <input class="col-xs-10" type="text" name="tags" id="tags" value="{{ implode(',', $event->getTags()) }}" placeholder="請輸入標籤">
                        </div>
                    </div>
                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="note">備註</label>
                        <div class="col-sm-9">
                            <textarea class="col-xs-12 autosize-transition" rows="3" id="note" name="note" placeholder="事件備註">{{ $event->note }}</textarea>
                        </div>
                    </div>
                    @if ($event->reminder)
                    <div class="space-4"></div>
                    <div class="row">
                        <div class="col-xs-12 widget-container-span">
                            <div class="widget-box transparent">
                                <div class="widget-header">
                                    <h4 class="lighter">舊資料記錄</h4>
                                </div>
                                <div class="widget-body">
                                    <div class="widget-main padding-6 no-padding-left no-padding-right">
                                        <pre>{{{ $event->reminder }}}</pre>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="space-4"></div>
                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            @if ($event->id)
                            <button class="btn btn-info" type="submit"><i class="fa fa-check bigger-110"></i> 更新</button>

                            @else
                            <button class="btn" type="reset"><i class="fa fa-undo bigger-110"></i> 重新填寫</button>
                            &nbsp; &nbsp; &nbsp;
                            <button class="btn btn-info" type="submit"><i class="fa fa-check bigger-110"></i> 下一步</button>
                            @endif
                        </div>
                    </div>
                {{ Form::close() }}
                </div>
            </div>
            <div id="photos" class="tab-pane row">
                @if ($event->id)
                <div class="col-md-12">
                    <div class="row-fluid">
                        <ul class="ace-thumbnails">
                        @foreach($photos as $photo)
                            <li>
                                <div>
                                    <img src="/jit/2/170/170/5{{ $photo->getPath() }}">
                                    <div class="text">
                                        <div class="inner">
                                            <span>{{ $photo->title or "未命名" }}</span><br />
                                            <a href="{{ $photo->getPath() }}" class="cboxElement" data-rel="colorbox">
                                                <i class="fa fa-arrows-alt"></i>
                                            </a>
                                            <a>
                                                <i class="red fa fa-trash-o"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                </div>
                @endif
                <div style="clear:both"></div>
            </div>
            <div id="dropzone" class="tab-pane row">
                <form id="photo-dropzone" action="/admin/upload/{{ $event->id }}" class="dropzone">
                    <div class="fallback">
                        <input type="file" name="file" />
                    </div>
                </form>
                <hr />
                <div style="clear:both"></div>
            </div>
        </div>
    </div>
</div>
@stop

@section('external_style')
<link rel="stylesheet" href="/packages/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.min.css" />
<link rel="stylesheet" href="/styles/dropzone.css" />
<link rel="stylesheet" href="/styles/colorbox.css" />
@stop

@section('external_js')
<script src="/packages/jquery-autosize/jquery.autosize.min.js"></script>
<script src="/packages/jquery-maskedinput/dist/jquery.maskedinput.min.js"></script>
<script src="/packages/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js"></script>
<script src="/packages/dropzone/downloads/dropzone.min.js"></script>
<script src="/packages/colorbox/jquery.colorbox-min.js"></script>
@stop

@section('inline_js')
$(function() {
    // input mask
    $('#start_date').mask('9999-99-99');
    $('#end_date').mask('9999-99-99');
    $('textarea[class*=autosize]').autosize({append: "\n"});

    // tags initial
    $.getJSON('/admin/tag/list', function(result) {
        $('#tags').tokenfield({
            autocomplete: {
                source: result,
                minLength: 1,
                delay: 100
            }
        });
    });


    var colorbox_params = {
        reposition:true,
        scalePhotos:true,
        scrolling:false,
        previous:'<i class="icon-arrow-left"></i>',
        next:'<i class="icon-arrow-right"></i>',
        close:'&times;',
        current:'{current} of {total}',
        maxWidth:'100%',
        maxHeight:'100%',
        onOpen:function(){
            document.body.style.overflow = 'hidden';
        },
        onClosed:function(){
            document.body.style.overflow = 'auto';
        },
        onComplete:function(){
            $.colorbox.resize();
        }
    };

    $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);

    Dropzone.options.photoDropzone = {
        paramName: "file",
        maxFilesize: 20, // MB
        addRemoveLinks: false,
        acceptedFiles: "image/*",
        parallelUploads: 1,
        uploadMultiple: false,
        dictDefaultMessage: "<span class=\"bigger-150 bolder\"><i class=\"icon-caret-right red\"></i> 拖曳檔案</span>來進行上傳 <span class=\"smaller-80 grey\">(或是點擊上傳)</span> <br /><i class=\"upload-icon icon-cloud-upload blue icon-3x\"></i>",
        dictResponseError: 'Error while uploading file!',
        previewTemplate: "<div class=\"dz-preview dz-file-preview\">\n  <div class=\"dz-details\">\n    <div class=\"dz-filename\"><span data-dz-name></span></div>\n    <div class=\"dz-size\" data-dz-size></div>\n    <img data-dz-thumbnail />\n  </div>\n  <div class=\"progress progress-small progress-striped active\"><div class=\"progress-bar progress-bar-success\" data-dz-uploadprogress></div></div>\n  <div class=\"dz-success-mark\"><span></span></div>\n  <div class=\"dz-error-mark\"><span></span></div>\n  <div class=\"dz-error-message\"><span data-dz-errormessage></span></div>\n</div>",
        dictCancelUpload: '取消',
        dictRemoveFile: '移除'
    };

    // form validation
    $.validate();


});
@stop
