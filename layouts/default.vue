<template>
  <div>
    <nuxt />
  </div>
</template>

<style lang="scss">
*,
*:before,
*:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
html {
  font-family: "游ゴシック体", YuGothic, "游ゴシック Medium", "Yu Gothic Medium", "游ゴシック", "Yu Gothic", sans-serif;
  font-size: 16px;
  word-spacing: 1px;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  color: #1A3455;
}
li {
  list-style: none;
}
a {
  color: #000;
  text-decoration: none;
}
em {
  font-style: normal;
}
button {
  cursor: pointer;
  border: none;
}
.pink {
  background-color: #F2526E;
  color: #fff;
}
.blue {
  background-color: #00CED0;
  color: #fff;
}
.yellow {
  background-color: #FFEF5D;
}
.orange {
  background-color: #FF8B60;
  color: #fff;
}
.text-orange {
  color: #FF8B60;
}
.text-pink {
  color: #F2526E;
}
a.pink,
button.pink {
  &:hover,
  &:focus {
    background-color: rgb(240, 106, 128);
  }
}
</style>
