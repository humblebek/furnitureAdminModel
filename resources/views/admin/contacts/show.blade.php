

@extends('admin.layouts.header')

@section('content')

<!-- MAIN -->
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Works </h3>
                <button><a href={{route('admin.contact.index')}}>Back</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <tr>
                    <th>Name:</th>
                    <td><b>{{$contact->name}}</b></td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td><b>{{$contact->email}}</b></td>
                </tr>
                <tr>
                    <th>Phone:</th>
                    <td><b>{{$contact->phone}}</b></td>
                </tr>
                <tr>
                    <th>Message:</th>
                    <td><b>{{$contact->message}}</b></td>
                </tr>


            </table>
        </div>

    </div>
</main>

<!-- MAIN -->
@endsection
