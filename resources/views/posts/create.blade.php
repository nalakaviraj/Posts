@extends('layout')


@section('content')

<div class="col-sm-8 blog-main">


create a post

<form method="POST" action='/posts'>

	{{csrf_field()}}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" >
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    
<textarea id="body" name='body' class="form-control" >  </textarea>

  </div>
 
 <div class="form-group">
  <button type="submit" class="btn btn-primary">publish</button>
</div>

@include('layouts.errors')
</form>

</div>





@endsection