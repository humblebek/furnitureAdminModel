
@extends('admin.layouts.header')

@section('content')
<!-- MAIN -->
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Contacts</h3>
                {{-- <button><a href={{route('admin.contact.create')}}>Add</a></button> --}}
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contact as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->name}}</p></td>
                        <td><p>{{$item->email}}</p></td>
                        <td><p>{{$item->phone}}</p></td>
                        <td><p>{{$item->message}}</p></td>


                        <td style="display: flex">

                            <button style="background-color: green;"><a class="btn btn-succes" href="{{route('admin.contact.show',$item->id)}}"> <ion-icon name = "eye-outline"></ion-icon></a></button>
                            <form action="{{route('admin.contact.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="background-color: #DA0C81;"><a class="btn btn-danger" href="{{route('admin.contact.destroy',$item->id)}}"> <ion-icon name = "trash-outline"></ion-icon></a></button>
                            </form>



                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</main>

<!-- MAIN -->

@endsection
