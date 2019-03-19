<template>
    <transition appear enter-active-class="animated fadeInRight">
        <div>
            <h1 class="display-4 text-center mb-5">Gabriel Alfaro</h1>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 ">
                        <div class="carousel slide ">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <img class="w-100 m-0 border border-dark rounded" src='/images/gabrielSelfie.jpg'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card text-white bg-dark mb-5 w-100">
                            <h5 class="card-header">Backend</h5>
                            <div class="card-body scroll scroll-secondary">
                                <div class="lead">
                                    Hello, my name is Gabriel Alfaro and I am a 5th year currently attending
                                    SFSU and I plan to graduate this semester Spring 2019. I hope to learn as
                                    much as possible when it comes to Computer Science.
                                </div>
                            </div>
                            <div class="card-footer"></div>
                        </div>
                    </div>
                    <div class="container mb-5">
                        <router-link to="/about" id="go-back-button" class="btn btn-light btn-lg ml-3 d-flex justify-content-center mx-auto">
                            <i class="fas fa-arrow-left d-flex my-auto pr-3"></i> Go Back
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>