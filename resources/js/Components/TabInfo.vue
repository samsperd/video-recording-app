<template>
  <div class="tab">
    <div class="breadcrumbs">
        <li>Snapbyte</li> >
        <li>My Recordings</li>
    </div>
    <div class="tab-info">
        <div class="info">
            <div class="tab-head">
                My Recordings
            </div>
            <div class="tab-count">
                25
            </div>
        </div>
        <div class="links">
            <div class="filters">
                <button class="btn">By Date</button>
                <button class="btn">Add Filter</button>
            </div>

            <div class="actions">
                <button class="btn">New Request</button>
                <button class="btn">Start Recording</button>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="less">
@import '../../css/GlobalStyles/variables.less';

.tab {
    display: block;

    .breadcrumbs {
        list-style-type: none;
        display: flex;
        font-size: 12px;
        padding: 10px 0;
        gap: 8px;
        color: @medium-link;

        li {
            color: @half-mid-link;
        }

    }

    .tab-info {
        padding: 10px 0;
        display: flex;
        font-size: 14px;
        justify-content: space-between;

        .info {
            display: flex;
            gap: 10px;

            .tab-count {
                padding: 0 10px;
                font-weight: bold;
                color: @half-mid-link;
            }
        }

        .links {
            display: flex;
            gap: 10px;

            .btn {
                border-radius: 10px;
                padding: 2px 10px;
                font-size: 11px;
                outline: none;
                appearance: none;
                border: none;
                background: none;
            }
            
            .filters {
                display: flex;
                gap: 10px;
                
                .btn {
                    border: 1px solid @hover-link;

                }
            }

            .actions {
                display: flex;
                gap: 10px;
                
                .btn:nth-child(1) {
                    color: white;
                    background: @blue-button;
                }
                .btn:nth-child(2) {
                    color: white;
                    background: @red-button;
                }
                
            }
        }
    }
}
</style>