@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">add Author</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Content</label>
                            <input type="text" name="content" class="form-control" value="{{ $post->content }}"
                                readonly>
                        </div>
                        <div class="form-group">
                            <label for="">Category ID</label>
                            <input type="number" name="category_id" class="form-control" value="{{ $post->category_id }}" readonly>
                        </div>
                        <div class="form-group">
                            <br>
                            <a href="{{ route('post.index') }}" class="btn btn-block btn-outline-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection