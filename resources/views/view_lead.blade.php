@extends('layouts.masterLayout')
@section('content')
    <div class="add-lead-container">
        <h1 style="margin-bottom: 2rem">View Lead</h1>
        <form action="{{route('add_lead')}}" method="post">
        @csrf
        {{-- <div class="row card lead-card p-2">
            <h1>Lead Information</h1>
                <div class="col-4 form-group">
                    <label for="">First Name</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="first_name" value="{{old('first_name')}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('first_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Last Name</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text"  name="last_name" value="{{old('last_name')}}" class="form-control" placeholder="Last name" aria-label="Last name">
                    @error('last_name')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Title</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('title')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Company</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="company" value="{{old('company')}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('company')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Phone</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="number" name="phone" value="{{old('phone')}}" class="form-control" placeholder="Last name" aria-label="Last name">
                    @error('phone')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    <label for="">Email</label>
                    <span class="text-danger fs-3">*</span>
                    <input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="First name" aria-label="First name">
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="col-4 form-group">
                    @php
                        $lead_sources = ['Advertising','Social Media','Webinar','Website','Word of mouth','Other'];
                    @endphp
                    <label for="">Lead Source</label>
                    <select name="lead_source" id="" class="form-select lead-status" aria-label="Default select example">
                        @foreach ($lead_sources as $lead)
                            <option value="{{$lead}}">{{$lead}}</option>
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
                            <option value="{{$status}}">{{$status}}</option>
                        @endforeach
                      </select>
                </div>
                <h1>Address Information</h1>
                <div class="col-4 form-group">
                    <label for="">Street</label>
                    <input type="text" name="street" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-4 form-group">
                    <label for="">City</label>
                    <input type="text" name="city" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                <div class="col-4 form-group">
                    <label for="">State</label>
                    <input type="text" name="state" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-4 form-group">
                    <label for="">Zip Code</label>
                    <input type="text" name="zip_code" class="form-control" placeholder="First name" aria-label="First name">
                </div>
                <div class="col-4 form-group">
                    <label for="">Country</label>
                    <input type="text" name="country" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
                <h1>Description Information</h1>
                <div class="col-12 form-group">
                    <label for="">Description</label>
                    <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <button class="btn btn-primary col-1" type="submit">Save</button>
                <button class="btn btn-secondary col-1 mx-2">Cancel</button>
        </div> --}}
        <div class="card ">
            <h1 class="h1">Lead Details</h1>
            <div class="info">
            <div>
                <p><span class="bold">First Name</span> : {{$lead['first_name']}}</p>
                <p><span class="bold">Last Name</span> : {{$lead['last_name']}}</p>
                <p><span class="bold">Title</span> : {{$lead['title']}}</p>
                <p><span class="bold">Company</span> : {{$lead['company']}}</p>
            </div>
            <div>
                <p><span class="bold">Phone number</span> : {{$lead['phone']}}</p>
                <p><span class="bold">Email</span> : {{$lead['email']}}</p>
                <p><span class="bold">Lead Source</span> : {{$lead['lead_source']}}</p>
                <p><span class="bold">Lead Status</span> : {{$lead['lead_status']}}</p>
            </div>
        </div>
        <h1 class="h1">Address Details</h1>
        <div class="info">
            <div>
                <p><span class="bold">Street</span> : {{$lead['street']}}</p>
                <p><span class="bold">City</span> : {{$lead['city']}}</p>
                <p><span class="bold">State</span> : {{$lead['state']}}</p>
            </div>
            <div>
                <p><span class="bold">Zip Code</span> : {{$lead['zip_code']}}</p>
                <p><span class="bold">Country</span> : {{$lead['country']}}</p>
            </div>
        </div>
        <h1 class="h1">Description Details</h1>
        <div class="info">
            <div>
                <p><span class="bold">Description</span> : {{$lead['description']}}</p>
               <button class="btn btn-primary"><a class="a" href="{{route('convert_lead',['id'=>$lead['id']])}}">Convert</a></button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </div>
        </div>
        </form>
    </div>
@endsection