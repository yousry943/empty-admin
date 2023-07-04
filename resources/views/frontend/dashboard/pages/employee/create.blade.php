@extends('frontend.dashboard.layouts.master')
@section('title', 'Create employee')

@section('content')
<div class="header bg-primary pb-6"></div>
<div class="container-fluid mt--6">
<div class="card">
<div class="card-header">
    <div class="row align-items-center">
    <div class="col-8">
        <h3 class="mb-0">{{__('Dashboard.Create Employee')}}</h3>
    </div>
    <div class="col-4 text-right">
        <a href="{{ route('dashboard.employee') }}" class="btn btn-sm btn-primary"><i class="fas fa-arrow-left"></i>{{__('Dashboard.Go back')}} </a>
    </div>
    </div>
</div>
<div class="card-body">
    <form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Name')}}</label>
            <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class="col-md-6 ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Email')}}</label>
            <input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
            @error('email')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class="col-md-6 ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Phone Number')}}</label>
            <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
            @error('password')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        </div>
        <div class="col-md-6 ">
        <div class="form-group ">
            <label for="exampleFormControlInput1">{{__('Dashboard.Date')}}</label>
            <input name="password_confirmation" type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
            @error('password_confirmation')
            <small class="text-danger">{{ $message }}</small>
            @enderror <br>
        </div>
        </div>
        <div class="col-md-6 ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Password')}}</label>
                <input name="password" type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            </div>
            <div class="col-md-6 ">
            <div class="form-group ">
                <label for="exampleFormControlInput1">{{__('Dashboard.Confirm Password')}}</label>
                <input name="password_confirmation" type="password" class="form-control" id="exampleFormControlInput1" placeholder="">
                @error('password_confirmation')
                <small class="text-danger">{{ $message }}</small>
                @enderror <br>
            </div>
        </div>
    </div>



    <div class="form-group">
        <label for="exampleFormControlSelect2">{{__('Dashboard.Job')}} </label>
        <select name="role[]" multiple class="form-control" id="exampleFormControlSelect2">
        {{-- @foreach ($roles as $role) --}}
        <option></option>
        {{-- @endforeach --}}
        </select>
        @error('role')
            <small class="text-danger">{{ $message }}</small>
        @enderror <br>
    </div>
    <button class="btn btn-primary disable">{{__('Dashboard.Save')}}</button>
    </form>
</div>
</div>
</div>
@endsection

