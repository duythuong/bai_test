@extends('index')
@section('title', 'test')
@section('name')
<div class="container">
        <div class="row"> 
            <div class="col">
                <a href="http://localhost/test/public/form" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">Add</a>
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
                      <a href="http://localhost/test/public/delete?value={{$item->id}}" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Delete</a>
                      </td>
                        <td>
                        <a href="http://localhost/test/public/edit?value={{$item->id}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">edit</a>
                        </td>
                        <td>
                        <a href="http://localhost/test/public/show?value={{$item->id}}" class="btn btn-info btn-sm active" role="button" aria-pressed="true">show</a>
                        </td>
                      </tr>
                      @endforeach
                     
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection

