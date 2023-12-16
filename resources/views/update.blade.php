@extends("general")
@section("content")

<div class="container">
    <div class="row">

 

        <div class="col-md-3 mt-3">
            <a href="{{ route('homePage') }}" class="btn btn-warning">go to home</a>
        </div>
        <div class="col-md-6 mt-5">

            <form method="POST" action="{{ route('updateData') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="stName" value="{{ $st->name }}" class="form-control" id="" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Roll</label>
                    <input type="Number" name="stRoll" value="{{ $st->roll }}"  class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="Number" name="stAge" value="{{ $st->age }}" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">City</label>
                    <input type="text" name="stCity" value="{{ $st->city }}" class="form-control" id="">
                </div>
                <input type="text" name="stId" value="{{$st->id}}" class="d-none">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>





        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection