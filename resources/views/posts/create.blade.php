@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <form action="{{ route('store') }}" method="POST">
                        @csrf
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title">
                        <label>Text:</label>
                        <textarea class="form-control" name="text" cols="30" rows="10" placeholder="Write your Text here!"></textarea>
                        <label>Author:</label>
                        <input type="Author" class="form-control" name="author">
                        <p></p>
                        <button class="btn btn-primary w-40">save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
