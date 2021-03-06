<head>
    <title>Practice Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
@extends('user/layout')
@section('content')
<div class="container ops-main">
    <div class="row">
        <div class="col-md-12">

            <h3 class="ops-title">{{ $users->name }}</h3>

            <div>
                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-11 col-md-offset-1">
                <table class="table text-center">
                    <tr>
                        <th class="text-center">アバター</th>
                        <th class="text-center">名前</th>
                        <th class="text-center">email</th>
                    </tr>

                    <tr>
                        <td>
                            <img src="../../../storage/images/{{ $users->avatar }}" width="100" height="100">
                        </td>
                        <td> {{ $users->name }} </td>
                        <td> {{ $users->email }} </td>

                        <td>
                            <form action="/user/{{ $users->id }}" method="post">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-xs btn-danger" aria-label="Left Align"><span class="glyphicon glyphicon-trash"></span></button>
                            </form>
                        </td>
                    </tr>

                </table>
                <div><a href="/user/{{ $users->id }}/edit" class=" btn btn-default">登録情報編集</a></div>
            </div>
        </div>
