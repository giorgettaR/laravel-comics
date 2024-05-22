@extends('layouts.basic')

@section('title','Comics')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 text-center text-light bg-black">
            <h1>Comics</h1>
                <div class="row">
                    @foreach ($comics as $comic)
                        <div class="col-2">
                            <div class="card text-light bg-black">
                                <img src="<?php echo $comic['thumb'] ?>" alt="" class="card-img-top">
                                <h6 class="card-title text-start"><?php echo $comic['series'] ?></h6>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>
</div>
@endsection