<form action="/rooms/update/{{$lodges->lodge_id}}/{{$room->room_id}}" method="POST">
    {{ csrf_field() }}

    

    <div class="form-group">
        <div class="input-group">

            <input type="text"  name="lodge_id" class="hide" value="{{$lodges->lodge_id}}" required >

        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-bed"></i></span>

            <input type="text" name="room_name" class="form-control" value="{{$room->room_name}}" placeholder="Room Name" required>

        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-money"></i></span>

            <input type="text" name="price" class="form-control" value="{{$room->price}}" placeholder="Price" required>
        </div>
    </div>

    <div class="form-group">
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-bed"></i></span>

            <select  class="form-control" name="room_status" required>

                <option >--Room Status--</option>
                <option @if($room->room_status == "Occupied") selected="selected" @endif value="Occupied">Occupied</option>
                <option @if($room->room_status == "Not Occupied") selected="selected" @endif value="Not Occupied">Not Occupied</option>
            </select>
        </div>
    </div>

    <div class="modal-footer">
        <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Close</button>
        <input type="submit" value="Update" class="btn btn-success pull-right">
 </div>
</form>