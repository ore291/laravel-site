<template>
  <div v-if="country === 'ng'" v-cloak>
    <NigeriaVue :plans="plans" :subs="subs" />
  </div>
  <div v-if="country === 'int'"  v-cloak>
    <International :plans="plans" :subs="subs" />
  </div>
  <div v-if="country === 'ea'"  v-cloak>
    <Africa :plans="plans" :subs="subs" />
  </div>
</template>

<script>
import NigeriaVue from "./Nigeria.vue"
import International from "./International.vue";
import Africa from "./Africa.vue";
export default {
  components: {
    NigeriaVue,
    International,
    Africa,
    Africa
},
  created() {
    this.user = window.user;
    this.country = window.country_code;
    this.getPlans();
    this.getSubs();

  },
  methods: {
    getPlans() {
      axios
        .get('/api/plans')
        .then((res) => {
          // assign state users with response data
          this.plans = res.data.data;

        })
        .catch((error) => {
          console.log(error.res.data);
        });
    },
    getSubs() {
      axios
        .get(`/api/subs/${window.user.id}`)
        .then((res) => {
          // assign state users with response data
          this.subs = res.data.data;
          console.log(res)

        })
        .catch((error) => {
          console.log(error.res.data);
        });
    },
  },
  data() {
    return {
      user: null,
      country: null,
      subs: [],
      plans: [],
    }
  }
}
</script>

<style>
</style>