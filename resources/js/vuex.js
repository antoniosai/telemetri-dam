import Axios from "axios";

export default {
    strict: true,
    state: {
        info: []
    },
    mutations: {
        setInfo(state, info){
            state.info = info
        }
    },
    actions: {
        getInfo ({ commit }) {
            return new Promise((resolve, reject) => {

                axios.get('/get_info')
                .then(function(res){
                    var data = res.data.data
                    // console.log(res.data.data)

                    commit('setInfo', data )

                    resolve(data);
                });

            })
        }
    },
    getters: {
        info: state => state.info
    }
};