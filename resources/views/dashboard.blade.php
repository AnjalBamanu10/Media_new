<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article App</title>
</head>
<body>
@extends('layout.app')
@section('content')
<form action="{{route('logout')}}" method="get">
<h1>This dashboard</h1>
<button type="submit">Log Out</button>
</form>

@endsection
</body>
</html>