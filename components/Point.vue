<template>
  <section class="st-wrapper">
    <h1 class="st-title">
      <span>トイレリフォームドットコムの</span>
      安心の<em class="text-pink">２大保証</em>
    </h1>
    <p class="st-sales orange">
      工事後の不具合商品の不具合<br>対応保証します
    </p>
    <ul class="st-point">
      <li>
        <section>
          <h1>
            <span class="text-orange">ご購入頂いたトイレを</span><strong>完全保証！</strong>
          </h1>
          <i>
            <img src="~static/images/ic_toilet.svg" alt="メーカー保証">
          </i>
        </section>
      </li>
      <li>
        <section>
          <h1>
            <span class="text-orange">設置工事、その他施工も</span><strong>完全保証！</strong>
          </h1>
          <i>
            <img src="~static/images/ic_tool.svg" alt="5年保証">
          </i>
        </section>
      </li>
    </ul>
    <p class="st-text">
      トイレ専門店として経験豊富なスタッフが在籍！<br>作業はほとんどの場合2時間以内です。また内装工事も承っております。<br>土日の工事にも対応しており、最短即日対応可能です！
    </p>
  </section>
</template>
<script lang="ts">
import { Vue, Component } from 'vue-property-decorator'
@Component
class Point extends Vue {
}
export default Point
</script>
<style lang="scss" scoped>
.st-wrapper {
  padding: 100px 0;
  margin: 0 auto;
  display: flex;
  flex-direction: column;
  align-items: center;
}
.st-title {
  font-size: 32px;
  margin-bottom: 80px;
  span {
    display: block;
    font-size: 20px;
    margin-bottom: 20px;
  }
  em {
    font-size: 42px;
  }
}
ul {
  display: flex;
  justify-content: space-between;
  align-items: flex-end;
  width: 720px;
  section {
    display: flex;
    flex-direction: column-reverse;
  }
  h1 {
    font-size: 32px;
    display: flex;
    flex-direction: column;
    text-align: center;
  }
  i {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    margin-bottom: 20px;
  }
}
.st-sales {
  font-size: 20px;
  position: relative;
  width: 720px;
  margin: 0 auto 100px;
  border-radius: 50px;
  text-align: center;
  padding: 20px 0;
  font-weight: bold;
  &::after {
    content: '';
    width: 0;
    height: 0;
    border-style: solid;
    border-width: 16px 13px 0 13px;
    border-color: #FF8B60 transparent transparent transparent;
    position: absolute;
    left: 0;
    right: 0;
    bottom: -16px;
    margin: 0 auto;
  }
  br {
    display: none;
  }
}
.st-text {
  text-align: center;
  margin-top: 40px;
  font-size: 20px;
}
@media screen and (max-width:680px) {
  .st-wrapper {
    padding: 10.6666vw 0;
  }
  .st-title {
    font-size: 4.8vw;
    margin-bottom: 8vw;
    span {
      font-size: 3.8vw;
      margin-bottom: 0;
    }
    em {
      font-size: 8.8vw;
    }
  }
  ul {
    justify-content: center;
    flex-wrap: wrap;
    width: 100%;
    h1 {
      font-size: 5.86666vw;
    }
  }
  .st-sales {
    font-size: 3.8vw;
    width: 90%;
    margin: 0 auto 16vw;
    padding: 5.3333vw 0;
    br {
      display: block;
    }
  }
  .st-text {
    text-align: justify;
    font-size: 4.2666vw;
    width: 90%;
    margin: 10.6666vw auto 0;
  }
}
</style>
