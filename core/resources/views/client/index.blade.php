@extends('layouts.app')
@section('content')
<div style="padding:40px;">
    <table id="example" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Phone</th>
                <th>Service</th>
                {{-- <th>Photo</th> --}}
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($allclient as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->name }}</td>
                <td>{{ $client->phone }}</td>
                <td>{{ $client->service }}</td>
                {{-- <td><img src="{{asset('images')}}/{{$client->photo}}" style="max-width: 100px;"></td> --}}
                <td>
                    <a href="{{ URL('edit_client') }}/{{$client->id}}"><button type="button" class="btn btn-secondary">Edit</button></a>
                    <a href="{{ URL('view_client') }}/{{$client->id}}"><button type="button" class="btn btn-success">View</button></a>
                    <a href="{{ URL('delete_client') }}/{{$client->id}}" title="delete" class="delete" onclick="return confirm('Are you sure you want to delete this item')"><button type="button" class="btn btn-danger">Delete</button></a>
                </td>
            </tr>
            @endforeach

    
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Client Name</th>
                <th>Phone</th>
                <th>Service</th>
                {{-- <th>Photo</th> --}}
                <th>Action</th>
            </tr>
        </tfoot>
    </table>
</div>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection
