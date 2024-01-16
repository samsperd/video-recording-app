<template>
  <layout>
    <tab-info></tab-info>
    <div class="main-content">
      <div class="say-hello">
        <div class="image-box"></div>
        <div class="shortlinks">
          <h5>Say hello to world</h5>
          <p>Record your first video/audio and share it what your team, friends, followers and customers.</p>
          <div class="btn-group">
            <button class="btn">Start Recording</button>
            <button class="btn">New Request</button>
          </div>
        </div>
      </div>

    </div>
    <!-- <modal /> -->
  </layout>
</template>

<script>
import TabInfo from '../Components/TabInfo.vue';
import Layout from '../Layout/layout.vue'
import Modal from '../Components/Modal.vue';

export default {
  props: {
    recordings: Array
  },
  components: { Layout, TabInfo, Modal },
  mounted() {
    console.log(this.$page);
    console.log(this.recordings);
  },
  methods: {
    //
  }

}
</script>

<style lang="less">
@import '../../css/GlobalStyles/variables.less';

.main-content{
  width: 100%;
  padding: 10px 0;
}

.say-hello {
  width: 100%;
  height: 400px;
  border: 1px dashed #000;
  border-radius: 12px;

  .image-box {
    border: 1px solid #000;
    height: 50%;
  }
}

.shortlinks {
  display: grid;
  place-items: center;

  .btn-group {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 10px;
    gap: 10px;
  }
}
</style>