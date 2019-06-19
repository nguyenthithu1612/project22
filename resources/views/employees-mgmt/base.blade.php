@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Employee Mangement
      </h1>
      <ol class="breadcrumb">
        <li class="active">Employee Mangement</li>
      </ol>
    </section>
    @yield('action-content')
  </div>
@endsection
