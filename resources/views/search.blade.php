@extends('carcassTest')
@section('search')
<div>
    <form action="{{ route('search')}}" method="get">
        @csrf
        <label for="search">Search: </label>
        <input type="text" name="search" id="search1">
        <input type="submit" value="search">
        <input type="hidden" name="searchMaterials">
    </form>
</div>
<div>
    <table>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Category</th>
            <th>Usage</th>
            <th>Addition date</th>

        </tr>

        {{Debugbar::info($search_results)}}
        @foreach ($search_results as $result)
        <tr>
            <td>{{$result['name']}}</td>
            <td>{{$result['type']}}</td>
            <td>{{$result['category']}}</td>
            <td>{{$result['link_to_material']}}</td>
            <td>{{$result['addition_date']}}</td>
        </tr>
        @endforeach
    </table>
</div>


@endsection