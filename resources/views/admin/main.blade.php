@extends('admin.layouts.full-page') @section('content')

<div class="row">
    <div class="col-12">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
        </ol>

        <h3 class="text-info">Testing Jquery.</h3>
        <p>Jquery Version is:
            <span id="jquery-version" class="danger">Not Working</span>
        </p>
        <h3 class="text-info">Testing Fontawesome.</h3>
        <p>
            Font Awesome is working?
            <i class="fa fa-check-square-o fa-lg" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-2x" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-3x" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-4x" aria-hidden="true"></i>
            <i class="fa fa-check-square-o fa-5x" aria-hidden="true"></i>
        </p>

        <h3 class="text-info">Testing bootstrap javascript.</h3>
        <!-- Button to Open the Modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
            <span data-toggle="tooltip" data-placement="right" title="This is a tooltip on the right of the button.">
                Open modal
            </span>
        </button>
        <div class="mb-3"></div>

        <h3 class="text-info">Testing bootstrap sass variables.</h3>

        <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
        <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>

    </div>


</div>

@endsection
