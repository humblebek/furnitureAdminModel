
@extends('admin.layouts.header')

@section('content')
<div class="jStart">
    <div class="formcard">
        <button><a href={{route('admin.work.index')}}>Back</a></button>
        <h1>Edit work</h1>

        <form action="{{route('admin.work.update',$work->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <p>Name:</p>
                <input type="text" name="name" value="{{$work->name}}"><br>
            </div>
            <div>
                <p>Photo:</p>
                <input type="text" name="photo" value="{{$work->photo}}"><br>
            </div>
            <div>
                <p>Price:</p>
                <input type="number" name="price" value="{{$work->price}}"><br>
            </div>
            <span><input type="submit" name="work" value="SEND"></span>
        </form>
    </div>
</div>
@endsection



