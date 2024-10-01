@extends('layouts.sidebarm')
@section('content')

    <!-- row end -->
    <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-facebook d-flex align-items-center">
        <div class="card-body py-5">
            <div
            class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
            <i class="mdi mdi-bullseye text-white icon-lg"></i>
            <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">Nombre de vache en gestation</h5>
                <p class="mt-2 text-white card-text">{{$nbre_vache}} vaches par insemination </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-twitter d-flex align-items-center">
            <div class="card-body py-5">
            <div
                class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                <i class="mdi mdi-bullseye text-white icon-lg"></i>
                <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">Nombre de vache en gestation </h5>
                <p class="mt-2 text-white card-text">{{$nbre_v}} vaches (monte naturelle)</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-google d-flex align-items-center">
        <div class="card-body py-5">
            <div
            class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
            <i class="mdi mdi-bullseye text-white icon-lg"></i>
            <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">Le nombre d'intervention</h5>
                <p class="mt-2 text-white card-text">{{$nbre_int}}</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- row end -->
    <!-- row end -->
    <div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-info d-flex align-items-center">
        <div class="card-body py-5">
            <div
            class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
            <i class="mdi mdi-bullseye text-white icon-lg"></i>
            <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">Nombre des vaches</h5>
                <p class="mt-2 text-white card-text">{{$nbre_b}} vaches </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-secondary d-flex align-items-center">
            <div class="card-body py-5">
            <div
                class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
                <i class="mdi mdi-bullseye text-white icon-lg"></i>
                <div class="ml-3 ml-md-0 ml-xl-3">
                <h5 class="text-white font-weight-bold">Nombre des vaches malade </h5>
                <p class="mt-2 text-white card-text"> vaches</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    <div class="col-md-4 grid-margin stretch-card">
        <div class="card bg-success d-flex align-items-center">
        <div class="card-body py-5">
            <div
            class="d-flex flex-row align-items-center flex-wrap justify-content-md-center justify-content-xl-start py-1">
            <i class="mdi mdi-bullseye text-white icon-lg"></i>
            <div class="ml-3 ml-md-0 ml-xl-3">
                <h6 class="text-white font-weight-bold">Les vaches en lactation suspendu</h6>
                <p class="mt-2 text-white card-text">{{$lact_suspendu}}</p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <!-- row end -->

@endsection
