@extends('carcassTest')
@section('materials')
<h3>Materials</h3>
<div>

</div>

<form action="/tryToInsert" method="post">
    @csrf
    <div>
        <label for="material_name">Material Name:</label>
        <input type="text" name="material_name" id="material_name" placeholder="Material name">
    </div>
    <div>
        <label for="type_id">Select Type:</label>
        <select name="type_id">
            @foreach ($type_category_lists['types'] as $type)
            <option value="{{$type['id']}}">{{$type['name']}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="category_id">Select Category:</label>
        <select name="category_id">
            @foreach ($type_category_lists['categorys'] as $category)
            <option value="{{$category['id']}}">{{$category['name']}}</option>
            @endforeach
        </select>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" name="amount" id="amount">
        </div>
        <div>
            <label for="material_url">Material URL:</label>
            <input type="text" name="material_url" id="material_url">
        </div>
    </div>

    <div>
        <input type="submit" name="submit" value="Submit">
    </div>


</form>

@endsection