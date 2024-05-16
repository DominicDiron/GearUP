@extends('layouts.app')
@section('main')

<h5><i class="bi bi-plus-square-fill"></i> Give your Details</h5><hr>
        
        <div class="col-md-8">
            <form action="/register" method="post">
              @csrf
                <!-- 1st row -->
                <div class="row  mb-3">
                    <div class="col md-12">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control @if($errors->has('name')){{'is-invalid'}} @endif" value="{{old('name')}}" placeholder="Enter Your Name">
                        @if($errors->has('name'))
                        <div class="invalid-feedback">{{$errors->first('name')}}</div>                        
                        @endif
                    </div>
                </div>
                <!-- 2nd row -->
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label for="email" class="form-label">E-mail Address</label>
                        <input type="email" name="email" id="email" class="form-control @if($errors->has('email')){{'is-invalid'}} @endif" value="{{old('email')}}" placeholder="Enter your email address">
                        @if($errors->has('email'))
                        <div class="invalid-feedback">{{$errors->first('email')}}</div>                        
                        @endif
                    </div>
                </div>

                <!-- 5th row -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Get in</button>
                    <button type="reset" class="btn btn-danger">Clear All</button>
                </div>
            </form>
        </div>
@endsection