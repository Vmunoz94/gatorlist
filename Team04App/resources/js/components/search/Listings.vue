<template>
    <div>
        <transition appear enter-active-class="animated fadeIn">
            <div class="card-deck">
                    <div class="card mb-4" v-for='listing in listingList'>
                        <img class="card-img-top" :src="listing.image" alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Rent: ${{ listing.rent }}</h5>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <p class="card-text"><i class="fas fa-bed"></i> Beds: {{ listing.beds }}</p>
                            </div>
                            <div class="col">
                                <p class="card-text"><i class="fas fa-bath"></i> Baths: {{ listing.baths }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="card-text text-muted">{{ listing.street }},</div>
                        <div class="card-text text-muted">{{ listing.city }}, CA {{ listing.zip }}</div>
                        </div>
                    </div>
            </div>
        </transition>

        <div>
            
        </div>
    </div>

</template>

<script>
    export default {
        data: function (){
            return {
                listingList : [{
                    type: 'Apartment',
                    rent: 2000,
                    street: '1800 Holloway Ave',
                    city: 'San Francisco',
                    zip: 94132,
                    beds: 2,
                    baths: 1,
                    image: 'https://images.unsplash.com/photo-1460317442991-0ec209397118?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80',
                },{
                    type: 'Apartment',
                    rent: 1000,
                    street: '1805 Holloway Ave',
                    city: 'San Francisco',
                    zip: 94132,
                    beds: 1,
                    baths: 1,
                    image: 'https://images.unsplash.com/photo-1546724953-5d4afbc65730?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80',
                },{
                    type: 'House',
                    rent: 5000,
                    street: '1600 Holloway Ave',
                    city: 'Daly City',
                    zip: 94108,
                    beds: 3,
                    baths: 2,
                    image: 'https://images.unsplash.com/photo-1504202302068-15fc2055f7f9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1630&q=80'
                },{
                    type: 'Room',
                    rent: 500,
                    street: '1300 Holloway Ave',
                    city: 'Daly City',
                    zip: 94108,
                    beds: 1,
                    baths: 1,
                    image: 'https://images.unsplash.com/photo-1512918580421-b2feee3b85a6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80'
                }],
            }
        },
    }
</script>

<style scoped lang='scss'>
    .card:hover{
        transform: scale(1.05); 
        transition: all .2s ease-in-out;
    }

    /* Bootstrap 4 breakpoints & gutter */
    $grid-breakpoints: (
        xs: 0,
        sm: 576px,
        md: 768px,
        lg: 992px,
        xl: 1200px
    ) !default;

    $grid-gutter-width: 30px !default;

    /* number of cards per line for each breakpoint */
    $cards-per-line: (
        xs: 1,
        sm: 1,
        md: 1,
        lg: 2,
        xl: 3,
    );

    @each $name, $breakpoint in $grid-breakpoints {
        @media (min-width: $breakpoint) {
            .card-deck .card {
                flex: 0 0 calc(#{100/map-get($cards-per-line, $name)}% - #{$grid-gutter-width});
            }
        }
    }
</style>