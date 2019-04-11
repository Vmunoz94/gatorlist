<template>
    <div class = "container">
        <div v-if='!this.loading'>
            hello
        </div>
        <div v-else>
            <fingerprint-spinner class="d-flex justify-content-center w-100 mt-5"
                :size="300"
                color="#8d3dc6"
            />
        </div>
    </div>
</template>

<script>
    import { FingerprintSpinner } from 'epic-spinners'

    export default {
        data(){
            return {
                listing: null,
                loading: true,   
            }
        },
        beforeCreate(){
            // extract from DB before component is created
            const endpoint = '/api/listings?id=' + this.$route.params.id;
            axios.get(endpoint)
                .then(res => {
                    this.listing = res.data;
                    this.loading = false;
                })
                .catch(() => {
                    console.log('Error retrieving from ', endpoint);
                });

        },
        components: {
            FingerprintSpinner,
        },
    }
</script>

