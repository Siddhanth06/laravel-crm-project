@extends('layouts.masterLayout')
@section('content')
    <div class="manage-lead-container card">
        <h1 style="margin-bottom: 2rem">All Leads</h1>
       <table class="table table-borderless" id="myTable">
        <thead>
            <tr>
              <th scope="col">Lead Name</th>
              <th scope="col">Company</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">Lead Source</th>
              <th scope="col">Lead Status</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($leads as $lead)
            <tr>
                <td>{{$lead['first_name']}}</td>
                <td>{{$lead['company']}}</td>
                <td>{{$lead['email']}}</td>
                <td>{{$lead['phone']}}</td>
                <td>{{$lead['lead_source']}}</td>
                <td>{{$lead['lead_status']}}</td>
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