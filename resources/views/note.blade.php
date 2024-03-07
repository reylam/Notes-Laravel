@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <h1>Add your note</h1>
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{ route('note.create') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="title" class="form-control" id="titleId" name="title">
                                            <label for="sub-title" class="form-label">Sub-title</label>
                                            <input type="sub-title" class="form-control" id="sub-titleId" name="sub_title">
                                            <label for="content" class="form-label">Content</label>
                                            <textarea class="form-control mb-2" style="height: 200px;" placeholder="Textarea panjang dan besar" type="content"
                                                id="content" name="content"></textarea>
                                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                            <label for="date">Date your add</label>
                                            <input type="date" class="form-control form-control-lg mb-3" name="date">
                                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
