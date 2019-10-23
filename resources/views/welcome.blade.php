@extends('layouts.app')

@section('content')
    <h1>Welcom</h1>
    <p>:)</p>
    <div class="container">
        @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>Sample Post details</h2>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                @foreach($details as $user)
                    <tr>
                        <td>{{$user->title}}</td>
                        <td>{{$user->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
        @endif
    </div>


@endsection
