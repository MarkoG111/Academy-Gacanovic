@extends('layout.user')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title mb-4">Orders</h2>
                <form action="#">
                    <table class="table table-bordered">
                        @if (session()->get('user')->id_role == 1)
                            @if ($ordersAdmin->isEmpty())
                                <h2 class="text-danger">No orders.</h2>
                            @else
                                <thead>
                                    <tr>
                                        <th class="pro-thumbnail">Image</th>
                                        <th class="pro-title">Course</th>
                                        <th class="pro-price">Price</th>
                                        <th class="pro-hours">Total Hours</th>
                                        <th class="pro-date">Order Date</th>
                                        <th class="pro-username">Username</th>
                                    </tr>
                                </thead>
                                <tbody id="order-table">
                                    @foreach ($ordersAdmin as $oa)
                                        <tr>
                                            <td><img src="{{ asset('img/courses/' . $oa->image_small) }}" alt="{{ $oa->course_name }}"></td>
                                            <td>{{ $oa->course_name }}</td>
                                            <td>{{ $oa->price }} &euro;</td>
                                            <td>{{ $oa->total_hours }}</td>
                                            <td>{{ $oa->created_at }}</td>
                                            <td>{{ $oa->username }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            @endif
                        @endif
                    </table>
                </form>
                @if (session()->has('user') && session()->get('user')->id_role == 1)
                    {{ $ordersAdmin->links('pagination::bootstrap-4') }}
                @endif
            </div>
        </div>
    </div>
@endsection
