<template>
  <select class="form-control btn btn-dark" name="sort" v-model='sort'>
      <option disabled value="">Sort</option>
      <option v-for='(sort, index) in sortList' :key='index'> {{ sort }} </option>
  </select>
</template>

<script>
  import { mapGetters } from 'vuex';

  export default {
    data() {
      return {
        sortList: ['Most Recent', 'Distance to Campus', 'Commute Time'],
        sort: '',
      }
    },
    beforeUpdate() {
      
    },
    computed: {
      ...mapGetters(['getAllListings']),
    },
    watch:{
      sort(){
        switch(this.sort){
          case 'Most Recent':
            console.log('Most Recent!');
            this.getAllListings.sort((a, b) => b.date.localeCompare(a.date));
            console.log(this.getAllListings);
            break;
          case 'Distance to Campus':
            console.log('Distance');
            this.getAllListings.sort((a, b) => a.distance_from_campus - b.distance_from_campus);
            console.log(this.getAllListings);
            break;
          case 'Commute Time':
            console.log('Commute');
            this.getAllListings.sort((a, b) => a.commute_time_to_campus - b.commute_time_to_campus);
            console.log(this.getAllListings);
            break;
        }
      }
    }

  }
</script>
