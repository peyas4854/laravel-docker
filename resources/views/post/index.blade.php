@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Post</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Action</th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach($posts as $post )
                                <tr>
                                    <th scope="row">1 </th>
                                    <td>{{$post->name}}</td>
                                    <td>
                                        <button class="btn btn-info btn-sm"> Edit </button>
                                        <button class="btn btn-danger btn-sm"> Delete </button>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                        <div class="col-12">
                            {!! $posts->links() !!}

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
