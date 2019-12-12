@extends('layout.main')

        @section('title','Home')
        <!-- Awal Body -->
        @section('container')
        @parent
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-3">Hello World</h1>
                </div>
            </div>
        </div>
        @endsection
        <!-- Akhir Body -->