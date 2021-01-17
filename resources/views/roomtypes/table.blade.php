<div class="table-responsive">
    <table class="table" id="roomtypes-table">
        <thead>
            <tr>
                <th>Type</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @include('roomtypes.show')
        @foreach($roomtypes as $roomtype)

            <tr>
                <td>{{ $roomtype->type }}</td>
                <td>
                    {!! Form::open(['route' => ['roomtypes.destroy', $roomtype->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a data-roomtype_id="{{$roomtype->id}}" data-type="{{$roomtype->type}}" data-toggle="modal" data-target="#roomEditType" class='btn btn-warning btn-xs'><i class="glyphicon glyphicon-eye-open">View</i></a>
                        <a href="{{ route('roomtypes.edit', [$roomtype->id]) }}"  class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit">Edit</i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

