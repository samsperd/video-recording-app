<template>
  <aside class="side-bar">
    <ul>
      <li :class="{'active': $page.url === '/recordings'}"> <Link href="/recordings">
        <span>
          <img width="26" height="26" src="./../../assets/icons/video-player.svg" alt="Video Player">
        </span>
        My Recordings
        
      </Link>
    </li>
    <li><a href="/">
        <span>
          <!-- <v-icon name="bi-share-fill"></v-icon> -->
        </span>
        Requested
      </a></li>
    </ul>
  </aside>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';
// import OhVueIcon from "oh-vue-icons";

export default {
    components: { Link }
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