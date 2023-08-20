@extends('layouts.masterLayout')
@section('content')
    <div class="manage-lead-container card">
        <h1 style="margin-bottom: 2rem">All Accounts</h1>
       <table class="table table-borderless" id="myTable">
        @php
            // dd($accounts);
        @endphp
        <thead>
            <tr>
              <th scope="col">Account Name</th>
              <th scope="col">Website</th>
              <th scope="col">Phone</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($accounts as $lead)
            <tr>
                
                <td>
                    <a href="">
                           {{$lead['account_name']}} 
                    </a>
                </td>
                <td>{{$lead['website']}}</td>
                <td>{{$lead['phone']}}</td>
                <td>
                  <a href="{{route('edit_account',['id'=>$lead['id']])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="{{route('delete_account',['id'=>$lead['id']])}}"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
       </table>
    </div>
@endsection