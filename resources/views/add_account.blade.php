@extends('layouts.masterLayout')
@section('content')
    <div class="add-lead-container">
        @csrf
        <h1>Add Account</h1>
        <div style="display: flex;align-items: center;height:70vh;justify-content: center;font-size:2rem">
            <table>
                <form action="{{route('add_account')}}" method="POST">
                    @csrf
                <tbody>
                    <tr>
                        <td>
                            <div class="col-auto grey">
                                <label for="inputPassword6" class="col-form-label">Account Name</label>
                                <span class="text-danger">*</span>
                            </div>
                        </td>
                        <td class="space"> : </td>
                        <td>
                            <div class="col-auto">
                                <input type="text" name="account_name" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                                @error('account_name')
                                <p class="text-danger">{{$message}}</p>
                                 @enderror
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-auto grey" >
                                <label for="inputPassword6" class="col-form-label">Phone</label>
                                <span class="text-danger">*</span>
                            </div>
                        </td>
                        <td class="space"> : </td>
                        <td>
                            <div class="col-auto">
                                <input type="number" name="phone" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                            @error('phone')
                            <p class="text-danger">{{$message}}</p>
                            @enderror
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="col-auto grey">
                                <label for="inputPassword6" class="col-form-label">Website</label>
                            </div>
                        </td>
                        <td class="space"> : </td>
                        <td>
                            <div class="col-auto">
                                <input type="text" name="website" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>  
                            <button class="btn btn-primary"  type="submit">Save</button>
                            <button class="btn btn-secondary">Cancel</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection