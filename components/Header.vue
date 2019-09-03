<template>
  <header class="blue">
    <div class="st-inner">
      <h1>
        <span>自社施工と、独自の仕入れルートで安心価格、誠実対応！</span>
        トイレリフォームドットコム
      </h1>
      <a
        v-scroll-to="'#form'"
        href="#form"
        class="st-button pink"
      >
        <i><img src="~/static/images/ic_mail.svg" alt="お問い合わせ"></i>
        <span>お問い合わせ</span>
      </a>
    </div>
  </header>
</template>
<script lang="ts">
import { Vue, Component } from 'vue-property-decorator'
@Component
class Header extends Vue {
}
export default Header
</script>
<style lang="scss" scoped>
header {
  padding: 14px 0;
  position: sticky;
  top: 0;
  z-index: 2;
}
h1 {
  font-size: 28px;
  display: flex;
  flex-direction: column;
  span {
    font-size: 14px;
    font-weight: normal;
  }
}
i {
  display: none;
}
.st-inner {
  width: 1100px;
  margin: 0 auto;
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.st-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 200px;
  height: 48px;
  font-size: 20px;
  color: #fff;
  background-color: #F2526E;
  border-radius: 10px;
  border: 1px solid #fff;
}
@media screen and (max-width:980px) {
  .st-inner {
    width: 90%;
  }
}
@media screen and (max-width:680px) {
  header {
    padding: 12px 0;
  }
  h1 {
    font-size: 20px;
    span {
      font-size: 10px;
    }
  }
  i {
    display: block;
  }
  a span {
    display: none;
  }
  .st-button {
    width: 40px;
    height: 40px;
  }
}
</style>
