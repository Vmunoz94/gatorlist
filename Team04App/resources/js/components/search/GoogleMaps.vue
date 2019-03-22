<template>
    <div id="Map" class="position-sticky my-2">
        Add API Key to show Google Maps
    </div>
</template>

<script>
    export default {
        mounted: function() {
            this.map = new google.maps.Map(document.getElementById('Map'), {
                center: {lat:37.7749, lng: -122.4194},
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
        background-color: rgb(170, 178, 187);
    }
</style>