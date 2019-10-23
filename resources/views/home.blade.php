@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                        <a href="/posts/create">Create posts</a>
                    <h3>Your Blog Posts</h3>
                     <table>
                         <tr>
                             <th>Title</th>
                             <th></th>
                             <th></th>
                         </tr>
                         @foreach($posts as $post)
                             <tr>
                                 <th>{{$post->title}}</th>
                                    <th><a href="/posts/{{$post->id}}/edit">Edit</a></th>
                                    <th><a href="/posts/{{$post->id}}/edit">Delete</a></th>
                                 <th>

                                     <div class="form-group">
                                         {!! Form::open(['action' => ['PostsController@online', $post->id], 'method' => 'POST']) !!}
                                         {{Form::hidden('Online', $post->online, ['class' => 'form-control', 'placeholder' => 'Online'])}}
                                         {{Form::submit('Push online')}}
                                         {!! Form::close() !!}
                                     </div>
                                 </th>
                             </tr>
                         @endforeach

                     </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
