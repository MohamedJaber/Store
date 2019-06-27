@extends('layouts.app')
@section('content')
	<fieldset style='margin-bottom: 300px;'>
    <form method="post" action="{{url('/addcategorynew')}}" style="padding-bottom: 50px;" >
    <table class="table " style="font-weight: bold;color: black;">

            {{ csrf_field() }}
            <tr><td style="font-weight: bold">name:</td><td> <input type="text" name="name" placeholder="category name" /></td></tr>
            <tr><td style="font-weight: bold">discribtion</td><td><input name="description" placeholder="description category"></td></tr>
            <tr><td colspan="2"  align="center"><input type="submit" class="btn btn-success btn-lg" style="background-color: black" align="center" value="Add a category"></td></tr>


    </table> </form>
</fieldset>
@endsection