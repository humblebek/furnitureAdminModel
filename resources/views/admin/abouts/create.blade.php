


@extends('admin.layouts.header')

@section('content')
<div class="jStart">
<div class="formcard">
    <button><a href={{route('admin.about.index')}}>Back</a></button>
    <h1>Add a new about</h1>
    <form action={{route('admin.about.store')}} method="POST" >
        @csrf
        <div>
            <p>Photo:</p>
            <input type="text" name="photo" placeholder="Name of image..."><br>
        </div>
        <div>
            <p>Title:</p>
            <input type="text" name="title" placeholder="Harry Potter"><br>
        </div>
        <div>
            <p>Body:</p>
            <input type="text" name="body" placeholder="You can write smth here..."><br>
        </div>
        <span><input type="submit" name="work" value="SEND"></span>
    </form>
</div>
</div>

@endsection
