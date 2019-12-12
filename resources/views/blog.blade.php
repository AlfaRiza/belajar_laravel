@extends('layout.main')

    @section('title','Blog')
    @section('container')
    @parent
    <div class="container">
    <h6>Nama : </h6>
    <p>{{ $nama }}</p>
    </div>
    
    @endsection()
</body>
</html>