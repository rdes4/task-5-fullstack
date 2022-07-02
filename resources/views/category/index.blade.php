@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        Post CRUD
                        <a href="{{ route('category.create') }}" class="btn btn-sm btn-info" style="float: right">
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                @php $no = 1; @endphp
                                @foreach($categories as $data)
                                    <tr>
                                        <td>{{$no++}}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>
                                        <form action="{{ route('category.destroy', $data->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('category.edit', $data->id) }}"
                                                    class="btn btn-outline-success">Edit</a>
                                                <button type="submit" class="btn btn-outline-danger"
                                                    onclick="return confirm('are you sure?')">
                                                    Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection