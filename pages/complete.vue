<template>
  <div>
    <app-header />
    <main>
      <section class="st-complete">
        <h1>お問い合わせ完了</h1>
        <p>お問い合わせを受付ました。<br>内容を確認して弊社担当からご連絡差し上げますので<br>今しばらくお待ちください。</p>
        <a
          href="./"
          class="st-button pink"
        >
          トップへ戻る
        </a>
      </section>
    </main>
    <app-footer />
  </div>
</template>
<script lang="ts">
import { Vue, Component } from 'vue-property-decorator'
@Component({
  components: {
    AppHeader: () => import('~/components/Header.vue'),
    AppFooter: () => import('~/components/Footer.vue')
  },
  head () {
    return {
      title: 'お問い合わせ完了｜トイレリフォームドットコム',
      meta: [
        { name: 'robots', content: 'noindex, nofollow' },
        { hid: 'description', name: 'description', content: 'トイレリフォームドットコムへのお問い合わせ完了しました。' }
      ],
      link: [
        { rel: 'canonical', href: 'https://toire-reform.com/complete' },
        { rel: 'prev', href: 'https://toire-reform.com/' }
      ]
    }
  }
})
class Complete extends Vue {
}
export default Complete
</script>
<style lang="scss" scoped>
.st-complete {
  padding: 120px 0;
  width: 780px;
  margin: 0 auto;
  text-align: center;
}
h1 {
  margin-bottom: 60px;
}
p {
  margin-bottom: 40px;
}
.st-button {
  width: 160px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 5px;
  margin: 0 auto;
}
</style>
