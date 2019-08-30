<template>
  <footer>
    <h1>トイレリフォームドットコム</h1>
    <p><small>©︎ トイレリフォームドットコム. All rights reserved.</small></p>
  </footer>
</template>
<script lang="ts">
import { Vue, Component } from 'vue-property-decorator'
@Component
class Footer extends Vue {
}
export default Footer
</script>
<style lang="scss" scoped>
footer {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background-color: #1A3455;
  color: #fff;
  padding: 35px 0;
}
h1 {
  font-size: 28px;
  font-weight: normal;
}
i {
  font-size: 14px;
}
</style>
