<template>
  <aside class="side-bar">
    <ul>
      <li class="active"> <a href="/recordings">
        <span>
          <img width="26" height="26" src="./../../assets/icons/video-player.svg" alt="Video Player">
        </span>
        My Recordings
        
        </a>
      </li>
      <li><a href="/">
        Requested
      </a></li>
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
        width: 100%;
        padding: 7px;
        font-size: 14px;
        border-radius: 7px;
        cursor: pointer;
        
        a {
          color: darken(@gray-link, 20%);
          gap: 8px;
          align-items: center;
          justify-content: center;
          display: flex;
          text-decoration: none;
        }

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