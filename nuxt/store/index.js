import Vuex from 'vuex'

const createStore = () => {
  return new Vuex.Store({
    state: {
      title: 'index.php'
    },
    // mutations: {
    //   increment (state) {
    //     state.title++
    //   }
    // }
  })
}

export default createStore
