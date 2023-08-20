@extends('layouts.masterLayout')
@section('content')
    <div class="manage-lead-container card">
        <h1 style="margin-bottom: 2rem">All Contacts</h1>
       <table class="table table-borderless" id="myTable">
        @php
            // dd($accounts);
        @endphp
        <thead>
            <tr>
              <th scope="col">Contact Name</th>
              <th scope="col">Account Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Phone</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($contacts as $lead)
            <tr>
                
                <td>
                    <a href="">
                           {{$lead['contact_name']}} 
                    </a>
                </td>
                <td>{{$lead['getAccountDetail']['account_name']}}</td>
                <td>{{$lead['email']}}</td>
                <td>{{$lead['phone']}}</td>
                <td>
                  <a href="{{route('edit_lead',['id'=>$lead['id']])}}"><i class="fa-solid fa-pen-to-square"></i></a>
                  <a href="{{route('delete_lead',['id'=>$lead['id']])}}"><i class="fa-solid fa-trash"></i></a>
                </td>
              </tr>
            @endforeach
          </tbody>
       </table>
    </div>
@endsection