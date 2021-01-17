{!! Form::model($roomtypes, ['route' => ['roomtypes.update','roomtype_id'], 'method' => 'patch']) !!}
            <!-- Modal -->
    <div class="modal fade" id="roomEditType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                <input type="hidden" name="roomtype_id" id="roomtype_id">
                <div class="form-group col-sm-12">
                    {!! Form::label('type', 'Type:') !!}
                    <input  name="type" id="type" class ='form-control' readonly>
                </div>

            </div>
            <div class="modal-footer">
                .
            </div>
        </div>
        </div>
    </div>
{!! Form::close() !!}


@push('scripts')
<script>
 $('#roomEditType').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var type = button.data('type')
  var roomtype_id =button.data('roomtype_id')

  var modal = $(this)
  modal.find('.modal-title').text('View RoomTypes ');
  modal.find('.modal-body #type').val(type);
  modal.find('.modal-body #roomtype_id').val(roomtype_id);
})
</script>
@endpush

