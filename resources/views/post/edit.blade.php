@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Tambah Post</div>
                    <div class="card-body">
                        <form action="{{ route('post.update', $post->id) }}" method="post">
                           @method('put')
                            @csrf
                            <div class="form-group">
                                <label for="">Title</label>
                                <input type="text" name="title"
                                    class="form-control
                                    @error('title') is-invalid @enderror" value="{{$post->title}}">

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Content</label>
                                <input type="text" name="content"
                                    class="form-control
                                    @error('title') is-invalid @enderror" value="{{$post->content}}">

                                @error('content')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Category ID</label>
                                <select name="category_id" id="" class="form-control">
                                    
                                    @if ($categories->count())
                                        @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{$post->category_id == $category->id  ? 'selected' : ''}}>
                                            {{$category->name}}
                                        </option>
                                        @endforeach
                                    @endif
                                </select>

                                @error('category_id')
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