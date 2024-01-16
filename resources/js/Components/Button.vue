<template>
    <button class="btn">{{ title }}</button>
</template>

<script>
export default {
    props: ['title']

}
</script>

<style lang="less">
@import '../../css/GlobalStyles/variables.less';

.btn {
    border-radius: 10px;
    padding: 2px 10px;
    font-size: 11px;
    outline: none;
    appearance: none;
    border: none;
    background: none;
}



</style>