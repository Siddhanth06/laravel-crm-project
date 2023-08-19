@extends('layouts.masterLayout')
@section('content')
    <div class="add-lead-container">
        <h1 style="margin-bottom: 2rem">Edit Lead</h1>
        <form action="{{route('update_lead',['id'=>$lead['id']])}}" method="post">
        @csrf
            <div class="row card lead-card p-2">
            <h1>Lead Information</h1>
                <div class="col-4 form-group">
                    <label for="">First Name</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="first_name" value="{{$lead['first_name']}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('first_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Last Name</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text"  name="last_name" value="{{$lead['last_name']}}" class="form-control" placeholder="Last name" aria-label="Last name">
                    @error('last_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Title</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="title" value="{{$lead['title']}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Company</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="company" value="{{$lead['company']}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('company')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Phone</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="number" name="phone" value="{{$lead['phone']}}" class="form-control" placeholder="Last name" aria-label="Last name">
                    @error('phone')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Email</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="email" value="{{$lead['email']}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    @php
                        $lead_sources = ['Advertising','Social Media','Webinar','Website','Word of mouth','Other'];
                    @endphp
                    <label for="">Lead Sources</label>
                    <select class="form-select lead-status" name="lead_source" aria-label="Default select example">
                        @foreach($lead_sources as $source)
                        @if ($source == $lead['lead_source'])
                        <option value="{{$lead['lead_source']}}" selected>{{$source}}</option>
                        @else
                        <option value="{{$source}}">{{$source}}</option>
                        @endif 
                        @endforeach
                    </select>
                </div>
                <div class="col-4 form-group">
                    @php
                        $lead_status = ['Qualifications','Need Analysis','Proposal/Price Quote','Negotiation','Closed Won','Closed Lost'];
                    @endphp
                    <label for="">Lead Status</label>
                    <select class="form-select lead-status" name="lead_status" aria-label="Default select example">
                        @foreach($lead_status as $status)
                        @if ($status == $lead['lead_status'])
                        <option value="{{$status}}" selected>{{$status}}</option>
                        @else
                        <option value="{{$status}}">{{$status}}</option>
                        @endif 
                        @endforeach
                    </select>
                </div>
                <h1>Address Information</h1>
                <div class="col-4 form-group">
                    <label for="">Street</label>
                    <input type="text" name="street" value="{{$lead['street']}}" class="form-control" placeholder="street" aria-label="First name">
                </div>
                <div class="col-4 form-group">
                    <label for="">City</label>
                    <input type="text" name="city" value="{{$lead['city']}}" class="form-control" placeholder="city" aria-label="Last name">
                </div>
                <div class="col-4 form-group">
                    <label for="">State</label>
                    <input type="text" name="state" value="{{$lead['state']}}" class="form-control" placeholder="state" aria-label="First name">
                </div>
                <div class="col-4 form-group">
                    <label for="">Zip Code</label>
                    <input type="text" name="zip_code" name="{{$lead['zip_code']}}" class="form-control" placeholder="zip code" aria-label="First name">
                </div>
                <div class="col-4 form-group">
                    <label for="">Country</label>
                    <input type="text" name="country" class="form-control" value="{{$lead['country']}}" placeholder="country"  aria-label="Last name">
                </div>
                <h1>Description Information</h1>
                <div class="col-12 form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control">{{$lead['description']}}</textarea>
                </div>
                <button class="btn btn-primary col-1" type="submit">Save</button>
                <button class="btn btn-secondary col-1 mx-2">Cancel</button>
        </div>
    </form>
    </div>
@endsection