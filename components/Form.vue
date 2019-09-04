<template>
  <section id="form">
    <div class="st-form_container">
      <h1>
        お問い合わせフォーム
      </h1>
      <form method="POST" action="./confirm/" enctype="multipart/form-data">
        <dl :class="{invalid : isBlur}">
          <dt><label for="name">お名前<span class="st-required pink" aria-label="必須">必須</span></label></dt>
          <dd>
            <input
              id="name"
              v-model="name"
              type="text"
              name="お名前"
              required
              aria-required="true"
              @blur="isBlur = isvalid(name)"
            >
            <span>お名前を入力してください</span>
          </dd>
        </dl>
        <dl :class="{invalid : isBlur2}">
          <dt><label for="address">住所<span class="st-required pink" aria-label="必須">必須</span></label></dt>
          <dd>
            <input
              id="address"
              v-model="address"
              type="text"
              name="住所"
              required
              aria-required="true"
              @blur="isBlur2 = isvalid(address)"
            >
            <span>住所を入力してください</span>
          </dd>
        </dl>
        <dl>
          <dt><label for="address2">住所２</label></dt>
          <dd>
            <input
              id="address2"
              v-model="address2"
              type="text"
              name="住所2"
              placeholder="修理場所が異なる方はこちら"
            >
          </dd>
        </dl>
        <dl :class="{invalid : isBlur4}">
          <dt><label for="email">メールアドレス<span class="st-required pink" aria-label="必須">必須</span></label></dt>
          <dd>
            <input
              id="email"
              v-model="email"
              type="email"
              name="メールアドレス"
              required
              aria-required="true"
              @blur="isBlur4 = isvalid(email)"
            >
            <span>メールアドレスを入力してください</span>
          </dd>
        </dl>
        <dl :class="{invalid : isBlur3}">
          <dt><label for="tel">電話番号<span class="st-required pink" aria-label="必須">必須</span></label></dt>
          <dd>
            <input
              id="tel"
              v-model="phone"
              class="st-tel"
              type="tel"
              name="電話番号"
              maxlength="20"
              minlength="6"
              required
              aria-required="true"
              @blur="isBlur3 = telvalid(phone)"
            >
            <span>電話番号を入力してください</span>
          </dd>
        </dl>
        <dl>
          <dt><label for="photo">現在のトイレ写真<span class="st-required pink" aria-label="必須">必須</span></label></dt>
          <dd>
            <input
              id="photo"
              type="file"
              name="images"
              required
              aria-required="true"
              @change="selectedFile"
            >
            <p class="st-attention">※5MB以下</p>
            <span>ファイルを選択してください</span>
          </dd>
        </dl>
        <button
          v-if="isSubmit"
          type="submit"
          class="st-button pink"
        >
          お問い合わせ
        </button>
        <p
          v-else
          class="st-valid"
        >
          ※{{ isMessage }}
        </p>
      </form>
    </div>
  </section>
</template>
<script lang="ts">
import { Component, Vue } from 'vue-property-decorator'
@Component
export default class Form extends Vue {
  name: string = ''
  address: string = ''
  address2: string = ''
  phone: string = ''
  email: string = ''
  isBlur: boolean = false
  isBlur2: boolean = false
  isBlur3: boolean = false
  isBlur4: boolean = false
  uploadFile: any = null
  // computed
  get isSubmit (): boolean {
    if (this.name && this.address && this.email && this.phone.match(/[0-9]/) && this.phone.length >= 6 && this.uploadFile) {
      return true
    } else {
      return false
    }
  }
  get isMessage (): string {
    if (!this.name) {
      return 'お名前を入力してください'
    } else if (!this.address) {
      return '住所を入力してください'
    } else if (!this.email) {
      return 'メールアドレスを入力してください'
    } else if (!this.phone) {
      return '電話番号を入力してください'
    } else if (!this.phone.match(/[0-9]/) || this.phone.length < 6) {
      return '正しい電話番号を入力してください'
    } else if (!this.uploadFile) {
      return '写真を添付してください'
    } else {
      return ''
    }
  }
  // methods
  isvalid (res:string): boolean {
    if (res) {
      return false
    } else {
      return true
    }
  }
  telvalid (res:string): boolean {
    if (res.match(/[0-9]/) && res.length >= 6) {
      return false
    } else {
      return true
    }
  }
  selectedFile (e: any): void {
    e.preventDefault()
    const files = e.target.files
    this.uploadFile = files[0]
  }
}
</script>
<style lang="scss" scoped>
section {
  background-color: #00CED0;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 80px 0;
}
.st-form_container {
  width: 770px;
  margin: 0 auto;
  border: solid 2px #fff;
  color: #fff;
  padding: 60px 60px 40px;
}
.st-valid {
  text-align: center;
  font-size: 18px;
}
h1 {
  color: #fff;
  text-align: center;
  font-size: 30px;
  margin-bottom: 40px;
}
dl {
  display: flex;
  margin-bottom: 30px;
}
dt {
  width: 220px;
  margin-right: 20px;
}
label{
  display: flex;
  align-items: center;
  font-size: 14px;
}
.st-required {
  display: block;
  width: 32px;
  text-align: center;
  font-size: 12px;
  background-color: #F2526E;
  margin-left: 10px;
}
dd {
  width: 400px;
  position: relative;
  span{
    display: none;
    position: absolute;
    bottom: -24px;
    font-size: 14px;
    color: #F2526E;
  }
  input[type="text"],
  input[type="email"],
  input[type="tel"] {
    width: 100%;
    height: 40px;
    padding: 0 10px;
    border: none;
  }
}
.st-tel {
  width: 200px;
}
dl.invalid{
  color: red;
  dt span {
    color: #fff;
  }
  dd span{
    display: block;
  }
}
button {
  width: 176px;
  height: 45px;
  border-radius: 10px;
  font-size: 20px;
  margin-left: auto;
  display: block;
}
.st-attention {
  font-size: 14px;
}
@media screen and (max-width:980px) {
  .st-form_container {
    width: 90%;
    padding: 5%;
  }
}
@media screen and (max-width:680px) {
  section {
    padding: 10.6666vw 0;
  }
  .st-form_container {
    border: solid 0px #fff;
    padding: 0;
  }
  h1 {
    font-size: 5.3333vw;
    margin-bottom: 10.6666vw;
  }
  dl {
    display: flex;
    flex-flow: column;
    margin-bottom: 8vw;
  }
  dt {
    width: 100%;
    margin-right: 0;
    margin-bottom: 5px;
  }
  label{
    display: flex;
    align-items: center;
    font-size: 3.8vw;
  }
  dd {
    width: 100%;
    position: relative;
    input[type="text"],
    input[type="email"],
    input[type="tel"] {
      width: 100%;
    }
  }
  .st-tel {
    width: 100%;
  }
  button {
    width: 40vw;
    height: 10.6666vw;
    font-size: 4.26666vw;
  }
  .st-valid {
    font-size: 4.8vw;
  }
  .st-attention {
    font-size: 3.8vw;
  }
}
</style>
