<template>
    <div>
        <top-bar/>
        <div class="hero">
            <side-navbar class="side" />

            <div class="content">
                <main>
                    <slot></slot>

                </main>

            </div>

        </div>
    </div>
</template>

<script>

import SideNavbar from '../Components/SideNavbar.vue'
import TopBar from '../Components/TopBar.vue'
export default {
    components: { SideNavbar, TopBar },
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