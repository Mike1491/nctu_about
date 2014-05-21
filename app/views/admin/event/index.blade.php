@extends('admin.layouts.construct')

@section('breadcrumb')
<li class="active">事件管理</li>
@stop

@section('page-header')
事件管理
<small>
    <i class="fa fa-angle-double-right"></i> 省政府事件集
</small>
<a href="/admin/event/create" class="btn btn-pull-right">
    <i class="fa fa-edit bigger-110"></i>
    新增
</a>
@stop

@section('page-content')
<div class="col-xs-12">
    @if ($search_term)
    <span class="bigger-140">關鍵字:&nbsp;<span class="blue">{{ $search_term }}</span></span>
    @endif
    <div class="widget-box">
        <div class="widget-header widget-header-small">
            <h5 class="lighter">搜尋</h5>
        </div>
        <div class="widget-body">
            <div class="widget-main">
            {{ Form::open(array('url' => '/admin/event', 'method' => 'get')) }}
                <div class="row">
                    <div class="col-xs-12 col-sm-8">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control search-query" placeholder="請輸入要搜尋的關鍵字">
                            <span class="input-group-btn">
                                <button type="submit" class="btn btn-purple btn-sm">搜尋 <i class="fa fa-search icon-on -right bigger-110"></i>
                            </span>
                        </div>
                    </div>
                </div>
            {{ Form::close() }}
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>編號</th>
                    <th>標題</th>
                    <th>起始日期</th>
                    <th>媒體數</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($events as $event)
                <tr>
                    <td><b>{{ $event->getSerial() }}</b></td>
                    <td>{{ $event->topic }}</td>
                    <td>{{ $event->start_date }}</td>
                    <td>{{ $event->medias()->count() }}</td>
                    <td>
                        <a class="btn btn-xs btn-info" href="/admin/event/{{ $event->id }}/edit"><i class="fa fa-edit bigger-120"></i> 編輯</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @if ($search_term)
        {{ $events->appends(array('q' => $search_term))->links() }}
        @else
        {{ $events->links() }}
        @endif
    </div>
</div>
@stop
