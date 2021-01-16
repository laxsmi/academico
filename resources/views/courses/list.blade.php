@extends('backpack::blank')

@section('header')
<section class="container-fluid">
    <h2>
        @lang('Courses')
    </h2>

    <div class="form-group">
        <a class="btn btn-primary" href="{{ route('course-view-switch', ['view' => 'list']) }}">@lang('Switch to list view')</a>
    </div>
</section>
@endsection


@section('content')

<div id="app" class="row">
<div class="col-md-12">
    <course-list-component
        :defaultperiod="{{ $defaultPeriod }}"
        :periods="{{ $periods }}"
        :teachers="{{ $teachers }}"
        :rhythms="{{ $rhythms }}"
        :levels="{{ $levels }}"
        :editable="{{ $isAllowedToEdit }}"
        mode="{{ $mode }}"
        :student="{{ $student }}"
        enrollment_id="{{ $enrollment_id }}"
    ></course-list-component>
</div>
</div>

@endsection

@section('before_scripts')
    <script src="/js/app.js"></script>
@endsection