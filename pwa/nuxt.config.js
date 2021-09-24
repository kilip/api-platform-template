export default {
  ssr: false,
  env: {
    entrypoint: process.env.API_ENTRYPOINT || 'https://localhost/api',
  },
  server: {
    host: "0.0.0.0"
  },
  target: 'static',
  head: {
    title: 'api-template',
    htmlAttrs: {
      lang: 'en'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [
  ],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    // https://go.nuxtjs.dev/typescript
    '@nuxt/typescript-build',
    // https://go.nuxtjs.dev/tailwindcss
    '@nuxtjs/tailwindcss',
  ],

  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [
    '@nuxtjs/axios',
    '@nuxtjs/auth-next'
  ],

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  },
  router: {
    middleware: ['auth']
  },
  axios: {
    credentials: true
  },
  auth: {
    strategies: {
      local: {
        cookie: {
          name: null,
        },
        user: {
          autoFetch: true
        },
        endpoints: {
          login: {
            url: 'https://localhost/login-json',
            method: 'post',
            withCredentials: true
          },
          logout: {
            url: 'https://localhost/logout',
            method: 'post',
            withCredentials: true
          },
          user: {
            url: 'https://localhost/api/users/profile',
            method: 'get',
            withCredentials: true,
            propertyName: false
          }
        },
        scheme: '~/utils/auth/jwt.js',
        token: {
          required: false,
          type: false
        }
      }
    },
  }
}
