@extends('layouts.app')


{{-- Sezione MAIN da modificare --}}
@section('page-title', 'Comics')

    <h1>Show Comic</h1>
    <table>
        <tr>
            <th>id</th>
            <th>title</th>
            <th>description</th>
            <th>thumb</th>
            <th>price</th>
            <th>series</th>
            <th>sale_date</th>
            <th>type</th>
        </tr>


        <tr>
            <th>{{$elem['id']}}</th>
            <th>{{$elem['title']}}</th>
            <th>{{$elem['description']}}</th>
            <th>{{$elem['thumb']}}</th>
            <th>{{$elem['price']}}</th>
            <th>{{$elem['series']}}</th>
            <th>{{$elem['sale_date']}}</th>
            <th>{{$elem['type']}}</th>
        </tr>
        


    </table>
@endsection