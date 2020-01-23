<div class="row">
  <div class="col-md-4"></div>
    <div class="form-group col-md-4">
        <label for="first_name">First Name:</label>
        <input type="text" class="form-control" name="first_name" value="{{$student->first_name}}">
    </div>
  </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="last_name">Last Name:</label>
              <input type="text" class="form-control" name="last_name" value="{{$student->last_name}}">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="title">Title:</label>
            <input type="text" class="form-control" name="title" value="{{$student->title}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="phone">Phone:</label>
            <input type="text" class="form-control" name="phone" value="{{$student->phone}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="address">Address:</label>
            <input type="text" class="form-control" name="address" value="{{$student->address}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="notes">Notes:</label>
            <input type="text" class="form-control" name="notes" value="{{$student->notes}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="faculty">Faculty:</label>
            <input type="text" class="form-control" name="faculty" value="{{$student->faculty}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="attendance">Attendance:</label>
            <input type="text" class="form-control" name="attendance" value="{{$student->attendance}}">
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="add_lessons">Additional Lessons:</label>
            <input type="text" class="form-control" name="add_lessons" value="{{$student->add_lessons}}">
          </div>
        </div>
        

        <!-- button-centre -->
        <div class="button-centre">
                {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary', 'data-confirm' => 'Are you sure about that?']) !!}
            </div>