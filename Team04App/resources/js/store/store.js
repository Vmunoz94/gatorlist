import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const store = new Vuex.Store({
    state: {
        search: '',
    },
    // getters
    getters: {
        getSearch: (state) => {
            return state.search;
        }
    },
    // setters MUST BE Synchronous
    mutations: {
        mutateSearch: (state, payload) => {
            state.search = payload;
        }
    },
    // call setters CAN BE Asynchronous
    actions: {
        mutateSearch: ({ commit }, payload) => {
            commit('mutateSearch', payload);
        }
    },
})