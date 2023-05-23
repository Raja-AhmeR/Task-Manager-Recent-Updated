@extends('layout.main')

@section('title')
{{'| Edit Task'}}
@endsection

@section('content')
    <div class="container">
        <h4>Edit Your Task Here</h4>
        <p>Enter the details of your task.</p>


            <form method="post" action="{{$url}}">
                @csrf

                <div class="mt-4 mb-4 card p-3 bg-white">
                    <h3 class="text-center text-primary">
                        {{$title}}
                    </h3>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Task Title Here..." value="{{ $task->title }}" required>
                        <span class="text-danger">
                            @error('title')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Enter Task Description Here..."  required>{{ $task->description }}</textarea>
                        <span class="text-danger">
                            @error('description')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="start-date">Start Date</label>
                        <input type="date" class="form-control" name="start-date" id="start-date" value="{{ $task->start_date }}" required>
                        <span class="text-danger">
                            @error('start-date')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="end-date">End Date</label>
                        <input type="date" class="form-control" name="end-date" id="end-date" value="{{ $task->end_date }}" required>
                        <span class="text-danger">
                            @error('end-date')
                                {{$message}}
                            @enderror
                        </span>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary col-md-1">Update</button>
            </form> <br>


    </div>

@endsection
