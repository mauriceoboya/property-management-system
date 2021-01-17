  <!-- Modal -->
  <div class="modal fade" id="roomType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Room Type</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <!-- Type Field -->
            <div class="form-group col-sm-12">
                {!! Form::label('type', 'Type:') !!}
                {!! Form::text('type', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
            </div>

        </div>
        <div class="modal-footer">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
      </div>
    </div>
  </div>
