<template>
  <section class="st-wrapper">
    <div class="st-inner">
      <h1>
        <span>まだ間に合う！</span>
        <em>増税前、最後のチャンス！</em>
        <strong><span class="text-orange">駆け込み工事</span>キャンペーン実施中！</strong>
      </h1>
      <p>
        月末までのお申し込みで、おトクにリフォームしませんか？<br>
        トイレも工事も保証付きで驚きの激安価格設定！
      </p>
    </div>
  </section>
</template>
<script lang="ts">
import { Vue, Component } from 'vue-property-decorator'
@Component
class Main extends Vue {
}
export default Main
</script>
<style lang="scss" scoped>
.st-wrapper {
  background-image: url(~static/images/bg_main.png);
  background-position: center;
  background-size: cover;
}
.st-inner {
  padding: 60px 0 50px;
  width: 1100px;
  margin: 0 auto;
}
h1 {
  display: flex;
  flex-direction: column;
  margin-bottom: 30px;
  line-height: 1.3;
}
span {
  font-size: 32px;
  font-weight: normal;
}
em {
  font-size: 40px;
}
strong {
  font-size: 60px;
  span {
    font-size: 60px;
    font-weight: bold;
  }
}
p {
  font-size: 20px;
}
@media screen and (max-width:980px) {
  .st-inner {
    padding: 40px 0 20px;
    width: 90%;
  }
  strong span {
    display: block;
  }
}
@media screen and (max-width:680px) {
  h1 {
    margin-bottom: 30px;
    line-height: 1.3;
  }
  span {
    font-size: 16px;
    font-weight: normal;
  }
  em {
    font-size: 20px;
  }
  strong {
    font-size: 32px;
    span {
      font-size: 32px;
      font-weight: bold;
    }
  }
  p {
    font-size: 10px;
  }
}
</style>
