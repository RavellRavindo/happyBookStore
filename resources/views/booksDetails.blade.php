
@extends('layout')
@section('Happy Book Store','Books Details')
@section('Header')
@section('Content')
    
    <div class="d-flex justify-content-evenly p-1 text-center mx-auto" style="width: 450px; height: 80px;">
        <a href="/" style="text-decoration: none; color:black"><h6>Home</h6></a>
        <a href="/categoryList" style="text-decoration: none; color:black"><h6>Category</h6></a>
        <a href="/contactInfo" style="text-decoration: none; color:black"><h6>Contact</h6></a>
    </div>

    <div class="container" style="height:700px">
        <div class="row">
            <div class="col">
                <div class="p-2 mb-1 bg-dark text-white mx-auto" style="width: 1080px;">
                    <h3>Book Detail</h3>
                </div>
                <div class="mx-auto" style="width: 1080px;">
                @foreach($booksDetails as $bd)
                    <p>Title: {{$bd->title}}</p>
                    <p>Author: {{$bd->details->author}}</p>
                    <p>Publisher: {{$bd->details->publisher}}</p>
                    <p>Year: {{$bd->details->year}}</p>
                    <p>Description: {{$bd->details->description}}</p>
                @endforeach
                </div>
            </div>
            <div class="col">
                <div class="p-2 mb-1 bg-dark text-white">
                    <h3>Category</h3>
                </div>
                <div style="padding-left: 10px;">
                    <a href="/categoryList/1"style="text-decoration: none; color:black"><p>Fiction</p></a>
                    <a href="/categoryList/2"style="text-decoration: none; color:black"><p>Science</p></a>
                    <a href="/categoryList/3"style="text-decoration: none; color:black"><p>Computer</p></a>
                </div>
            </div>
        </div>
    </div>  

@endsection
@section('Footer')