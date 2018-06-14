import Vue from 'vue'
import upperFirst from 'lodash/upperFirst'
import camelCase from 'lodash/camelCase'

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

  // Strip the leading `./` and extension from the filename
  fileName = fileName.replace(/^\.\/(.*)\.\w+$/, '$1')

  console.log(fileName)

  // Get extension (e.g. .php)
  const match = fileName.match(/(.*)(\.\w+$)/)
  const extension = match ? match[2] : ''
  fileName = match ? match[1] : fileName

  // Get PascalCase name of component
  const componentName = upperFirst(
    camelCase(
      // Filename without extension
      fileName
    )
  // Add the extension
  ) + extension

  // console.log(componentName)

  // Register component globally
  // Vue.component(
  //   componentName,
  //   // Look for the component options on `.default`, which will
  //   // exist if the component was exported with `export default`,
  //   // otherwise fall back to module's root.
  //   componentConfig.default || componentConfig
  // )
})
