<template>
    <div>
        <top-bar/>
        <div class="hero">
            <side-navbar  class="side" />

            <div class="content">
                <main>
                    <slot @showIt="fetchData"></slot>

                </main>
                <modal v-show="showModal" />

            </div>

        </div>
    </div>
</template>

<script>

import SideNavbar from '../Components/SideNavbar.vue'
import TopBar from '../Components/TopBar.vue'
import Modal from '../Components/Modal.vue';

export default {
    data() {
    return {
      showModal: false
    }
  },
    components: { SideNavbar, TopBar, Modal },
    methods: {
        fetchData(data) {
            console.log(data);
        }
    }
}
</script>

<style lang="less">
.hero {
    height: 100vh;
    display: flex;
    width: 100vw;

    .side {
        flex: 1.05;
    }

    .content {
        flex: 4;

        main {
            margin-left: 95px;
            margin-right: 35px;
        }
    }
}

</style>