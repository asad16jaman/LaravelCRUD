@extends("general")

@section("content")

    <div class="container mt-5">
        <div class="row">
            <div class="col-me-3"></div>
            <div class="col-me-6">
              @foreach($st as $v)
                   <p>name :  {{ $v->name }}</p>
                   <p>age :  {{ $v->age }}</p>
                   <p>roll :  {{ $v->roll }}</p>
                   <p>home :  {{ $v->city }}</p>
              @endforeach
              <a href="{{ route('homePage') }}" class="btn btn-success">go to homePage</a>
              <a href="{{ route('updatePage',['id'=>$v->id]) }}" class="btn btn-success">Update</a>
            </div>
            <div class="col-me-3"></div>
        </div>
    </div>


@endsection
