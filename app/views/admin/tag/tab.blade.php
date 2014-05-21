<div class="row-fluid">
    <ul class="ace-thumbnails tag-grid">
    @foreach($tagitems as $item)
        <li>
            <span class="label label-xlg label-yellow arrowed"><i class="fa fa-tag bigger-110"></i> {{ $item->name }}&nbsp;&nbsp;&nbsp;
            <a class="delete-link" data-id="{{ $item->id }}" data-name="{{ $item->name }}"><i class="fa fa-times"></i></a>
            {{ Form::open(array('url' => '/admin/tag/' . $item->id, 'method' => 'DELETE', 'id' => 'del-form-' . $item->id)) }}
            {{ Form::close() }}
            </span>
        </li>
    @endforeach
    </ul>
</div>
