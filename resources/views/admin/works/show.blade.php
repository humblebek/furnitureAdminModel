

@extends('admin.layouts.header')

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Works </h3>
                <button><a href={{route('admin.work.index')}}>Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><b>{{$work->name}}</b></td>
                </tr>
                <tr>
                    <th>Title:</th>
                    <td><b>{{$work->photo}}</b></td>
                </tr>
                <tr>
                    <th>Price:</th>
                    <td><b>{{$work->price}}</b></td>
                </tr>


            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection
