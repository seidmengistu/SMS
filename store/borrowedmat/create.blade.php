@extends('layouts.borrowedmaterial')
@section('content')
    <h1 style="color:darkturquoise;font-family:'Times New Roman', Times, serif">Borrow Material</h1><br>
<div class="container">
        @include('store.borrowedmat.storeform')
  </div>

@endsection