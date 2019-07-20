@extends('form')
@section('title', 'test')
@section('name')
<div class="container">
        <div class="row">
            <div class="col">
            <form 
        @if ($data)
            action="http://localhost/test/public/form?value={{$data->id}}"
        @else
           action="{{route('form')}}"
        @endif method="POST">
              {{csrf_field()}}
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault01">First name</label>
                  <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="firstname"
                  @if ($data)
                  value="{{$data->firstname}}"
                  @endif required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name"  name="lastname" 
                    @if ($data)
                    value="{{$data->lastname}}"
                    @endif required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" name="usename" 
                      @if ($data)
                      value="{{$data->usename}}"
                      @endif 
                      required>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name ="email" 
                    @if ($data)
                    value="{{$data->email}}"
                    @endif 
                    required>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">State</label>
                    
                    <input type="text" class="form-control" id="validationDefault04" placeholder="State" 
                    name="state" @if ($data)
                    value="{{$data->state}}"
                    @endif required>
                  </div>
                  
                </div>

                <a href="{{ URL::previous() }}" class="btn btn-secondary btn-sm active" role="button" aria-pressed="true">Back</a>
                @if($type)
                  <button class="btn btn-primary btn-sm" type="submit">Submit form</button>
                @endif
                

                  </form>
            </div>
        </div>
    </div>
@endsection