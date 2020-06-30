@extends('layout.app');

@section('title','Home')

@section('content')
<div class="card" style="width: 100%;">
    <div class="card-body">  
        <h1> Buat Account Baru!</h1>

        <h3 class="p-2">Sign Up Form</h3>
        <form action="/register/proses" method="post">
            <div class="form-group">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <!-- text -->
                <label for="fistname"> Fist Name </label>
                <input class="form-control" type="text" id="fistname" name="fistname">
                <label for="lastname"> Last Name </label>
                <input class="form-control" type="text" id="lastname" name="lastname">
            </div>
            
            <div class="form-check">
                <!-- radio -->
                <label class="form-check-label mb-2"> Gender :</label><br>
                <input class="form-check-input" type="radio" id="male" name="gender" value="male">
                <label class="form-check-label" for="male">Male</label><br>
                <input class="form-check-input" type="radio" id="female" name="gender" value="female">
                <label class="form-check-label" for="female">Female</label><br>
                <input class="form-check-input"type="radio" id="other" name="gender" value="other">
                <label class="form-check-label" for="other">Other</label>
            </div>

            <!-- select -->
            <br>
            <label> Nationally : </label> <br>
            <select class="custom-select" name="nationaly" id="national">
                <option value="indonesia"> Indonesia</option>
                <option value="english"> English</option>
            </select>
            
            <div class="form-check">
                <!-- checkbox -->
                <br><br>
                <label> Language Spoken : </label>
                <br><br>
                <input class="form-check-input" type="checkbox" name="indonesia" id="indonesia">
                <label class="form-check-label" for="indonesia"> Indonesia </label><br>
                <input class="form-check-input" type="checkbox" name="english" id="english">
                <label class="form-check-label" for="english"> English </label><br>
                <input class="form-check-input" type="checkbox" name="other" id="other">
                <label class="form-check-label"   for="other"> Other </label><br>
            </div>
    
            <!-- text -->
            <br>
            <label for="bio"> Bio : </label>
            <br><br>
            <textarea id="bio" name="bio" rows="10" cols="50">
            </textarea>
    
            <!-- submit -->
            <br>
            <input class="btn btn-primary mt-2" type="submit" name="signup" id="signup" value="Sign Up ">
        </form>
    </div>
</div>
@endsection