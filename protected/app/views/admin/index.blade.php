@extends('admin/layout')

@section('content')
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Dashboard
            </h1>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Today's stats</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('adminViewQuizes')}}" style="display:block;" class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-pencil-square-o fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$todayStats['quizzes']}}</div>
                                            <div>New Quizzes</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('adminUsersHome')}}" style="display:block;" class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$todayStats['users']}}</div>
                                            <div>New Users</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-check-square fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$todayStats['attempt']}}</div>
                                            <div>Quiz Attempts</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-share fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$todayStats['share']}}</div>
                                            <div>Quiz social shares</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Overall stats</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('adminViewQuizes')}}" style="display:block;" class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-pencil-square-o fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$overallStats['quizzes']}}</div>
                                            <div>Quizzes</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <a href="{{route('adminUsersHome')}}" style="display:block;" class="panel panel-green">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-user fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$overallStats['users']}}</div>
                                            <div>Users</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel panel-yellow">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-check-square fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$overallStats['attempt']}}</div>
                                            <div>Quiz Attempts</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="panel panel-red">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            <i class="fa fa-share fa-3x"></i>
                                        </div>
                                        <div class="col-xs-9 text-right">
                                            <div class="huge">{{$overallStats['share']}}</div>
                                            <div>Quiz social shares</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-md-12 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-bar-chart-o"></i> Quiz attempts in the last 30 days</h4>
                </div>
                <div class="panel-body">
                    <div id="attemptsChart" style="height: 200px;"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-users"></i> New users in the last 30 days</h4>
                </div>
                <div class="panel-body">
                    <div id="newUsersChart" style="height: 200px;"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
            new Morris.Line({
                // ID of the element in which to draw the chart.
                element: 'attemptsChart',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                data: {{$last30DaysActivity}},
                // The name of the data record attribute that contains x-values.
                xkey: 'date',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['attempt'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Attempts'],
                resize: true
            });
            new Morris.Line({
                // ID of the element in which to draw the chart.
                element: 'newUsersChart',
                // Chart data records -- each entry in this array corresponds to a point on
                // the chart.
                data: {{$last30DaysUserRegistrations}},
                // The name of the data record attribute that contains x-values.
                xkey: 'date',
                // A list of names of data record attributes that contain y-values.
                ykeys: ['registrations'],
                // Labels for the ykeys -- will be displayed when you hover over the
                // chart.
                labels: ['Registrations'],
                resize: true
            });
        })
    </script>
@stop