<template>
    <div class="container mb-5">
            <form>
                <div class="form-row justify-content-center">
                    <div class="col-2">
                        <select class="form-control" v-model='selected'>
                            <option disabled value="">Listing Type</option>
                            <option v-for='type in listingTypes'> {{ type }} </option>
                        </select>
                    </div>
                    <div class="col-10">
                        <input type="text" class="form-control" v-model='search' placeholder="Neighborhood, Address, City, Zip, School">
                    </div>
                </div>
                <div>{{ selected }}</div>
                <div>{{ search }}</div>
            </form>
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
        },
    }
</script>
