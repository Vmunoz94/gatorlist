<template>
    <div>
        <h1 class="display-4 text-center mb-5">
            Search for Housing
        </h1>
        <div class="container pt-5 mt-5">
            <form>
                <div class="form-row justify-content-center">
                    <div class="col-2">
                        <select class="form-control" v-model='selected'>
                            <option disabled value="">Please select one</option>
                            <option v-for='type in listingTypes'> {{ type }} </option>
                        </select>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" v-model='search' placeholder="Search">
                    </div>
                </div>
                <div>{{ selected }}</div>
                <div>{{ search }}</div>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data: function (){
            return {
                listingTypes: ['Room', 'Apartment', 'House'],
                selected: '',
                search: '',
            }
        }
    }
</script>


<style>
    .form-row{
        width: 80%;
        margin: auto;
    }
</style>