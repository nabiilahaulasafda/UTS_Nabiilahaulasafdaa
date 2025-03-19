@extends('layout.master')
@section('title')
    Beranda
@endsection

@section('beranda', 'active')

@section('isi')
      <div class="container mt-5">
        <ul class="list-group">
            <li class="list-group-item disabled" aria-disabled="true">A disabled item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
          </ul>

      </div>

@endsection
