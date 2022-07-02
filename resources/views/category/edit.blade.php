@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tambah Post</div>
                    <div class="card-body">
                        <form action="{{ route('category.update', $category->id) }}" method="post">
                            @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name"
                                    class="form-control
                                    @error('name') is-invalid @enderror" value="{{$category->name}}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <br>
                                <button type="reset" class="btn btn-outline-warning">Reset</button>
                                <button type="submit" class="btn btn-outline-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection