@extends('layouts.app')


{{-- Sezione MAIN da modificare --}}
@section('page-title', 'Comics')

@section('main-content')
    <h1>Comics page</h1>
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

        @foreach ($comics as $elem)
            <tr>
                <th>{{ $elem['id'] }}</th>

                <th>
                    <a href="{{ route('comics.show', $elem['id']) }}">
                        {{ $elem['title'] }}
                    </a>

                </th>

                <th>{{ $elem['description'] }}</th>
                <th>{{ $elem['thumb'] }}</th>
                <th>{{ $elem['price'] }}</th>
                <th>{{ $elem['series'] }}</th>
                <th>{{ $elem['sale_date'] }}</th>
                <th>{{ $elem['type'] }}</th>
                <th>
                    <a href="{{ route('comics.edit', $elem['id']) }}">Edit Element</a>

                    <form method="POST" action="{{ route('comics.destroy', $elem['id']) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Cancella definitivamente elemento
                        </button>
                    </form>
                    
                </th>

            </tr>
        @endforeach


    </table>
    {{$comics -> links()}}
@endsection
