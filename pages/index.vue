<template>
  <div>
    <my-header />
    <main>
      <my-main />
      <my-product />
      <my-point />
    </main>
    <my-form />
    <my-footer />
  </div>
</template>
<script lang="ts">
import { Component, Vue } from 'vue-property-decorator'
@Component({
  components: {
    MyHeader: () => import('~/components/Header.vue'),
    MyMain: () => import('~/components/Main.vue'),
    MyProduct: () => import('~/components/Product.vue'),
    MyPoint: () => import('~/components/Point.vue'),
    MyForm: () => import('~/components/Form.vue'),
    MyFooter: () => import('~/components/Footer.vue')
  }
})
export default class Page extends Vue {
}
</script>
<style>
</style>
