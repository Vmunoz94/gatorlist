<template>
    <div>
        <div class="login d-flex justify-content-center align-items-center">
            <h1>
                Post Listing
            </h1>
        </div>

        <div class="form-content">
            <div class="row justify-content-center margin-top">
                <div class="col-10">
                    <h4><strong>Enter Address Info</strong></h4>
                    <hr>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-10 col-sm-2 my-4 mt-5">
                    <select class="form-control text-reset mt-2" name="type" v-model='selected' :class='{error: $v.street.$invalid}'>
                        <option disabled value="">Type</option>
                        <option v-for='(type, index) in listingTypes' :key='index' :value='type'> {{ type }} </option>
                    </select>
                </div>
                <div class="col-10 col-sm-8 my-4">
                    <div class="form-group">
                        <label for="street">Street:</label>
                        <input type="text" class="form-control" id="street" placeholder="Street" v-model='street' :class='{error: $v.street.$invalid}'>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-sm-2"></div>
                <div class="col-5 col-sm-4">
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" id="city" placeholder="City" v-model='city' :class='{error: $v.city.$invalid}'>
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
                        <input type="text" class="form-control" id="zip" placeholder="ZIP" v-model='zip' :class='{error: $v.zip.$invalid}'>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-10 col-sm-2">
                    <div class="form-group">
                        <label for="rent">Monthly Rent $:</label>
                        <input type="text" class="form-control" id="rent" placeholder="$" v-model='rent' :class='{error: $v.rent.$invalid}'>
                    </div>
                </div>
                <div class="col-10 col-sm-8">
                    <div class="form-group">
                        <label for="image">Image URL:</label>
                        <input type="text" class="form-control" id="image" placeholder="Image URL" v-model='url' :class='{error: $v.url.$invalid}'>
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
                <button type="submit" class="btn btn-outline-dark btn-lg btn-block" :disabled='$v.$invalid'>Validate</button>
            </div>
        </div>
    </div>
</template>

<script>
    import { required, numeric, minLength, maxLength, url } from 'vuelidate/lib/validators';
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
    }
</script>


<style scoped>
    .margin-top{
        margin-top: 150px;
    }

    .login{
        max-width: 400px;
        width: 70%;
        height: 150px;
        border: 1px solid black;
        border-radius: 5px;
        margin: auto;
        color: white;
        /* background-image: linear-gradient(to left top, #a8eb12, #e29f14, #ce6250, #864761, #3b3440); */
        background-color: #343a40;
        box-shadow: 0 2px 10px black;
        -moz-box-shadow: 0 2px 10px black;
        -webkit-box-shadow: 0 2px 10px black;
        z-index: 2;
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
    }
    
    .form-content{
        max-width: 1000px;
        width: 90%;
        height: cover;
        border-radius: 5px;
        margin: 50px auto;
        border: 1px solid grey;
        z-index: 1;
        position: absolute;
        left: 50%;
        -webkit-transform: translateX(-50%);
        transform: translateX(-50%);
        background-color: white;
        box-shadow: 0 1px 10px grey;
        -moz-box-shadow: 0 1px 10px grey;
        -webkit-box-shadow: 0 1px 10px grey;
    }
    .btn-outline-dark{
        border: none;
    }
    input{
        border: none;
        border-bottom: 1px solid black;
        border-radius: 0;
    }
    .form-control:focus {
        /* border-color: purple; */
        box-shadow: none;
    }
    input:disabled{
        background: none;
    }
    .error{
        /* border-color: red; */
        color: red;
    }
</style>
