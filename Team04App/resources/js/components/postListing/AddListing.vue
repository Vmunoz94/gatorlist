<template>
    <div>
        <div class="row justify-content-center margin-top">
            <div class="col-10 text-center">
                <h4><strong>Enter Address Info</strong></h4>
                <hr>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-10 col-sm-2 my-4 mt-5">
                <select class="form-control text-reset mt-2" name="type" v-model='selected'>
                    <option disabled value="">Type</option>
                    <option v-for='(type, index) in listingTypes' :key='index' :value='type'> {{ type }} </option>
                </select>
            </div>
            <div class="col-10 col-sm-8 my-4">
                <div class="form-group">
                    <label for="street">Street:</label>
                    <input type="text" class="form-control" id="street" placeholder="Street" v-model='street'>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-2"></div>
            <div class="col-5 col-sm-4">
                <div class="form-group">
                    <label for="city">City:</label>
                    <input type="text" class="form-control" id="city" placeholder="City" v-model='city'>
                </div>
            </div>
            <div class="col-2 col-sm-2">
                <div class="form-group">
                    <label for="state">State:</label>
                    <input type="text" class="form-control" id="state" placeholder="CA" disabled>
                </div>
            </div>
            <div class="col-3 col-sm-2">
                <div class="form-group">
                    <label for="zip">ZIP:</label>
                    <input type="text" class="form-control" id="zip" placeholder="ZIP" v-model='zip'>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-10 col-sm-2">
                <div class="form-group">
                    <label for="rent">Rent $:</label>
                    <input type="text" class="form-control" id="rent" placeholder="$" v-model='rent'>
                </div>
            </div>
            <div class="col-10 col-sm-8">
                <div class="form-group">
                    <label for="image">Image URL:</label>
                    <input type="text" class="form-control" id="image" placeholder="Image URL" v-model='url'>
                </div>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-10">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" placeholder="Description" rows="4" v-model='description' :class='{error: $v.description.$invalid}'></textarea>
            </div>
        </div>

        <div class="d-flex justify-content-center margin-top">
            <button type="submit" class="btn btn-outline-success btn-lg btn-block" :disabled='$v.$invalid' @click='validateListing'>Validate</button>
        </div>
    </div>
</template>

<script>
    import { required, numeric, minLength, maxLength, url } from 'vuelidate/lib/validators';
    import ConfirmListing from './ConfirmListing.vue';

    export default {
        data: function (){
            return {
                listingTypes: ['Room', 'Apartment', 'House'],
                selected: '',
                street: '',
                city: '',
                zip: '',
                rent: '',
                url: '',
                description: '',
                showConfirm: false,
            }
        },
        validations: {
            selected: {
                required
            },
            street: {
                required
            },
            city: {
                required
            },
            zip: {
                required,
                numeric,
                minLen: minLength(5),
                maxLen: maxLength(5),
            },
            rent: {
                required,
                numeric
            },
            url: {
                required,
                url
            },
            description: {
                required
            }

        },
        components: {
            'gatorlist-confirm': ConfirmListing,
        },
        methods: {
            validateListing() {
                const addListing = {};
                addListing.type = this.selected;
                addListing.street = this.street;
                addListing.city = this.city;
                addListing.state = 'CA';
                addListing.zip = this.zip;
                addListing.rent = this.rent;
                addListing.image = this.url;
                addListing.description = this.description;
                this.$store.dispatch('mutateAddListing', addListing);
                this.$router.push('/postListing/confirm');
            }
        }
    }
</script>

<style scoped>
    .margin-top{
        margin-top: 150px;
    }
    .btn-outline-success{
        border: none;
    }
</style>
