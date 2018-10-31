@extends('layouts.master')

@section('content')

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">All user</h3>
    <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.create') }}"> New user</a>
    </div>
  </div>
<table class="table table-striped  table-bordered table-hover dataTable">
<thead>
<tr>
<!-- id`, `FirstName`, `LastName`, `email`, `password`, `website`, `Phone_number`, `Phone_number1`, `fax`, `address`, `company`, `status`, `` -->
<th>#</th>
<th>Name</th>
<th>Email</th>
<th style="display:none;">Password</th>
<th>Address</th>
<th>City</th>
<th style="display:none;">Phone </th>
<th style="display:none;">Other Phone </th>
<th style="display:none;">Other Address</th>
<th style="display:none;">Other City</th>
<th>Status</th>
<th>Country</th>
<th>Action</th>
<!-- 'firstName', 'lastName', 'mobile1',
        'mobile2', 'email', 'password',
        'landline', 'city1', 'address2','address',
        'city2', 'country_id', -->
</tr>
</thead>
<tbody>
</tbody>
<td style="display:none">{{$x=1 }}</td>
@foreach($users as $user)
<tr>
<td>{{$x++}} </td>
<td>{{$user->firstName.' '.$user->lastName}}</td>
<td>{{$user->email}}</td>
<td style="display:none;">{{$user->password}}</td>
<td>{{$user->address}}</td>
<td >{{$user->city1}}</td>

<td style="display:none;">{{$user->mobile1}}</td>
<td style="display:none;">{{$user->mobile2}}</td>
<td style="display:none;">{{$user->address2}}</td>
<td style="display:none;">{{$user->city2}}</td>
@if($user->status==1)
    <td>Admin</td>
  @elseif($user->status==2)
    <td>Editor</td>
  @else
     <td>User </td>
  @endif

<td>{{$user->country->name_en}}</td>
<td> 
  <form class="delete" action="{{ route('users.destroy',$user->id) }}" method="POST">
   <a class="fa fa-edit "  style="font-size:16px" href="{{ route('users.edit',$user->id) }}"></a>
   @csrf
   @method('DELETE')
   <input type="hidden" name="_method" value="DELETE">
   <input type="hidden" name="_token" value="{{ csrf_token() }}" />
   <button type="submit " class="fa fa-close"  style="font-size:14px;color:red " value="Delete"> </button>
   </form>
        </td>
   </tr>
   @endforeach
  </tbody>
  </table>
{{$users->render()}}
<!-- add -->
 



@endsection