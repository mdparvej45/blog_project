@extends('frontend.frontend')
@section('post')
<form action=" {{ route('post.store') }} " method="POST">
    @csrf
    <div class="card col-lg-7 mx-auto mt-3">
        <div class="header w-100 mx-auto" >
            <h4 class="m-3">Add Post</h4>
            <input class="form-control mx-auto " value="{{ old('title') }}" type="text" name="title" id="title" placeholder="Input your post title...">
            @error('title')
                <span class="text-danger">
                    {{ $message }}
                </span>
            @enderror
        </div>
        <div class="body">
            <textarea name="detiles" class="form-control mt-3" placeholder="Input your post detiles..." cols="30" rows="8">{{ old('detiles') }}</textarea>
        @error('detiles')
            <span class="text-danger">
                {{ $message }}
            </span>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary mt-3 w-100">Post</button>
    </div>
</form>
@endsection