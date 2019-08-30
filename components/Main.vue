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

.st-price {
  background-color: #fff;
  padding: 12px 12px 0;
  em {
    font-size: 48px;
    font-weight: bold;
  }
  p {
    font-size: 18px;
    color: #1D3557;
    font-weight: bold;
  }
}
.st-figure {
  position: relative;
}
.st-high {
  position: absolute;
  top: -180px;
  right: -40px;
  img {
    height: 400px;
  }
}
ul {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  section {
    position: relative;
  }
  h1 {
    display: flex;
    flex-direction: column;
    font-size: 24px;
    font-weight: bold;
    line-height: 1;
    background-color: #fff;
    width: 260px;
    padding: 0 10px 10px;
    color: #1D3557;
  }
  img {
    height: 40px;
  }
  a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 55px;
    font-size: 18px;
    color: #fff;
    background-color: #F2526E;
    &::after {
      content : '';
      width: 0;
      height: 0;
      border-style: solid;
      border-width: 7.5px 0 7.5px 13.0px;
      border-color: transparent transparent transparent #fff;
    }
  }
}
figure {
  padding: 10px;
  img {
    height: 220px;
  }
}
li {
  width: 48%;
}
.st-level {
  border: 5px solid #fff;
}
.st-icon {
  position: absolute;
  background-color: #F2526E;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  width: 70px;
  height: 70px;
  top: -35px;
  left: -35px;
  border-radius: 50%;
  font-size: 6px;
  color: #fff;
  em {
    font-size: 22px;
    font-weight: bold;
    line-height: 0.8;
  }
}
</style>
