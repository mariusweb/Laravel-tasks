@extends('carcassTest')
@section('search')
<form action="{{ route('materials')}}" method="get">

    <label for="search">Search: </label>
    <input type="text" name="search" id="search1">
    <input type="submit" value="search">
    <input type="hidden" name="searchMaterials">
</form>
@endsection