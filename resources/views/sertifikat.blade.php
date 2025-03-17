@extends('layout.master')
@section('title')
    Beranda
@endsection

@section('beranda', 'active')

@section('isi')
<ul class="list-group">
    <li class="list-group-item d-flex justify-content-between align-items-center">
      A list item
      <span class="badge text-bg-primary rounded-pill">14</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      A second list item
      <span class="badge text-bg-primary rounded-pill">2</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      A third list item
      <span class="badge text-bg-primary rounded-pill">1</span>
    </li>
  </ul>

@endsection
