import Vue from 'vue'
import axios from 'axios'

// const requireComponent = require.context(
//   // The relative path of the components folder
//   '~/pages',
//   // Whether or not to look in subfolders
//   true,
//   // The regular expression used to match base component filenames
//   /[a-z]\w+\.(vue|js)$/
// )

function requireAll(requireComponent) {

  requireComponent.keys().forEach(fileName => {
    // Get component config
    const componentConfig = requireComponent(fileName)

    // Strip the leading `./` and extension from the filename
    const componentName = fileName.replace(/^\.\/(.*)\.\w+$/, '$1')

    // Register component globally
    Vue.component(
      componentName,
      // Look for the component options on `.default`, which will
      // exist if the component was exported with `export default`,
      // otherwise fall back to module's root.
      componentConfig.default || componentConfig
    )
  })
}

requireAll(require.context('~/pages', true, /[a-z]\w+\.(vue|js)$/))
requireAll(require.context('~/components', true, /[a-z]\w+\.(vue|js)$/))
