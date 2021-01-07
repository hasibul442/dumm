@extends('layouts.master')
@section('content')
 <div class="container">
   <div class="row pt-5">
    <div class="col-sm-4"></div>
    <div class="col-sm-6">
        <form>
            <div class="form-group" style="margin-top:200px">
              <label for="a">Email address</label>
              <input type="text" class="form-control" id="a" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="b">Password</label>
              <input type="text" class="form-control" id="b" name="pass" >
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" id="submit" class="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
   </div>
 </div>
@endsection
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script>
   $(document).ready(function(){
        $("#submit").on("click", function(){
        var a = $('#a').val();
        var b = $('#b').val();
        var sum = +a + +b;
          console.log(sum);
        })
    })
</script>