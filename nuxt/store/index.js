import Vuex from 'vuex'

const createStore = () => {
  return new Vuex.Store({
    state: {
      title: 'index.php'
    },
    mutations: {
      titleis (state, title) {
        state.title = title
      }
    }
  })
}

export default createStore
