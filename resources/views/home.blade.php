@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="d-flex justify-content-between">
                    <div class="text-start">
                        <p class="fs-1 text-black fw-bold">Featured Plans</p>
                    </div>
                    <div class="text-end align-self-center">
                        <p class="fs-5 text-black fw-semibold">Explore all</p>
                    </div>
                </div>

                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach (Auth::user()->notes as $key => $note)
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-header">
                                    {{ $note->date }}
                                </div>
                                <div class="card-body">
                                    <p class="fs-2 fw-bold">
                                        {{ $note->title }}
                                        <span
                                            class="fs-5 fw-semibold d-flex text-body-secondary">{{ $note->sub_title }}</span>
                                    </p>
                                    <p class="fs-5 fw-normal">{{ Str::limit($note->content, 100) }}</p>
                                </div>
                                <div class="card-footer bg-light">
                                    <a href="{{ route('note.edit', ['id' => $note->id]) }}" class="btn btn-primary">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Back to top button -->
                <a href="{{ route('note') }}" type="button" class="btn btn-info btn-floating rounded-circle btn-lg"
                    id="btn-back-to-top">
                    <span class="fw-bold fs-5">+</span>
                </a>
            </div>
        @endsection
