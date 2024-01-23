
@extends('admin.layouts.header')

@section('content')
<div class="jStart">
    <div class="formcard">
        <button><a href={{route('admin.about.index')}}>Back</a></button>
        <h1>Edit about</h1>

        <form action="{{route('admin.about.update',$about->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <p>Photo:</p>
                <input type="text" name="photo" value="{{$about->photo}}"><br>
            </div>
            <div>
                <p>Title:</p>
                <input type="text" name="title" value="{{$about->title}}"><br>
            </div>
            <div>
                <p>Body:</p>
                <input type="text" name="body" value="{{$about->body}}"><br>
            </div>
            <span><input type="submit" name="about" value="SEND"></span>
        </form>
    </div>
</div>
@endsection



