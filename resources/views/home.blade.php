@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center">Carroseul</div>
                <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" style="max-height:200px; max-width:300px;" src="./download.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="max-height:200px; max-width:300px;" src="./download 2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" style="max-height:200px; max-width:300px;" src="./download 3.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-3 justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">Main Container</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="card p-3 mb-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate eos placeat accusamus quasi blanditiis, nam assumenda labore, quo ducimus enim molestiae repudiandae. Nostrum beatae aliquam rem placeat, temporibus veritatis!</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-3 mb-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate eos placeat accusamus quasi blanditiis, nam assumenda labore, quo ducimus enim molestiae repudiandae. Nostrum beatae aliquam rem placeat, temporibus veritatis!</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-3 mb-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate eos placeat accusamus quasi blanditiis, nam assumenda labore, quo ducimus enim molestiae repudiandae. Nostrum beatae aliquam rem placeat, temporibus veritatis!</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="card p-3 mb-3">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem voluptate eos placeat accusamus quasi blanditiis, nam assumenda labore, quo ducimus enim molestiae repudiandae. Nostrum beatae aliquam rem placeat, temporibus veritatis!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection