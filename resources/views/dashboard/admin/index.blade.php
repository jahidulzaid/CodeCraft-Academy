@extends('dashboard.master')

@section('title')
    Admin Dashboard | CodeCraft Academy
@endsection

@section('body')
    <div class="dashboardarea sp_top_100 sp_bottom_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="dashboardarea__wraper">
                        <div class="dashboardarea__inner student__dashboard__inner">
                            <div class="dashboardarea__left__content">
                                <h3>Admin Dashboard</h3>
                                <h4>Welcome, {{ auth()->user()->name }}</h4>
                                <h5>{{ auth()->user()->email }}</h5>
                            </div>
                        </div>
                    </div>

                    <div class="dashboard__content__wraper mt-4">
                        <div class="dashboard__section__title">
                            <h4>Platform Overview</h4>
                        </div>
                        <p>
                            This is the initial admin surface. Next implementation steps will add user, course,
                            enrollment, and content management modules.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
