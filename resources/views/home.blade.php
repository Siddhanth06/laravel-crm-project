@extends('layouts.masterLayout')

@section('content')
{{-- @include('components.navbar')
@include('components.sidebar') --}}
<div class="main-content">
    <div class="totals">
        <div class="total card bg-danger">
            <p>Total Leads</p>
            <p>1250</p>
        </div>
        <div class="total card bg-success">
            <p>Total Leads</p>
            <p>1250</p>
        </div>
        <div class="total card bg-primary">
            <p>Total Leads</p>
            <p>1250</p>
        </div>
        <div class="total card bg-secondary">
            <p>Total Leads</p>
            <p>1250</p>
        </div>
    </div>
    <div class="main-lead-table">
        <div class="lead-table">
            <div>Total leads</div>
            <div><button class="btn btn-primary">View All</button></div>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Lead Name</th>
                <th scope="col">Company</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Lead Source</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Siddhanth</td>
                <td>Siddhanth Infotech</td>
                <td>siddhanth@gmail.com</td>
                <td>218211030</td>
                <td>Social Media</td>
              </tr>
              <tr>
                <td>Siddhanth</td>
                <td>Siddhanth Infotech</td>
                <td>siddhanth@gmail.com</td>
                <td>218211030</td>
                <td>Social Media</td>
              </tr>
              
            </tbody>
          </table>
    </div>
    <div class="main-lead-table">
        <div class="lead-table">
            <div>Total leads</div>
            <div><button class="btn btn-primary">View All</button></div>
        </div>
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Lead Name</th>
                <th scope="col">Company</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Lead Source</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Siddhanth</td>
                <td>Siddhanth Infotech</td>
                <td>siddhanth@gmail.com</td>
                <td>218211030</td>
                <td>Social Media</td>
              </tr>
              <tr>
                <td>Siddhanth</td>
                <td>Siddhanth Infotech</td>
                <td>siddhanth@gmail.com</td>
                <td>218211030</td>
                <td>Social Media</td>
              </tr>
              
            </tbody>
          </table>
    </div>
</div>
@endsection