@extends('layouts.app')
@section('content')
<div style="padding: 20px">
    <form method="post" action="{{route('Updateclient')}}" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
      <input type="hidden" name="id" value="{{$client->id}}">
        <div class="form-row">
          <div class="form-group col-md-3">
              <h5 style="font-weight: 600; font-size: 18px">Client Name: <span style="font-weight: 400; font-size: 18px">{{$client->name}}</span></h5>
          </div>
          <div class="form-group col-md-3">
            <h5 style="font-weight: 600; font-size: 18px">Client Phone: <span style="font-weight: 400; font-size: 18px">{{$client->phone}}</span></h5>
          </div>
            <div class="form-group col-md-3">
                <h5 style="font-weight: 600; font-size: 18px">Client Email: <span style="font-weight: 400; font-size: 18px">{{$client->email}}</span></h5>
            </div>
            <div class="form-group col-md-3">
                <h5 style="font-weight: 600; font-size: 18px">Client Service: <span style="font-weight: 400; font-size: 18px">{{$client->service}}</span></h5>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <h5 style="font-weight: 600; font-size: 18px">Client Address: <span style="font-weight: 400; font-size: 18px">{{$client->address}}</span></h5>
            </div>
            <div class="form-group col-md-3">
              <h5 style="font-weight: 600; font-size: 18px">Client Note: <span style="font-weight: 400; font-size: 18px">{{$client->note}}</span></h5>
            </div>
              <div class="form-group col-md-3">
                  <h5 style="font-weight: 600; font-size: 18px">Client File 1: <span style="font-weight: 400; font-size: 18px">{{$client->photo}}</span>
                    @if($client->photo)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->photo}}" download> Download</a>
                    @endif 
                </h5>
              </div>
              <div class="form-group col-md-3">
                  <h5 style="font-weight: 600; font-size: 18px">Client File 2: <span style="font-weight: 400; font-size: 18px">{{$client->file1}}</span>
                    @if($client->file1)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file1}}" download> Download</a>
                    @endif
                </h5>
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
                <h5 style="font-weight: 600; font-size: 18px">Client File 3: <span style="font-weight: 400; font-size: 18px">{{$client->file2}}</span>
                    @if($client->file2)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file2}}" download> Download</a>
                    @endif
                </h5>
            </div>
            <div class="form-group col-md-3">
              <h5 style="font-weight: 600; font-size: 18px">Client File 4: <span style="font-weight: 400; font-size: 18px">{{$client->file3}}</span>
                @if($client->file3)
                <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file3}}" download> Download</a>
                @endif
            </h5>
            </div>
              <div class="form-group col-md-3">
                  <h5 style="font-weight: 600; font-size: 18px">Client File 5: <span style="font-weight: 400; font-size: 18px">{{$client->file4}}</span>
                    @if($client->file4)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file4}}" download> Download</a>
                    @endif
                </h5>
              </div>
              <div class="form-group col-md-3">
                  <h5 style="font-weight: 600; font-size: 18px">Client File 6: <span style="font-weight: 400; font-size: 18px">{{$client->file5}}</span>
                    @if($client->file5)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file5}}" download> Download</a>
                    @endif
                </h5>
              </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-3">
                <h5 style="font-weight: 600; font-size: 18px">Client File 7: <span style="font-weight: 400; font-size: 18px">{{$client->file6}}</span>
                    @if($client->file6)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file6}}" download> Download</a>
                    @endif
                </h5>
            </div>
            <div class="form-group col-md-3">
              <h5 style="font-weight: 600; font-size: 18px">Client File 8: <span style="font-weight: 400; font-size: 18px">{{$client->file7}}</span>
                @if($client->file7)
                <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file7}}" download> Download</a>
                @endif   
            </h5>
            </div>
              <div class="form-group col-md-3">
                  <h5 style="font-weight: 600; font-size: 18px">Client File 9: <span style="font-weight: 400; font-size: 18px">{{$client->file8}}</span>
                    @if($client->file8)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file8}}" download> Download</a>
                    @endif
                </h5>
              </div>
              <div class="form-group col-md-3">
                  <h5 style="font-weight: 600; font-size: 18px">Client File 10: <span style="font-weight: 400; font-size: 18px">{{$client->file9}}</span>
                    @if($client->file9)
                    <a style="font-size: 16px" href="{{asset('images')}}/{{$client->file9}}" download> Download</a>
                    @endif
                </h5>
              </div>
          </div>

        
          <div style="margin-left:15px; display:inline">
            <button type="" class="btn btn-primary">Profile</button>
          </div>
      </form>
</div>
<script>

</script>
@endsection