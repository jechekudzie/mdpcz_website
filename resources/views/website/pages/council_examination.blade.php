<?php
/**
 * Created by PhpStorm for mdpcz
 * User: VinceGee
 * Date: 1/10/2023
 * Time: 11:02 AM
 */ ?>
@extends('website.partials.layout')

@section('template_title')
    Council Registration Assessment
@endsection

@section('site_content')
    <!--Start breadcrumb area-->
    <div class="breadcrumb-area" style="background-color: #0195DB;">
        <div class="container text-center">
            <h1>Council Registration Assessment</h1>

        </div>
    </div>
    <!--End breadcrumb area-->

    <div class="about-us">
        <div class="container">
            <div class="row">
                <div style="margin-top: 30px;" class="col-md-3 col-sm-12">
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">EDUCATION</div>
                        <!-- List group -->
                        <ul class="list-group">

                            <li class="list-group-item"><a href="{{url('/council_examination')}}">Council Registration
                                    Assessment</a></li>
                            <li class="list-group-item"><a href="{{url('/training_institution')}}">Medical / Dental
                                    Training Institutions</a></li>
                            <li class="list-group-item"><a href="{{url('/internship_institution')}}">Intern / Specialist
                                    Teaching Units</a></li>
                            {{-- <li class="list-group-item"><a href="{{url('/contact_us')}}">Request Log Books</a></li>--}}

                        </ul>
                    </div>
                    <div class="panel panel-primary">
                        <!-- Default panel contents -->
                        <div class="panel-heading">QUICK LINKS</div>
                        <!-- List group -->
                        <ul class="list-group">
                            @foreach($quick_links as $quick_link)
                                <li class="list-group-item">
                                    <a href="{{$quick_link->url}}" target="_blank">{{$quick_link->title}}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

                <div style="margin-top: 30px;" class="col-md-9 col-sm-12">

                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <img src="{{asset('exam-pic-blended.jpeg')}}">
                        </div>

                        <div class="col-md-6 col-sm-12">
                            <p style="color: black">Please be advised that Council will be conducting registration
                                examinations for foreign
                                trained medical and dental applicants on the following date and time:</p>
                        </div>
                    </div>
                    <div style="padding-top: 30px">
                        <p style="color: black">The Council Registration Assessment are scheduled March, June and
                            October of each year.
                            @if($exam_date)
                                This next exam is on:</p><br/>

                                 <table class="table table-bordered">
                            <tr>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Venue</th>
                            </tr>
                            @if($exam_date->is_published == 1)
                                <tr>
                                    <td>{{$exam_date->date}}</td>
                                    <td>{{$exam_date->time}}</td>
                                    <td>{{$exam_date->venue}}</td>
                                </tr>
                            @endif

                        </table>
                        @endif
                    </div>

                    <div style="padding-top: 30px">
                        @foreach($exams as $exam)
                            <div style="padding-top: 20px">
                                {!! $exam->description !!}
                            </div>
                        @endforeach
                    </div>

                    <div style="padding-top: 30px">
                        <h4>Please refer to: </h4>
                        <hr/>
                        <ul>
                            @foreach($exam_guidelines as $exam_guideline)
                                <li><a href="{{asset($exam_guideline->file)}}"
                                       target="_blank">{{$exam_guideline->title}}</a></li>
                            @endforeach
                        </ul>
                        <hr/>
                    </div>
                    <div style="padding-top: 30px">
                        <h4>For any further clarification, please contact Council:</h4>
                        <p style="color: black;">
                            <br/>
                            Julian Mashingaidze
                            <br/>
                            <br/>
                            Cell: 263 712 879 646
                            <br/>
                            <br/>
                            Email: julian@mdpcz.co.zw
                        </p>
                    </div>

                </div>


            </div>
        </div>
    </div>

@endsection
