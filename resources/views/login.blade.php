@extends('layouts.masterLayout')
@section('content')
<div class="row form-container">
    <form class="col-4 card p-5 form" method="post" action="/login">
        @csrf
        <div class="mb-3 col-10">
            <?php

                if(session()->has('status'))
                {
                    echo '<p class="text-danger">'.session()->get("status").'</p>';
                }
            ?>
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control form-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
          @error('email')
              <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <div class="mb-3 col-10">
          <label for="exampleInputPassword1" class="form-label form-input">Password</label>
          <input type="password" class="form-control form-input" id="exampleInputPassword1" name="password">
          @error('password')
              <p class="text-danger">{{$message}}</p>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary col-3">Submit</button>
      </form>
</div>
@endsection

