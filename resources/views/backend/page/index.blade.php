@extends('backend.layout.master')
@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2>Contact List</h2>
            <a href="{{ url('add') }}" class="btn btn-primary mb-3">
                <i class="fas fa-plus"></i> Add New
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>Sl</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $index => $item)
                <tr>
                <td>{{$index +1}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td><span>+880</span>{{$item->Phone}}</td>
                <td>
                    <a href="{{ url('edit', $item->id) }}" class="btn btn-info btn-sm">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="{{ route('show', $item->id) }}" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#viewModal">
                        <i class="fas fa-eye"></i> View
                    </a>
                    <form action="{{ url('delete', $item->id) }}" method="POST"  style="display:inline;">
                        @csrf
                        @method('DELETE')
                    <button class="btn btn-danger btn-sm">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                    </form>
                </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="viewModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewModalLabel">Contact Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Name: {{ $item->name }}</strong>
                        <span id="contactName">

                        </span>
                    </p>
                    <p><strong>Email: {{ $item->email }}</strong>
                        <span id="contactEmail">

                        </span>
                    </p>
                    <p><strong>Address: {{ $item->address }}</strong>
                        <span id="contactAddress">

                        </span>
                    </p>
                    <p><strong>Phone: {{ $item->Phone }}</strong>
                        <span id="contactPhone">

                        </span>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>

    </script>
@endsection
