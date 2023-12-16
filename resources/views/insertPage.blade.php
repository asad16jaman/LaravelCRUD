@extends("general")
@section("content")

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mt-5">

            <form method="POST" action="{{ route('insertPage') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" name="stName" class="form-control" id="" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Roll</label>
                    <input type="Number" name="stRoll" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Age</label>
                    <input type="Number" name="stAge" class="form-control" id="">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">City</label>
                    <input type="text" name="stCity" class="form-control" id="">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>





        </div>
        <div class="col-md-3"></div>
    </div>
</div>

@endsection