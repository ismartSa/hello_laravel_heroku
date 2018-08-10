
@extends('layout.app')
    @section('content')
    <div class="container">
                <div class="content">
                        @include('includes.sliedeshow')
                </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            @foreach($mylang as $mylangs)
                                <ul class="list-group">
                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                                {{$mylangs}}
                                        <span class="badge badge-primary badge-pill"> {{$mylangs}}</span>
                                        </li>
                                </ul>
                            @endforeach
                        </div>
                        <div class="col-lg-6">
                                @foreach($mylang as $mylangs)
                                    <ul class="list-group">
                                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                                    {{$mylangs}}
                                            <span class="badge badge-primary badge-pill"> {{$mylangs}}</span>
                                            </li>
                                    </ul>
                                @endforeach
                            </div>
                    </div>
                </div>
            </div>
    </div>
            @endsection
