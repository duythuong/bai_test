<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                {{-- @foreach ($data as $item) --}}
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
                  <input type="text" class="form-control" id="validationDefault01" placeholder="First name" name="firstname"@if ($data)
                  value="{{$data->firstname}}"
                  @endif required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefault02">Last name</label>
                    <input type="text" class="form-control" id="validationDefault02" placeholder="Last name"  name="lastname" @if ($data)
                    value="{{$data->lastname}}"
                    @endif required>
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationDefaultUsername">Username</label>
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroupPrepend2">@</span>
                      </div>
                      <input type="text" class="form-control" id="validationDefaultUsername" placeholder="Username" aria-describedby="inputGroupPrepend2" name="usename" @if ($data)
                      value="{{$data->usename}}"
                      @endif required>
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-6 mb-3">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name ="email" @if ($data)
                    value="{{$data->email}}"
                    @endif required>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">State</label>
                    
                    <input type="text" class="form-control" id="validationDefault04" placeholder="State" 
                    name="state" @if ($data)
                    value="{{$data->state}}"
                    @endif required>
                  </div>
                  
                </div>
                
                <button class="btn btn-primary" type="submit">Submit form</button>
                  </form>
                  {{-- @endforeach --}}
            </div>
        </div>
    </div>
</body>
</html>