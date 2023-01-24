@extends('layouts.app')


{{-- Sezione MAIN da modificare --}}
@section('page-title', 'Creat Form')


@section('main-content')
<!-- Form -->
      <form method="POST" action="{{ route('comics.store') }}">
            
            @csrf

            <!-- Title -->
            <div class="mb-3">
                  <labe class="form-label">Title</labe>
                  <input type="text" class="form-control" name="title">
            </div>

            <!-- Description -->
            <div class="mb-3">
                  <label class="form-label">Description</label>
                  <input type="text" class="form-control" name="description">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Thumb</labe>
                  <input type="text" class="form-control" name="thumb">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Price</labe>
                  <input type="number" step="0.1" class="form-control" name="price">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Series</labe>
                  <input type="text" class="form-control" name="series">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Sale Date</labe>
                  <input type="data" class="form-control" name="sale_date">
            </div>

            <!-- Thumg -->
            <div class="mb-3">
                  <labe class="form-label">Type</labe>
                  <input type="text" class="form-control" name="type">
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
      </form>
@endsection