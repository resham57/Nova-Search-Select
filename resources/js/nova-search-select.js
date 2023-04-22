import ResourceIndex from './views/Index'

Nova.booting((app, store) => {
  app.component('ResourceIndex', ResourceIndex)
})
