<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    {{-- <div class="container">
        <div class="row">
          
            <div class="col">
                <a href="http://localhost/test/public/form" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add</a>
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">First name</th>
                        <th scope="col">Last name</th>
                        <th scope="col">Use name</th>
                        <th scope="col">Email</th>
                        <th scope="col">State</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $item)
                      <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->firstname}}</td>
                        <td>{{$item->lastname}}</td>
                        <td>{{$item->usename}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->state}}</td>
                      <td>
                      <a href="http://localhost/test/public/delete?value={{$item->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Delete</a>
                      </td>
                      <td><td>
                        <a href="http://localhost/test/public/form?value={{$item->id}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">edit</a>
                        </td></td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div> --}}
    @yield('name')
</body>
</html>