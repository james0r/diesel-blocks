window.addEventListener('DOMContentLoaded', () => {
  if (window.Alpine == undefined) {
    const alpineCollapse = document.createElement('script')
    const alpineJs = document.createElement('script')

    alpineCollapse.src = 'https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js'
    alpineCollapse.defer = 'defer'
    document.body.appendChild(alpineCollapse);

    alpineJs.src = 'https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js'
    alpineJs.defer = 'defer'
    document.body.appendChild(alpineJs);
  }
})
