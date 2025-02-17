@extends('layouts.admin')
@push('head')
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
@endpush
@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">{{$faqCategory->name}} Faqs</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                                <li class="breadcrumb-item registrarive">Faqs</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">

                @if($errors->any())
                    @include('errors')
                @endif
                @if (session('message'))
                    <div class="col-lg-6">
                        <!-- Primary Alert -->
                        <div class="alert alert-primary alert-dismissible fade {{--show--}}" role="alert">
                            <strong> Hi! </strong> <b>{{session('message')}} </b> !
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                @endif

                <div class="card">
                    <div class="card-body">
                        <div class="row g-2">
                            <!--end col-->
                            <div class="col-sm-auto {{--ms-auto--}}">
                                <div class="list-grid-nav hstack gap-1">

                                    <a class="btn btn-info" href="{{url('/admin/faq_category')}}">
                                        <i class="ri-arrow-left-fill me-1 align-bottom"></i> Back
                                    </a>

                                    <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#addmembers">
                                        <i class="ri-add-fill me-1 align-bottom"></i> Add {{$faqCategory->name}} Faqs
                                    </button>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <div class="accordion" id="default-accordion-example">
                                @foreach($faqCategory->faqs as $faq)
                                    <?php $x = 1?>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse{{$faq->id}}"
                                                    aria-expanded="true"
                                                    aria-controls="collapse{{$faq->id}}">
                                                {{$faq->question}}
                                            </button>
                                        </h2>
                                        <div id="collapse{{$faq->id}}"
                                             class="accordion-collapse collapse {{--show--}}"
                                             aria-labelledby="headingOne"
                                             data-bs-parent="#default-accordion-example">
                                            <div class="accordion-body">
                                                {!! $faq->answer !!}
                                                <br/>
                                                @if($faq->file !=null)
                                                    <a href="{{asset($faq->file)}}">View File</a>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                    <div style="padding: 10px;">
                                        <div class="">
                                            <a href="{{url('/admin/faq/'.$faq->id.'/edit')}}"
                                               class="btn btn-success" id="add-btn">Edit FAQ</a>

                                        </div>
                                    </div>
                                    <?php $x = $x + 1?>
                                @endforeach
                            </div>
                            <!--end row-->

                            <!-- Modal -->
                            <div class="modal fade" id="addmembers" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="myModalLabel">Add {{$faqCategory->name}}
                                                Faq</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="post"
                                                  action="{{url('/admin/faq/'.$faqCategory->id.'/store')}}"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Faq
                                                                question</label>
                                                            <input type="text" class="form-control" name="question"
                                                                   placeholder="Enter form title">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Faq
                                                                answer</label>
                                                            <textarea class="form-control" name="answer"
                                                                      id="editor"></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <label for="teammembersName" class="form-label">Upload
                                                                File</label>
                                                            <input type="file" class="form-control" name="file"
                                                                   placeholder="upload form">
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-12">
                                                        <div class="hstack gap-2 {{--justify-content-end--}}">
                                                            <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Close
                                                            </button>
                                                            <button type="submit" class="btn btn-success">Add Faq
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!--end modal-content-->
                                </div>
                                <!--end modal-dialog-->
                            </div>
                            <!--end modal-->

                        </div>
                    </div><!-- end col -->
                </div>
            </div>
            <!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
@stop
@push('scripts')
    <!-- ckeditor -->

    <script src="{{asset('/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('/editor/ckeditor/ckeditor.custom.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $(function () {
            $(".datepicker").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });
    </script>

@endpush
