@extends('layouts.app')
@section('content')
<div class="container">
<h3>ثبت نظرات</h3>
<form action="{{Route('commentsitem.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
متن نظر : <input type="text" name='commenttext'><br><br>
فایل : <input type="file" name='pathimagefile'><br><br>
<input type="submit" name='submit' value="ثبت">
</form>

</div>
@endsection
