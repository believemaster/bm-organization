@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <div class="d-flex align-items-center">
                            <h1>{{ $question->title }}</h1>
                            <div class="ml-auto">
                                <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary">Back to all Questions</a>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="media">
                        @include ('shared._vote', [
                            'model' => $question
                        ])

                        <div class="media-body">
                            {!! $question->body_html !!}
                            <div class="row">
                                <div class="col-4">
                                    @can ('update', $question)
                                        <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-sm btn-outline-info">Edit <i class="fa fa-pencil-alt"></i></a>
                                    @endcan
                                    @can ('delete', $question)
                                        <form class="form-delete" method="post" action="{{ route('questions.destroy', $question->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete <i class="fa fa-trash-alt"></i></button>
                                        </form>
                                    @endcan
                                </div>
                                <div class="col-4"></div>
                                <div class="col-4">
                                    @include ('shared._author', [
                                        'model' => $question,
                                        'label' => 'asked'
                                    ])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('answers._index', [
        'answers' => $question->answers,
        'answersCount' => $question->answers_count,
    ])
    @include ('answers._create')
</div>
@endsection
