@extends('admin.app')

@section('breadcrumbs')
<ol class="breadcrumb">
    <li><a href="{{route('adminhome')}}"><i class="fa fa-tachometer-alt"></i> Home</a></li>
    <li class="active">{{$title}}</li>
</ol>
@endsection

@section('content')
<section class="content">
    
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="list-group">
                        <a href="{{route('commentsbycategory')}}" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h3 class="mb-1">Comments By Category</h3>
                            </div>
                            <p class="mb-1 text-justify">
                                A report can be generated by selecting one or more categories and clicking on generate. All submissions will be shown except the submissions tagged as <i>Trash</i>. Submissions can be sorted by clicking the respective fields. Submission can be viewed and assigned a new action. Submissions can be exported to PDF.  All actions on a submission can be seen in its history. 
                                <br><br>
                                You can view the <i>Trash</i> submissions by generating a Submission in Trash or Comments by Status with the selection of <i>Trash</i>.
                            </p>
                        </a>
                        {{-- <a href="{{route('commentbysubcategory')}}" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h3 class="mb-1">Comments By Sub-Category</h3>
                            </div>
                            <p class="mb-1 text-justify">
                                A report can be generating by selecting one or more categories and clicking on generate. All submissions will be shown except the submissions tagged as <i>Trash</i>. Submissions can be sorted by clicking the respective fields. Submission can be viewed and assigned a new action. Submissions can be exported to PDF.  All actions on a submission can be seen in its history. 
                                <br><br>
                                You can view the <i>Trash</i> submissions by generating a Submission in Trash or Comments by Status with the selection of <i>Trash</i>.
                            </p>
                        </a> --}}
                        <a href="{{route('commentbystatus')}}" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h3 class="mb-1">Comments By Status</h3>
                            </div>
                            <p class="mb-1 text-justify">
                                A report can be generated by selecting one or more status such as pending, assigned, completed, on hold and trash. Submissions can be sorted by clicking the respective fields. Submission can be viewed and assigned a new action. Submissions can be exported to PDF. All actions on a submission can be seen in its history.
                            </p>
                        </a>
                        {{-- <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                            <div class="d-flex w-100 justify-content-between">
                                <h3 class="mb-1">Comments By Date Range</h3>
                            </div>
                            <p class="mb-1 text-justify">
                                A report be generated for all submissions within a given range such as today, yesterday, last 7 days, last 30 days, the current month, the last month aka previous month, and custom range for any new date range required.  
                                <br><br>
                                All submissions will be shown except the submissions tagged as <i>Trash</i>. Submissions can be sorted by clicking the respective fields. Submission can be viewed and assigned a new action. Submissions can be exported to PDF.  All actions on a submission can be seen in its history.
                            </p>
                        </a> --}}
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
</script>
@endsection