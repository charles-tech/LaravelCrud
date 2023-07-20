
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@stop

@section('content')

<h1> Informações Primarias</h1>

<div class="row">
    <div class="col-lg-3 col-6">

        <div class="small-box bg-info">
            <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-success">
            <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>
                <p>Bounce Rate</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-warning">
            <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">

        <div class="small-box bg-danger">
            <div class="inner">
                <h3>65</h3>
                <p>Unique Visitors</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

</div>

<div class="card bg-gradient-success">
    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
        <h3 class="card-title">
            <i class="far fa-calendar-alt"></i>
            Calendar
        </h3>

        <div class="card-tools">

            <div class="btn-group">
                <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                </div>
            </div>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                <i class="fas fa-times"></i>
            </button>
        </div>

    </div>

    <div class="card-body pt-0">

        <div id="calendar" style="width: 100%"><div class="bootstrap-datetimepicker-widget usetwentyfour"><ul class="list-unstyled"><li class="show"><div class="datepicker"><div class="datepicker-days" style=""><table class="table table-sm"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Month"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Month">July 2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Month"></span></th></tr><tr><th class="dow">Su</th><th class="dow">Mo</th><th class="dow">Tu</th><th class="dow">We</th><th class="dow">Th</th><th class="dow">Fr</th><th class="dow">Sa</th></tr></thead><tbody><tr><td data-action="selectDay" data-day="06/25/2023" class="day old weekend">25</td><td data-action="selectDay" data-day="06/26/2023" class="day old">26</td><td data-action="selectDay" data-day="06/27/2023" class="day old">27</td><td data-action="selectDay" data-day="06/28/2023" class="day old">28</td><td data-action="selectDay" data-day="06/29/2023" class="day old">29</td><td data-action="selectDay" data-day="06/30/2023" class="day old">30</td><td data-action="selectDay" data-day="07/01/2023" class="day weekend">1</td></tr><tr><td data-action="selectDay" data-day="07/02/2023" class="day active weekend">2</td><td data-action="selectDay" data-day="07/03/2023" class="day">3</td><td data-action="selectDay" data-day="07/04/2023" class="day">4</td><td data-action="selectDay" data-day="07/05/2023" class="day">5</td><td data-action="selectDay" data-day="07/06/2023" class="day">6</td><td data-action="selectDay" data-day="07/07/2023" class="day">7</td><td data-action="selectDay" data-day="07/08/2023" class="day weekend">8</td></tr><tr><td data-action="selectDay" data-day="07/09/2023" class="day weekend">9</td><td data-action="selectDay" data-day="07/10/2023" class="day">10</td><td data-action="selectDay" data-day="07/11/2023" class="day today">11</td><td data-action="selectDay" data-day="07/12/2023" class="day">12</td><td data-action="selectDay" data-day="07/13/2023" class="day">13</td><td data-action="selectDay" data-day="07/14/2023" class="day">14</td><td data-action="selectDay" data-day="07/15/2023" class="day weekend">15</td></tr><tr><td data-action="selectDay" data-day="07/16/2023" class="day weekend">16</td><td data-action="selectDay" data-day="07/17/2023" class="day">17</td><td data-action="selectDay" data-day="07/18/2023" class="day">18</td><td data-action="selectDay" data-day="07/19/2023" class="day">19</td><td data-action="selectDay" data-day="07/20/2023" class="day">20</td><td data-action="selectDay" data-day="07/21/2023" class="day">21</td><td data-action="selectDay" data-day="07/22/2023" class="day weekend">22</td></tr><tr><td data-action="selectDay" data-day="07/23/2023" class="day weekend">23</td><td data-action="selectDay" data-day="07/24/2023" class="day">24</td><td data-action="selectDay" data-day="07/25/2023" class="day">25</td><td data-action="selectDay" data-day="07/26/2023" class="day">26</td><td data-action="selectDay" data-day="07/27/2023" class="day">27</td><td data-action="selectDay" data-day="07/28/2023" class="day">28</td><td data-action="selectDay" data-day="07/29/2023" class="day weekend">29</td></tr><tr><td data-action="selectDay" data-day="07/30/2023" class="day weekend">30</td><td data-action="selectDay" data-day="07/31/2023" class="day">31</td><td data-action="selectDay" data-day="08/01/2023" class="day new">1</td><td data-action="selectDay" data-day="08/02/2023" class="day new">2</td><td data-action="selectDay" data-day="08/03/2023" class="day new">3</td><td data-action="selectDay" data-day="08/04/2023" class="day new">4</td><td data-action="selectDay" data-day="08/05/2023" class="day new weekend">5</td></tr></tbody></table></div><div class="datepicker-months" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Year"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Year">2023</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Year"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span data-action="selectMonth" class="month">Feb</span><span data-action="selectMonth" class="month">Mar</span><span data-action="selectMonth" class="month">Apr</span><span data-action="selectMonth" class="month">May</span><span data-action="selectMonth" class="month">Jun</span><span data-action="selectMonth" class="month active">Jul</span><span data-action="selectMonth" class="month">Aug</span><span data-action="selectMonth" class="month">Sep</span><span data-action="selectMonth" class="month">Oct</span><span data-action="selectMonth" class="month">Nov</span><span data-action="selectMonth" class="month">Dec</span></td></tr></tbody></table></div><div class="datepicker-years" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Decade"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5" title="Select Decade">2020-2029</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Decade"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectYear" class="year old">2019</span><span data-action="selectYear" class="year">2020</span><span data-action="selectYear" class="year">2021</span><span data-action="selectYear" class="year">2022</span><span data-action="selectYear" class="year active">2023</span><span data-action="selectYear" class="year">2024</span><span data-action="selectYear" class="year">2025</span><span data-action="selectYear" class="year">2026</span><span data-action="selectYear" class="year">2027</span><span data-action="selectYear" class="year">2028</span><span data-action="selectYear" class="year">2029</span><span data-action="selectYear" class="year old">2030</span></td></tr></tbody></table></div><div class="datepicker-decades" style="display: none;"><table class="table-condensed"><thead><tr><th class="prev" data-action="previous"><span class="fa fa-chevron-left" title="Previous Century"></span></th><th class="picker-switch" data-action="pickerSwitch" colspan="5">2000-2090</th><th class="next" data-action="next"><span class="fa fa-chevron-right" title="Next Century"></span></th></tr></thead><tbody><tr><td colspan="7"><span data-action="selectDecade" class="decade old" data-selection="2006">1990</span><span data-action="selectDecade" class="decade" data-selection="2006">2000</span><span data-action="selectDecade" class="decade" data-selection="2016">2010</span><span data-action="selectDecade" class="decade active" data-selection="2026">2020</span><span data-action="selectDecade" class="decade" data-selection="2036">2030</span><span data-action="selectDecade" class="decade" data-selection="2046">2040</span><span data-action="selectDecade" class="decade" data-selection="2056">2050</span><span data-action="selectDecade" class="decade" data-selection="2066">2060</span><span data-action="selectDecade" class="decade" data-selection="2076">2070</span><span data-action="selectDecade" class="decade" data-selection="2086">2080</span><span data-action="selectDecade" class="decade" data-selection="2096">2090</span><span data-action="selectDecade" class="decade old" data-selection="2106">2100</span></td></tr></tbody></table></div></div></li><li class="picker-switch accordion-toggle"></li></ul></div></div>
    </div>

</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

