<template>
  <layout>
    <tab-info></tab-info>
    <div class="main-content">
      <table class="table">
        <thead>
          <tr>
            <th>
              Recordings
            </th>
            <th style="width: 40%;">
              Title
            </th>
            <th style="width: 10%;">
              Views
            </th>
            <th style="width: 10%;">
              Size
            </th>
            <th>
              Last Modified
            </th>
            <th style="width: 10%;">
            </th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="recording in recordings" :key="recording.id">
            <td>
              Recordings
            </td>
            <td>
              <h5>
                {{ recording.title }}
              </h5>
              <small>
                {{ recording.description }}
              </small>
            </td>
            <td>
              {{ recording.views }}
            </td>
            <td>
              {{ recording.size }}
            </td>
            <td>
              {{ formattedTimeAgo(recording.updated_at) }}
            </td>
            <td class="three-dots">
              . . .
            </td>
          </tr>
        </tbody>
      </table>

    </div>

  </layout>
</template>

<script>
import TabInfo from '../Components/TabInfo.vue';
import Layout from '../Layout/layout.vue'
import moment from 'moment'

export default {
  props: {
    recordings: Array
  },
  components: { Layout, TabInfo },
  mounted() {
    console.log(this.$page);
    console.log(this.recordings);
  },
  methods: {
    formattedTimeAgo(timestamp) {
      return moment(timestamp).fromNow();

    }
  }

}
</script>

<style lang="less">
@import '../../css/GlobalStyles/variables.less';

table, th, td {
  color: @medium-link;
  font-weight: normal;
}

/* .main-content {
}
*/

.table {
  padding: 15px 0;
  width: 100%;
  text-align: justify;

  th, td {
    padding: 10px 0;
  }
  th {
    font-size: 13px;
    font-weight: 700;
  }

  tbody {
    font-size: 13px;
    font-weight: normal;

    h5 {
      font-weight: 500;
    }
    small {
      font-weight: 300;
      display: block;
      width: 62%;
      padding: 7px 0;
      font-size: 11px;
    }
  }
}

.three-dots {
  text-align: center;
  font-weight: bolder;
  font-size: 23px;
}

</style>