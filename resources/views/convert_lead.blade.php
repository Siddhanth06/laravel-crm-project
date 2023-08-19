@extends('layouts.masterLayout')
@section('content')
    <div class="add-lead-container">
        <h1 style="margin-bottom: 2rem">Convert Lead</h1>
        <div class="card convert-container">
            <div>
                <p><span class="grey">Convert Lead </span>({{$lead['first_name']}} {{$lead['last_name']}} - {{$lead['company']}})</p>
            </div>
            <div>
                <p><span class="grey">Create new account</span> - {{$lead['company']}}</p>
                <p><span class="grey">Create new contact</span> - {{$lead['first_name']}} {{$lead['last_name']}}</p>
            </div>
            <div>
                <p><span class="grey">Create new deal for this account</span></p>
                <table>
                    <form action="{{route('convert_lead',['id'=>$lead['id']])}}" method="POST">
                        @csrf
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Amount</label>
                                </div>
                            </td>
                            <td class="space"> : </td>
                            <td>
                                <div class="col-auto">
                                    <input type="number" name="amount" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Deal Name</label>
                                    <span class="text-danger">*</span>
                                </div>
                            </td>
                            <td class="space"> : </td>
                            <td>
                                <div class="col-auto">
                                    <input type="text" name="deal_name" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                </div>
                                @error('deal_name')
              <p class="text-danger">{{$message}}</p>
          @enderror
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Closing Date</label>
                                    <span class="text-danger">*</span>
                                </div>
                            </td>
                            <td class="space"> : </td>
                            <td>
                                <div class="col-auto">
                                    <input type="date" name="closing_date" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                    @error('closing_date')
              <p class="text-danger">{{$message}}</p>
          @enderror
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="col-auto">
                                    <label for="inputPassword6" class="col-form-label">Stage</label>
                                    <span class="text-danger">*</span>
                                  </div>
                            </td>
                            <td class="space"> : </td>
                            <td>
                                @php
                                $lead_status = ['Qualifications','Need Analysis','Proposal/Price Quote','Negotiation','Closed Won','Closed Lost'];
                                @endphp
                                <select class="form-select lead-status" name="stage" aria-label="Default select example">
                                @foreach($lead_status as $status)
                                <option value="{{$status}}">{{$status}}</option>
                                @endforeach
                                </select>
                                @error('stage')
              <p class="text-danger">{{$message}}</p>
          @enderror
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <button class="btn btn-primary">Convert</button>
                <button class="btn btn-secondary">Cancel</button>
            </div>
        </form>
        </div>
    </div>
@endsection