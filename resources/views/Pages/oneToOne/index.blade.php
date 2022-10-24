@extends('layouts.master')
@section('content')
        <h3 class="text-center">One To Many Relationship</h3>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Handle</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $key => $user)
                    <tr>
                        <th scope="row">{{$key+1}}</th>
                        <td>{{ $user->name }}</td>
                        <td>
                            @foreach($user->phones as $phone)
                                <p>-> {{$phone->model_name}} </p>
                            @endforeach
                        </td>
                        <td>@mdo</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
