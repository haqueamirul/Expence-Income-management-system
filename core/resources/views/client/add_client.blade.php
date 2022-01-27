@extends('layouts.app')
@section('content')
<div style="padding: 20px">
    <form method="post" action="{{route('Saveclient')}}" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Clent Name</label>
            <input type="text" class="form-control" name="name">
          </div>
          <div class="form-group col-md-6">
            <label>Client Phone</label>
            <input type="number" class="form-control" name="phone">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Client Email</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group col-md-6">
              <label>Service</label>
              <input type="text" class="form-control" name="service">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Address</label>
              <input type="text" class="form-control" name="address">
            </div>
            <div class="form-group col-md-6">
              <label>Note</label>
              <input type="text" class="form-control" name="note">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputCity">File One</label>
            <input type="file" class="form-control" name="photo">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">File Two</label>
            <input type="file" class="form-control" name="file1">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">File Three</label>
            <input type="file" class="form-control" name="file2">
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">File Four</label>
            <input type="file" class="form-control" name="file3">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">File Five</label>
              <input type="file" class="form-control" name="file4">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">File Six</label>
              <input type="file" class="form-control" name="file5">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">File Seven</label>
              <input type="file" class="form-control" name="file6">
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">File Eight</label>
              <input type="file" class="form-control" name="file7">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">File Nine</label>
              <input type="file" class="form-control" name="file8">
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">File Ten</label>
              <input type="file" class="form-control" name="file9">
            </div>
          </div>
          <div style="margin-left:15px;">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </form>
</div>
<script>

</script>
@endsection