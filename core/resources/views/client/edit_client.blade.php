@extends('layouts.app')
@section('content')
<div style="padding: 20px">
    <form method="post" action="{{route('Updateclient')}}" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <input type="hidden" name="id" value="{{$client->id}}">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Clent Name</label>
            <input type="text" class="form-control" name="name" value="{{$client->name}}">
          </div>
          <div class="form-group col-md-6">
            <label>Client Phone</label>
            <input type="number" class="form-control" name="phone" value="{{$client->phone}}">
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Client Email</label>
              <input type="email" class="form-control" name="email" value="{{$client->email}}">
            </div>
            <div class="form-group col-md-6">
              <label>Service</label>
              <input type="text" class="form-control" name="service" value="{{$client->service}}">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
              <label>Address</label>
              <input type="text" class="form-control" name="address" value="{{$client->address}}">
            </div>
            <div class="form-group col-md-6">
              <label>Note</label>
              <input type="text" class="form-control" name="note" value="{{$client->note}}">
            </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="inputCity">File One</label>
            <input type="file" class="form-control" name="photo">
            <img src="{{asset('images')}}/{{$client->photo}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->photo}}</p>
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">File Two</label>
            <input type="file" class="form-control" name="file1">
            <img src="{{asset('images')}}/{{$client->file1}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file1}}</p>
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">File Three</label>
            <input type="file" class="form-control" name="file2">
            <img src="{{asset('images')}}/{{$client->file2}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file2}}</p>
          </div>
          <div class="form-group col-md-3">
            <label for="inputCity">File Four</label>
            <input type="file" class="form-control" name="file3">
            <img src="{{asset('images')}}/{{$client->file3}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file3}}</p>
          </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputCity">File Five</label>
              <input type="file" class="form-control" name="file4">
              <img src="{{asset('images')}}/{{$client->file4}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file4}}</p>
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">File Six</label>
              <input type="file" class="form-control" name="file5">
              <img src="{{asset('images')}}/{{$client->file5}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file5}}</p>
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">File Seven</label>
              <input type="file" class="form-control" name="file6">
              <img src="{{asset('images')}}/{{$client->file6}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file6}}</p>
            </div>
            <div class="form-group col-md-3">
              <label for="inputCity">File Eight</label>
              <input type="file" class="form-control" name="file7">
              <img src="{{asset('images')}}/{{$client->file7}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file7}}</p>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">File Nine</label>
              <input type="file" class="form-control" name="file8">
              <img src="{{asset('images')}}/{{$client->file8}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file8}}</p>
            </div>
            <div class="form-group col-md-6">
              <label for="inputCity">File Ten</label>
              <input type="file" class="form-control" name="file9">
              <img src="{{asset('images')}}/{{$client->file9}}" style="max-width: 100px;">
            <p><b> File Name:</b> {{$client->file9}}</p>
            </div>
          </div>
          <div style="margin-left:15px; display:inline">
            <button type="submit" class="btn btn-primary">Update Client</button>
          </div>
      </form>
</div>
<script>

</script>
@endsection