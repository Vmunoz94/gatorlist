<template>
    <div id="Map" class="position-sticky my-2">
        Map Component Goes Here
    </div>
</template>

<script>
    export default {
        mounted: function() {
            console.log("map: ", google.maps)
            this.map = new google.maps.Map(document.getElementById('Map'), {
                center: {lat:37.7749, lng: -122.4194},
                scrollwheel: false,
                zoom: 12
            })
        }

    }
</script>

<style scoped>
    #Map {
        position: fixed;
        top: 14px;
        width: 100%;
        height: 96vh;
        border: 1px solid black;
        box-shadow: 0 1px 10px black;
        -moz-box-shadow: 0 1px 10px black;
        -webkit-box-shadow: 0 1px 10px black;
        background-color: slategray;
    }
</style>