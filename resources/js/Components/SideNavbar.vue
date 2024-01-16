<template>
  <aside class="side-bar">
    <ul>
      <li class="active">
        <span>
          <img width="26" height="26" src="./../../assets/icons/video-player.svg" alt="Video Player">
        </span>
        My Recordings</li>
      <li>Requested</li>
    </ul>
  </aside>
</template>

<script>
export default {

}
</script>

<style lang="less">
@import '../../css/GlobalStyles/variables.less';

.side-bar {
    height: 100%;
    padding: 40px 10px;
    background: @color5;
    
    ul {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      list-style-type: none;
      gap: 20px;

      li {
        display: flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        padding: 7px;
        gap: 8px;
        font-size: 14px;
        border-radius: 7px;
        cursor: pointer;
        color: darken(@gray-link, 20%);

        span {
          display: grid;
          place-items: center;
        }

        &.active {
          background: @hover-link;

        }
      }
    }
}
</style>