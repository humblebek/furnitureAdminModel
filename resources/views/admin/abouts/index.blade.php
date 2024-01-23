
@extends('admin.layouts.header')

@section('content')
<!-- MAIN -->
<link rel="stylesheet" href="stylef.css">
<main>

    <div class="table-data">
        <div class="order">
            <div class="head">
                <h3>Abouts</h3>
                <button><a href={{route('admin.about.create')}}>Add</a></button>
                <i class='bx bx-search'></i>
                <i class='bx bx-filter'></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Body</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($about as $item)
                    <tr>
                        <td><p>{{++$loop->index}}</p></td>
                        <td><p>{{$item->photo}}</p></td>
                        <td><p>{{$item->title}}</p></td>
                        <td><p>{{$item->body}}</p></td>


                        <td style="display: flex">

                            <button style="background-color: green;"><a class="btn btn-succes" href="{{route('admin.about.show',$item->id)}}"> <ion-icon name = "eye-outline"></ion-icon></a></button>
                            <button><a class="btn btn-primary" href="{{route('admin.about.edit',$item->id)}}"> <ion-icon name = "create-outline"></ion-icon></a></button>
                            <form action="{{route('admin.about.destroy',$item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="background-color: #DA0C81;"><a class="btn btn-danger" href="{{route('admin.about.destroy',$item->id)}}"> <ion-icon name = "trash-outline"></ion-icon></a></button>
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
