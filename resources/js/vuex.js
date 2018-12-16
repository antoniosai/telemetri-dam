export default {
    state: {
        info: [],
        user: [],
    },
    mutations: {
        setInfo(state, info){
            state.info = info
        },

        setUser(state, user){
            state.user = user
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
        },
        getAuthenticatedUser({commit}) {
            return new Promise((resolve, reject) => {

                axios.get('/auth/user')
                .then(function(res){
                    var data = res.data.data

                    commit('setUser', data )

                    resolve(data);
                });

            })
        }
    },
    getters: {
        info: state => state.info,
        user: state => state.user
    }
};