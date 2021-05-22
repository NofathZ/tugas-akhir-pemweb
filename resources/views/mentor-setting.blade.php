@extends('layouts.mentor')

@section('content')
@foreach($mentor as $item)
<div class="container">
  <form class="needs-validation mx-3 my-3" action="{{ route('update-info-mentor') }}" method="GET" novalidate>
    <div class="mb-3">
      <label for="description">Phone Number</label>
      <input type="text" class="form-control" name="phone_number" id="description" value="{{ $item->phone_number }}" required>
      <div class="invalid-feedback" role="alert">
        Pesan enter the valid phone number!
      </div>
    </div>
    <div class="mb-3">
      <label for="validationPrice" class="form-label">Price for a Session</label>
      <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Rp</span>
          <input type="text" class="form-control" name="price" id="validationPrice" value="{{ $item->price }}" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
          Please enter the right amount!
      </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="validationSubjects" class="form-label">Subjects</label>
      <select class="form-control selectpicker bg-light" name="subjects[]" id="validationSubjects" multiple data-actions-box="true" data-selected-text-format="count" required>
        @foreach($courses as $course)
        <option value="{{ $course->id_course }}" 
          @foreach($teaches as $teach) 
            <?php
              if ($teach->id_course == $course->id_course){
                echo('selected');
              }
            ?>
          @endforeach > {{ $course->degree }} - {{ $course->name }}</option>
        @endforeach
      </select>
    </div>
    {{-- <div class="mb-4">
      <label class="form-label">Required files</label>
      <input type="file" name="req_files" class="form-control" required>
      <div class="invalid-feedback">
          Please upload the required file!
      </div>
    </div> --}}
    <div class="mb-4">
      <label for="floatingDescribe">Describe yourself</label>
      <textarea class="form-control" placeholder="Describe yourself" name="description" id="floatingDescribe" style="height: 150px">{{ $item->description }}</textarea>
    </div>
    <button class="btn btn-primary mt-4" type="submit">Submit form</button>
  </form>
</div>
@endforeach
@endsection