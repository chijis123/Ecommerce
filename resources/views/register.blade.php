@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-sm-4 ">
            <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('name') }}" pattern="[A-Za-z\s]+" title="Please enter letters only">
    @error('name')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>
<script>
    document.getElementById('exampleInputEmail1').addEventListener('input', function(event) {
        var input = event.target.value;
        var sanitizedInput = input.replace(/[0-9]/g, ''); // Remove numbers
        document.getElementById('exampleInputEmail1').value = sanitizedInput; // Update input value
        if (input !== sanitizedInput) {
            document.getElementById('nameError').style.display = 'block';
        } else {
            document.getElementById('nameError').style.display = 'none';
        }
    });
</script>

                <div class="form-group">                   
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ old('email') }}">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
                </div>

                <button type="submit" class="btn btn-primary">Register</button>
                
            </form>
        </div>
    </div>
</div>

@endsection
