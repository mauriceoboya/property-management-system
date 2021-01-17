<div class="table-responsive">
    <table class="table" id="roomnumbers-table">
        <thead>
            <tr>
                <th>Roomnumber</th>
        <th>Roomtype Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
          @include('roomnumbers.edit')
        @foreach($roomnumbers as $roomnumber)
            <tr>
                <td>{{ $roomnumber->roomnumber }}</td>
                <td>{{$roomnumber->roomtype->type }}</td>

                <td>
                    {!! Form::open(['route' => ['roomnumbers.destroy', $roomnumber->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('roomnumbers.edit', [$roomnumber->id]) }}"  class='btn btn-primary btn-xs'><i class="glyphicon glyphicon-edit"></i>Edit</a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>

    </table>
</div>
