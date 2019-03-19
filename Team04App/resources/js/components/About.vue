<template>
    <div>
        <h1 class="display-4 text-center mb-5">
            About the Team
        </h1>

        <!-- card section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <transition appear enter-active-class="animated fadeInLeft">
                        <gatorlist-team-lead-card/>
                    </transition>
                </div>
                <div class="col-lg-4">
                    <transition appear enter-active-class="animated fadeInUp">
                        <gatorlist-team-frontend-card/>
                    </transition>
                </div>
                <div class="col-lg-4">
                    <transition appear enter-active-class="animated fadeInRight">
                        <gatorlist-team-backend-card/>
                    </transition>
                </div>
            </div>
        </div>
    </div>
</template>


<script>
    import { eventBusAbout } from '../app.js';

    import TeamLeadCard from './about/TeamLeadCard.vue';
    import TeamFrontendCard from './about/TeamFrontendCard.vue';
    import TeamBackendCard from './about/TeamBackendCard.vue';

    export default{
        data: function () {
            return {
                showAboutHomePage: true,
                selectedComponent: '',
            }
        },
        components: {
            'gatorlist-team-lead-card': TeamLeadCard,
            'gatorlist-team-frontend-card': TeamFrontendCard,
            'gatorlist-team-backend-card': TeamBackendCard,
        },
    }
    
</script>


<style>
    /* restrict the size of the buttons that route to individual pages */
    .name-of-person {
        max-width: 300px;
    }

    /* control size and color of cards */
    .card {
        max-width: 600px;
        margin: 0 auto;
        box-shadow: 0px 2px 10px black;
        -moz-box-shadow: 0 2px 10px black;
        -webkit-box-shadow: 0 2px 10px black;

    }
    .card-body {
        background-color: rgba(255, 255, 255, 0.050);
    }

    /* style the image column */
    .carousel-inner {
        max-width: 500px;
        margin: 0 auto;
        padding: 0 5px;
    }
    img {
        box-shadow: 0 1px 5px black;
        -moz-box-shadow: 0 1px 5px black;
        -webkit-box-shadow: 0 1px 5px black;
    }
    .rounded {
        border-radius: 10px !important;
    }

    .scroll {
        max-height: 265px;
        overflow-y: auto;
    }
    .scroll-secondary::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #343a40;
        border-radius: 10px; 
    }
    .scroll-secondary::-webkit-scrollbar {
        width: 12px;
        background-color: #343a40; 
    }
    .scroll-secondary::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
        background-color: #aa66cc; 
    }
    /* get rid of bullet points while using lists */
    ul {
        list-style-type: none;
    }

    /* style the go back button */
    #go-back-button {
        max-width: 200px;
        box-shadow: 0px 2px 5px black;
        -moz-box-shadow: 0 2px 5px black;
        -webkit-box-shadow: 0 2px 5px black;
    }
</style>