@extends('layouts.app')
@section('content')
{{-- how it works hero banner --}}
    <section class="py-60 hero_banner">
        <div class="container">
            <div class="row">
                <div class="text-center mb-5">
                    <h1 class="heading">How Class of MBA Works!</h1>
                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut
                        labore et dolore</p>
                </div>
            </div>
        </div>
    </section>
    {{-- feature cards --}}
    @include('featurecard')
    {{-- how it works step by step --}}

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">

                </div>
            </div>
        </div>
    </section>


@endsection
