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
              <th scope="col">Deal Name</th>
              <th scope="col">Stage</th>
              <th scope="col">Amount</th>
              <th scope="col">Closing Date</th>
              <th scope="col">Amount Name</th>
              <th scope="col">Contact Name</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($deals as $lead)
            <tr>
                
                <td>
                    <a href="">
                           {{$lead['deal_name']}} 
                    </a>
                </td>
                <td>{{$lead['deal_stage']}}</td>
                <td>{{$lead['amount']}}</td>
                <td>{{$lead['closing_date']}}</td>
                <td>{{$lead['get_account_detail']['account_name']}}</td>
                <td>{{$lead['get_contact_detail']['contact_name']}}</td>
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