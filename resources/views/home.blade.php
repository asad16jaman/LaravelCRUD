@extends("general")

@section("content")

<div class="container mt-3">
    <a href="{{ route('insertData') }}" class="btn btn-success">InsertStudent</a>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Roll</th>
                        <th scope="col">View</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($stds as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td>{{$value->roll}}</td>
                        <td><a href="{{ route('studentPage',['id'=>$value->id]) }}" class="btn btn-primary">Detail</a></td>
                        <td><a href="{{ route('updatePage',['id'=>$value->id]) }}" class="btn btn-warning">update</a></td>
                        <td><a href="{{ route('deleteView',['id'=>$value->id]) }}" class="btn btn-danger">delete</a></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




@endsection