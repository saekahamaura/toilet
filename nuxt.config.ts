import { Configuration } from '@nuxt/types'

const nuxtConfig: Configuration = {
  mode: 'universal',
  /*
  ** Headers of the page
  */
  head: {
    title: '高品質を低価格トイレリフォームなら｜トイレリフォームドットコム',
    meta: [
      { charset: 'utf-8' },
      {  name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { name: 'theme-color', content: '#00CED0' },
      { hid: 'description', name: 'description', content: 'トイレリフォーム専門。独自のルートで高品質のトイレを低価格でご提供。商品と工事に対しての2大保証で工事後も安心。金額は工事費・処分費・税込み！トイレリフォームを検討してる方は一度はご覧ください。' }
    ],
    link: [
      { rel: 'canonical', href: 'https://toire-reform.com/' },
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },
  /*
  ** Customize the progress-bar color
  */
  loading: { color: '#fff' },
  /*
  ** Global CSS
  */
  css: [
  ],
  router: {
    // base: '/cliant_check/toilet/',
  },
  typescript: {
    typeCheck: true,
    ignoreNotFoundWarnings: true
  },
  /*
  ** Plugins to load before mounting the App
  */
  plugins: [
    '~plugins/vue-scrollto.js'
  ],
  manifest: {
    name: 'トイレリフォームドットコム',
    short_name: 'トイレリフォームドットコム',
    title: '高品質を低価格トイレリフォームなら｜トイレリフォームドットコム',
    description: 'トイレリフォーム専門。独自のルートで高品質のトイレを低価格でご提供。商品と工事に対しての2大保証で工事後も安心。金額は工事費・処分費・税込み！トイレリフォームを検討してる方は一度はご覧ください。',
    lang: 'ja',
    theme_color: '#00CED0',
    background_color: '#ffffff'
  },
  /*
  ** Nuxt.js dev-modules
  */
  buildModules: [
    // Doc: https://github.com/nuxt-community/eslint-module
    '@nuxtjs/eslint-module',
    '@nuxt/typescript-build'
  ],
  /*
  ** Nuxt.js modules
  */
  modules: [
    // Doc: https://axios.nuxtjs.org/usage
    '@nuxtjs/axios',
    '@nuxtjs/pwa'
  ],
  /*
  ** Axios module configuration
  ** See https://axios.nuxtjs.org/options
  */
  axios: {
  },
  /*
  ** Build configuration
  */
  build: {
    /*
    ** You can extend webpack config here
    */
    extend (config, ctx) {
    }
  }
}
module.exports = nuxtConfig
