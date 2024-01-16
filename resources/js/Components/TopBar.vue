<template>
  <div class="top">
    <div class="top-head">
        <div class="logo">
            <span class="icon"></span>
        </div>
        <div class="brand">
            Adilo
        </div>
    </div>
    <div class="top-list">
        <ul class="links">
            <li class="link">Projects</li>
            <li class="link dropdown">
                <!-- <div class="link"> -->
                    Tools & App

                <!-- </div> -->
                <ul class="dropdown-list">
                    <li :class="{'active': $page.url === '/'}"> <Link href="/">Snapbyte Recorder</Link> </li>
                    <span />
                    <li>AudioBounce</li>
                    <span />
                    <li>Sugar Voice</li>
                </ul>
            </li>
            <li class="link">Channels</li>
            <li class="link">Contacts</li>
            <li class="link">Analytics</li>
            <li class="link">Settings</li>
        </ul>
        <div class="others">
            <div class="help">
                Help
            </div>
            <div class="divider"></div>
            <div class="profile">
                <span class="profile-img">
                    <img src="/images/calendar.png" alt="profile">
                </span>
                <span class="profile-info">
                    <span class="profile-name">Cody Fisher</span>
                    <span class="profile-email">codyfisher@gmail.com</span>
                </span>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default {
    components: { Link }
}
</script>

<style lang="less">
@import '../../css/GlobalStyles/variables.less';

.top {
    border-bottom: 0.5px solid @color6;
    height: 59px;
    display: flex;

    .top-head {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
        flex: 1.05;
        padding: 0 10px;
    
        .logo {
            background: #FBBD71 0% 0% no-repeat padding-box;
            border-radius: 10px;
            height: 28px;
            width: 28px;
            display: grid;
            place-items: center;

            .icon {
                width: 50%;
                height: 50%;
                background-color: #fff;
                border-radius: 50%;
            }

        }
    
        .brand {
            font-weight: bold;
            font: normal normal bold 18px/26px Helvetica;
            color: @medium-link;
        }
    }
    
    .top-list {
        padding: 0;
        display: flex;
        height: 100%;
        gap: 10px;
        flex: 4;
    
        .links {
            display: flex;
            margin: 0;
            padding: 0;
            gap: 10px;
            height: 100%;
            list-style: none;
            color: @medium-link;
    
            .link {
                padding: 0 10px;
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 14px;
                height: 100%;
                cursor: pointer;
                position: relative;

                &:hover {
                    border-top: 3px solid @blue-button;
                }

                &.dropdown {
    
                    .dropdown-list {
                        display: flex;
                        flex-direction: column;
                        list-style: none;
                        background-color: #fff;
                        border-radius: 6px;
                        box-shadow: 10px 10px 18px 10px @hover-link;
                        visibility: hidden;
                        position: absolute;
                        top: 49px;
                        width: 140px;
                        left: 2px;
                        z-index: 5000;
        
                        li {
                            display: flex;
                            align-items: center;
                            font-size: 13px;
                            height: 39px;
                            padding: 10px;
                            cursor: pointer;
        
                            &.active, &:hover {
                                color: @blue-button;
                            }

                            a {
                                text-decoration: none;
                                color: @medium-link;

                            }
                        }
                    }
                    &:hover {
                        .dropdown-list {
                            visibility: visible;
                        }
                    }
    
                    span {
                        border: 0.2px solid @color6;
                        width: 100%;
                    }
    
                }
            }


        }
    }


    .others {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 14px;
        padding: 0 10px;
        gap: 7px;

        .help {
            display: grid;
            height: 100%;
            place-items: center;
            padding: 0 10px;
            font-weight: bold;
            color: @medium-link;
            cursor: pointer;
        }

        .profile {
            display: flex;
            height: 100%;
            align-items: center;
            gap: 6px;
            font-size: 12px;
            cursor: pointer;

            .profile-img {
                background: orange;
                display: grid;
                place-items: center;
                width: 28px;
                height: 28px;
                border-radius: 5px;
                object-fit: contain;

                img {
                    width: 100%;
                    height: 100%;
                    object-fit: contain;
                }

            }

            .profile-info {
                display: flex;
                flex-direction: column;

                span:nth-child(1) {
                    font-weight: bold;
                }
                span:nth-child(2) {
                    font-weight: normal;
                }
            }
        }

        .divider {
            border: 0.5px solid @color8;
            height: 50%;
        }
    }
}

</style>>
