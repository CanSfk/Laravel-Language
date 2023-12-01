@extends('layouts.layout')

@section('title','My Blog')

@php
$jsonFile = public_path('db.json');
$jsonData=json_decode(file_get_contents($jsonFile), true);
$data=$jsonData['blogPost'];

$lang=app()->getLocale();
@endphp


@section('content')

<div class="flex flex-col gap-14 w-[90%]">
    @foreach($data as $value)
    <x-blog-post time="{{$value['time']}}" color="bg-green-500" title="{{$value['title'][$lang]}}" description="{{$value['description'][$lang]}}" />
    @endforeach
</div>

@endsection