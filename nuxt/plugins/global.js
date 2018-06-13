import Vue from 'vue'
import upperFirst from 'lodash/upperFirst'
import camelCase from 'lodash/camelCase'
// import WpBlogHeaderPhp from '@/pages/wp-blog-header.php.vue'
// import WpLoadPhp from '@/pages/wp-load.php.vue'

// Vue.component('wp-blog-header.php', WpBlogHeaderPhp)
// Vue.component('wp-load.php', WpLoadPhp)

const requireComponent = require.context(
  // The relative path of the components folder
  '@/pages',
  // Whether or not to look in subfolders
  true,
  // The regular expression used to match base component filenames
  /[a-z]\w+\.(vue|js)$/
)

requireComponent.keys().forEach(fileName => {
  // Get component config
  const componentConfig = requireComponent(fileName)

  // Get PascalCase name of component
  const componentName = upperFirst(
    camelCase(
      // Strip the leading `./` and extension from the filename
      fileName.replace(/^\.\/(.*)\.\w+$/, '$1')
    )
  )

  // Register component globally
  Vue.component(
    componentName,
    // Look for the component options on `.default`, which will
    // exist if the component was exported with `export default`,
    // otherwise fall back to module's root.
    componentConfig.default || componentConfig
  )
})
