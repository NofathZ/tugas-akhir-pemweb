@extends('layouts.mentor')

@section('content')
<div class="container">
  <form class="needs-validation mx-3 my-3" action="" method="GET" novalidate>
    <div class="mb-3">
      <label for="description">Phone Number</label>
      <input type="text" class="form-control" id="description" required>
      <div class="invalid-feedback" role="alert">
        Pesan Error
      </div>
    </div>
    <div class="mb-3">
      <label for="validationPrice" class="form-label">Price for a Session</label>
      <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">Rp</span>
          <input type="text" class="form-control" id="validationPrice" aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
          Please enter the right amount
      </div>
      </div>
    </div>
    <div class="mb-3">
      <label for="validationSubjects" class="form-label">Subjects</label>
      <select class="form-control selectpicker bg-light" id="validationSubjects" multiple data-actions-box="true" data-selected-text-format="count" required>
          <option value="sd-ipa">SD - IPA</option>
          <option value="sd-ips">SD - IPS</option>
          <option value="sd-matematika">SD - Matematika</option>
          <option value="sd-inggris">SD - Bahasa Inggris</option>
          <option value="sd-indonesia">SD - Bahasa Indonesia</option>
          <option value="smp-ipa">SMP - IPA</option>
          <option value="smp-ips">SMP - IPS</option>
          <option value="smp-matematika">SMP - Matematika</option>
          <option value="smp-inggris">SMP - Bahasa Inggris</option>
          <option value="smp-indonesia">SMP - Bahasa Indonesia</option>
          <option value="sma-matematika">SMA - Matematika</option>
          <option value="sma-inggris">SMA - Bahasa Inggris</option>
          <option value="sma-indonesia">SMA - Bahasa Indonesia</option>
          <option value="sma-biologi">SMA - Biologi</option>
          <option value="sma-fisika">SMA - Fisika</option>
          <option value="sma-kimia">SMA - Kimia</option>
          <option value="sma-geografi">SMA - Geografi</option>
          <option value="sma-sejarah">SMA - Sejarah</option>
          <option value="sma-sosiologi">SMA - Sosiologi</option>
          <option value="sma-ekonomi">SMA - Ekonomi</option>
      </select>
    </div>
    <div class="mb-4">
      <label class="form-label">Required files</label>
      <input type="file" name="req_files" class="form-control" required>
      <div class="invalid-feedback">
          Please upload the required file!
      </div>
    </div>
    <div class="mb-4">
      <label for="floatingDescribe">Describe yourself</label>
      <textarea class="form-control" placeholder="Describe yourself" id="floatingDescribe" style="height: 150px"></textarea>
    </div>
    <button class="btn btn-primary mt-4" type="submit">Submit form</button>
  </form>
</div>
@endsection