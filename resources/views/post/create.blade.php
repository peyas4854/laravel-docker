@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Post</div>

                    <div class="card-body">
                        <form action="{{ url('/store-post') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="image">
                            <br> <br>
                            <button type="submit"> submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
