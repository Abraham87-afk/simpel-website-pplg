@extends('admin.dasboard')
@section('content')
   <h1>Category</h1>
   <from action="{{ url('admin/category')}}" method="post">
    @csrf
    <div class="mb-3">
        <label for="">Title</label>
        <input type="text" name="title" class="from-control">
    </div>
    <div class="mb-3">
        <label for="">description</label>
        <textarea class="from-control" name="description" rows="5"></textarea>
    </div>
    <button class="btn btn-primary">Save</button>
</from>
@endsection