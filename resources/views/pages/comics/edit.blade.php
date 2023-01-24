@extends('layouts.app')


{{-- Sezione MAIN da modificare --}}
@section('page-title', 'Edit')


@section('main-content')

<!-- Form -->
      <form method="POST" action="{{ route('comics.update', $elem['id']) }}">
            
            @csrf
            @method('PUT')

            <!-- Title -->
            <div class="mb-3">
                  <labe class="form-label">Title</labe>
                  <input value="{{ $elem['title'] }}" type="text" class="form-control" name="title">
            </div>

            <!-- Description -->
            <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input value="{{ $elem['description'] }}" type="text" class="form-control" name="description">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Thumb</labe>
                  <input value="{{ $elem['thumb'] }}" type="text" class="form-control" name="thumb">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Price</labe>
                  <input value="{{ $elem['price'] }}" type="number" step="0.1" class="form-control" name="price">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Series</labe>
                  <input value="{{ $elem['series'] }}" type="text" class="form-control" name="series">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Sale Date</labe>
                  <input value="{{ $elem['sale_date'] }}" type="date" class="form-control" name="sale_date">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Type</labe>
                  <input value="{{ $elem['type'] }}" type="text" class="form-control" name="type">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
      </form>
@endsection