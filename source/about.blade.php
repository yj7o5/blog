@extends('_layouts.master')

@section('title', 'About')

@section('content')
    <h1>About</h1>

    <p>
        My name is {{ $page->owner->name }}, a Senior Software Engineer, living in Houston, TX. Currently getting my B.Sc. in Computer Science from University of Houston. 
        In my free time, I spend time reading books, listening to podcasts, tinkering in the OSS, and contributing to OSS whenever I find the opportunity. These days I am very much 
        into Go and enjoying every bits and pieces of it.
    </p>

    <h2>Links:</h2>

    <ul>
        <li><a href="https://twitter.com/{{ $page->owner->twitter }}" target="_blank">Twitter</a></li>
        <li><a href="https://github.com/{{ $page->owner->github }}" target="_blank">GitHub</a></li>
    </ul>
@endsection
