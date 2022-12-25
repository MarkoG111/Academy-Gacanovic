@extends('layout.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title mb-4">My Learnings</h2>

                @if (session()->get('user')->id_role == 2)
                    @if ($myLearnings->isEmpty())
                        <h2 class="text-danger">No courses in your learning section.</h2>
                    @else
                        <div class="row">
                            @foreach ($myLearnings as $learning)
                                <div class="col-3">
                                    <input type="hidden" name="hiddenIdCourse" id="{{ $learning->id_course }}" value="{{ $learning->id_course }}">

                                    <div class="image-course-info">
                                        <img src="{{ asset('/img/courses/' . $learning->image_small) }}" class="learning-img"/>
                                    </div>
                                    <div class="headings-course-info">
                                        <p><span>Bought At: </span> {{ $learning->created_at }}</p>
                                        <p>{{ $learning->description }}</p>
                                        <p><span>Price: </span> {{ $learning->total_price }} &euro;</p>
                                    </div>
                                    <div class="stats-course-info">
                                        <p class="lessons-heading"><span>Lessons: </span> </p>
                                        @foreach ($lessons as $lesson)
                                            @if ($lesson->id_course == $learning->id_course)
                                                <p>- {{ $lesson->lesson }}</p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endif

            </div>
        </div>
    </div>
@endsection
