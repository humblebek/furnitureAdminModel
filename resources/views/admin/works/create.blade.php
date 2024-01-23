


@extends('admin.layouts.header')

@section('content')
<div class="jStart">
<div class="formcard">
    <button><a href={{route('admin.work.index')}}>Back</a></button>
    <h1>Add a new work</h1>
    <form action={{route('admin.work.store')}} method="POST" >
        @csrf
        <div>
            <p>Name:</p>
            <input type="text" name="name" placeholder="Name of image..."><br>
        </div>
        <div>
            <p>Photo:</p>
            <input type="text" name="photo" placeholder="Harry Potter"><br>
        </div>
        <div>
            <p>Price:</p>
            <input type="number" name="price" placeholder="You can write smth here..."><br>
        </div>
        <span><input type="submit" name="work" value="SEND"></span>
    </form>
</div>
</div>

@endsection
