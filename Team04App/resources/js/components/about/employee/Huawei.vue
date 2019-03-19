<template>
    <transition appear enter-active-class="animated fadeInRight">
        <div>
            <h1 class="display-4 text-center mb-5">Huawei Gao</h1>

            <div class="container">
                <div class="row">
                    <div class="col-lg-4 mb-5 ">
                        <div class="carousel slide ">
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <img class="w-100 m-0 border border-dark rounded" src='/images/huaweiAvatar.jpg'>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="card text-white bg-dark mb-5 w-100">
                            <h5 class="card-header">Frontend</h5>
                            <div class="card-body scroll scroll-secondary">
                                    <div class="lead">
                                        I'm Huawei, and this is my final semester at SFSU. Some of the elective courses I have
                                        taken here at SFSU are:
                                    </div>
                                    <ul class="ml-5 border-left">
                                        <li>Computer Organization</li>
                                        <li>Introduction to Databases</li>
                                        <li>Interactive Multimedia Application</li>
                                    </ul>
                                    <div class="lead">
                                        This semester I am currently enrolled in three clases, which are:
                                    </div>
                                    <ul class="ml-5 border-left">
                                        <li>International Business 330</li>
                                        <li>CSC648</li>
                                        <li>CSC675 Intelligence</li>
                                    </ul>
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