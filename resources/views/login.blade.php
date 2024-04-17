@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row justify-content-center">
        <div class="col-sm-4 ">
            <form action="{{ url('/login') }}" method="post" id="login">
                <div class="form-group">
                    @csrf
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

                @if(session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</div>

<!-- <script>
    $(document).ready(function(){
        $('#add').on('submit',function(event){
            event.preventDefault();
            jQuery.ajax({
                url:"{{'login'}}",
                data:jQuery('#add').serialize(),
                type:post,

                success:function(result)
                {
                    
                }
            })
        });
    });
</script>
 -->



@endsection
