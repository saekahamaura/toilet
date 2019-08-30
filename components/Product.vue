<template>
  <div class="st-product blue">
    <ul>
      <li class="st-first">
        <section>
          <div class="st-left">
            <h1>
              <img src="~static/images/ic_toto.png" alt="TOTO">
              ピュアレストQR
            </h1>
            <dl>
              <dt>処分費・工事費込</dt>
              <dd><strong class="text-pink">67,800</strong>円(税込)～</dd>
            </dl>
          </div>
          <figure class="st-right">
            <img src="~static/images/ref_toto.jpg" alt="TOTOピュアレストQR">
          </figure>
        </section>
      </li>
      <li class="st-child">
        <section>
          <div class="st-child__left">
            <h1>ウォシュレット<br>セット</h1>
            <p class="st-top">
              <em class="yellow">ピュアレストQR</em>
              <span>TCF2222E</span>
            </p>
            <div class="st-price">
              <p><strong class="text-pink">88,000</strong>円<span>(税込)</span></p>
            </div>
          </div>
          <figure>
            <img src="~static/images/ref_pure01.png" alt="ウォシュレット">
          </figure>
        </section>
      </li>
      <li class="st-child">
        <section>
          <div class="st-child__left">
            <h1>リモコン<br>ウォシュレット<br><span>(フタが自動開閉)</span></h1>
            <p class="st-top">
              <em class="yellow">ピュアレストQR</em>
              <span>TCF8GM43</span>
            </p>
            <div class="st-price">
              <p>
                <strong class="text-pink">132,000</strong>円<span>(税込)</span>
              </p>
            </div>
          </div>
          <figure>
            <img src="~static/images/ref_pure02.png" alt="リモコンウォシュレット">
          </figure>
        </section>
      </li>
      <li class="st-child">
        <section>
          <div class="st-child__left">
            <h1>アプリコットF1A<br>ウォシュレット<br><span>(液晶壁リモコン)</span></h1>
            <p class="st-top">
              <em class="yellow">ピュアレストQR</em>
              <span>TCF4713AKR</span>
            </p>
            <div class="st-price">
              <p>
                <strong class="text-pink">142,800</strong>円<span>(税込)</span>
              </p>
            </div>
          </div>
          <figure>
            <img src="~static/images/ref_pure03.png" alt="アプリコットF1A液晶壁リモコン">
          </figure>
        </section>
      </li>
    </ul>
    <ul>
      <li class="st-first">
        <section>
          <div class="st-left">
            <h1>
              <img src="~static/images/ic_lixil.png" alt="lixil">
              アメージュZフチレス
            </h1>
            <dl>
              <dt>処分費・工事費込</dt>
              <dd><strong class="text-pink">57,800</strong>円(税込)～</dd>
            </dl>
          </div>
          <figure class="st-right">
            <img src="~static/images/ref_lixil.jpg" alt="lixilアメージュZフチレス">
          </figure>
        </section>
      </li>
      <li class="st-child">
        <section>
          <div class="st-child__left">
            <h1>シャワートイレ<br>セット</h1>
            <p class="st-top">
              <em class="yellow">アメージュZフチレス</em>
              <span>CW-H42</span>
            </p>
            <div class="st-price">
              <p><strong class="text-pink">88,000</strong>円<span>(税込)</span></p>
            </div>
          </div>
          <figure>
            <img src="~static/images/ref_amage01.png" alt="シャワートイレ">
          </figure>
        </section>
      </li>
      <li class="st-child">
        <section>
          <div class="st-child__left">
            <h1>シャワートイレ<br><span>セット(壁リモコン付き)</span></h1>
            <p class="st-top">
              <em class="yellow">アメージュZフチレス</em>
              <span>CW-RT2</span>
            </p>
            <div class="st-price">
              <p>
                <strong class="text-pink">93,800</strong>円<span>(税込)</span>
              </p>
            </div>
          </div>
          <figure>
            <img src="~static/images/ref_amage02.png" alt="シャワートイレ">
          </figure>
        </section>
      </li>
      <li class="st-child">
        <section>
          <div class="st-child__left">
            <h1><em class="text-pink">瞬間出湯</em><br>シャワートイレ<br><span>セット(壁リモコン付き)</span></h1>
            <p class="st-top">
              <em class="yellow">アメージュZフチレス</em>
              <span>CW-RV20A</span>
            </p>
            <div class="st-price">
              <p>
                <strong class="text-pink">104,800</strong>円<span>(税込)</span>
              </p>
            </div>
          </div>
          <figure>
            <img src="~static/images/ref_amage03.png" alt="瞬間出湯シャワートイレ">
          </figure>
        </section>
      </li>
    </ul>
  </div>
</template>
<script lang="ts">
import { Vue, Component } from 'vue-property-decorator'
@Component
class Product extends Vue {
}
export default Product
</script>
<style lang="scss" scoped>
.st-product {
  padding: 100px 0;
}
ul {
  width: 1100px;
  margin: 0 auto 100px;
  color: #1A3455;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  &:last-child {
    margin: 0 auto;
  }
}
li {
  background-color: #fff;
}
.st-child {
  border: 3px solid #FFEF5D;
  width: 32%;
  h1 {
    font-size: 20px;
    line-height: 1.2;
    padding: 0 10px;
    span,
    em {
      font-size: 14px;
    }
  }
  section {
    display: flex;
    justify-content: space-between;
  }
  figure {
    padding: 20px 10px 20px 0;
    img {
      height: 180px;
    }
  }
}
.st-child__left {
  display: flex;
  flex-direction: column;
}
.st-first {
  width: 100%;
  margin-bottom: 40px;
  border-radius: 10px;
  overflow: hidden;
  border: none;
  h1 {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    color: #1A3455;
    font-size: 40px;
    border-bottom: 2px solid #00CED0;
    padding-bottom: 25px;
    img {
      height: 52px;
      margin-bottom: 60px;
    }
  }
  section {
    display: flex;
    justify-content: space-between;
  }
  dl {
    margin-top: 32px;
  }
  dt {
    font-size: 16px;
    font-weight: bold;
  }
  dd {
    font-size: 16px;
    font-weight: bold;
    strong {
      font-size: 62px;
    }
  }
}
.st-price {
  font-size: 14px;
  font-weight: bold;
  line-height: 1.2;
  padding: 0 15px;
  margin-top: auto;
  margin-bottom: 20px;
  p {
    display: inline-block;
  }
  strong {
    font-size: 32px;
  }
  span {
    display: flex;
    justify-content: flex-end;
  }
}
.st-left {
  padding: 30px;
  width: calc(100% - 610px);
}
.st-right {
  width: 610px;
  img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
  }
}
.st-top {
  order: -1;
  display: flex;
  flex-wrap: wrap;
  font-size: 14px;
  em {
    font-weight: bold;
    text-align: center;
    padding: 0 10px;
  }
  span {
    padding: 7px 12px;
  }
}
</style>
