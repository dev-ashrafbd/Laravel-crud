@extends('template')
@section('body')
<div class="container-fluid">
    <div class="block-header">
        <h1>All Id card</h1>
    </div>
  
    <div class="row clearfix">
                
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">Total Id card</div>
                            <div class="number count-to" data-from="0" data-to="{{ $Id->total() }}" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
               
    </div>
    
    @if (Session::has('Id_update'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('Id_update')}}
    </div>
    @elseif (Session::has('employee_deleted'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('employee_deleted')}}
    </div>
    @endif
    <table class="table table-striped table-bordered" style="width:100%;background-color:white;">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Country</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody> 
           @php
            $count = 0;
           @endphp
            @foreach ($Id as $iteam)
  @php
    $count = $count + 1;


@endphp
                <td>{{ $count }}  </td>
                <td>{{$iteam->name}}</td>
                <td>{{$iteam->phone}}</td>
                <td>{{$iteam->email}}</td>
                <td><img src="{{ asset('images/id/'.$iteam->picture)}}" width="50px" height="50px" ></td>
                <td><a href="/show/{{$iteam->id}}" class="btn btn-success" type="submit">view</a></td> 
                <td><a href="/edit/{{$iteam->id}}" class="btn btn-primary" type="submit">Edit</a></td> 
                <td><a href="/delete/{{ $iteam->id }}" class="btn btn-primary" type="submit">delete</a></td> 
            </tr>
            @endforeach
           
        </tbody>
     
    </table>
	
    {{ $Id->links() }}
    
        
	
</div>
@endsection