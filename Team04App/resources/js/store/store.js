import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        search: '',
        addListing: {
            type: '',
            street: '',
            city: '',
            state: '',
            zip: '',
            rent: '',
            image: '',
            description: '',
        }
    },
    // getters
    getters: {
        getSearch: (state) => {
            return state.search;
        },
        getAddListing: (state) => {
            return state.addListing
        }
    },
    // setters MUST BE Synchronous
    mutations: {
        mutateSearch: (state, payload) => {
            state.search = payload;
        },
        mutateAddListing: (state, payload) => {
            state.addListing.type = payload.type;
            state.addListing.street = payload.street;
            state.addListing.city = payload.city;
            state.addListing.state = payload.state;
            state.addListing.zip = payload.zip;
            state.addListing.rent = payload.rent;
            state.addListing.image = payload.image;
            state.addListing.description = payload.description;
        },
    },
    // call setters CAN BE Asynchronous
    actions: {
        mutateSearch: ({ commit }, payload) => {
            commit('mutateSearch', payload);
        },
        mutateAddListing: ({ commit }, payload) => {
            commit('mutateAddListing', payload);
        },
    },
})