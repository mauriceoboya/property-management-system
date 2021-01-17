<div class="modal fade" id="roomnumberModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Room</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- Roomnumber Field -->
            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('roomnumber', 'Roomnumber:') !!}
                    {!! Form::text('roomnumber', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
                </div>

                <div class="control-group col-sm-6">
                    <label for="">Room Type</label>
                    {!! Form::label('roomnumber', 'Room Type:') !!}
                    <select name="roomtype_id" class="form-control">
                        @foreach($roomtype as $roomtype)
                        <option value="{{ $roomtype->id }}">{{ $roomtype->type }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>
    </div>
</div>
