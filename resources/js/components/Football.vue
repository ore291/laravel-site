
<template>
  <div class="max-w-6xl mx-auto bg-gray-100 p-1 md:p-5 py-14">
    <h1 class="text-center text-3xl font-semibold mb-8">FOOTBALL</h1>
    <div class="flex justify-between bg-white mx-2 items-center px-1 md:px-2">
      <h4 class="font-semibold text-2xl" id="infoTable">{{ cats[category - 1].name }} Predictions</h4>
      <div class="cat-toggle p-1">
        <button class="btn btn-sm btn-primary" style="background: #000; color: #ee5253; border-color: #000"
          @click="() => (show = !show)">
          <i class="fa fa-bars"></i> <small>Categories</small>
        </button>
      </div>
    </div>
    <slide-up-down v-model="show" :duration="300">
      <div class="
          grid grid-cols-1
          md:grid-cols-3
          lg:grid-cols-4
          gap-0
          divide-y divide-x divide-white divide-solid
        ">
        <div v-for="cat in cats" :key="cat.id">
          <div @click="changeCategory(cat.id)" v-if="cat.tier === 1" :class="{ '!bg-black': category === cat.id }"
            class="
          
           bg-[#666666]
           hover:bg-black
            text-white
            p-1
            flex
            items-start
            justify-between
            cursor-pointer
            h-full
          ">
            <p class="text-sm font-medium">{{ cat.name }}</p>
            <span class="text-xs font-semibold"> Free </span>
          </div>
          <div @click="changeCategory(cat.id)" :class="[category === cat.id ? '!bg-black' : '', getColor(cat.tier)]"
            class="
          
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          " v-else-if="cat.tier === 6">
            <p class="text-sm font-medium">{{ cat.name }}</p>
            <span class="text-xs text-[gold] font-semibold border-y">

              <svg v-if="user === null && user_subs === null || user_subs.rollover === null"
                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">

                <path fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd" />
              </svg>
              <svg v-else-if="today.isBetween(user_subs.rollover.start_date, user_subs.rollover.end_date) === false"
                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd" />
              </svg>


              <svg v-else-if="today.isBetween(user_subs.rollover.start_date, user_subs.rollover.end_date)"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                  d="M14.5 1A4.5 4.5 0 0010 5.5V9H3a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-1.5V5.5a3 3 0 116 0v2.75a.75.75 0 001.5 0V5.5A4.5 4.5 0 0014.5 1z"
                  clip-rule="evenodd" />
              </svg>

            </span>
            <small class="text-[9px] text-[gold] font-medium lowercase first-letter:uppercase">
              {{ cat.plan_name.replace(" PLAN", "") }} </small>
          </div>
          <div @click="changeCategory(cat.id)" :class="[category === cat.id ? '!bg-black' : '', getColor(cat.tier)]"
            class="
          
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          " v-else>
            <p class="text-sm font-medium">{{ cat.name }}</p>
            <span class="text-xs text-[gold] font-semibold border-y">

              <svg v-if="user === null || user_subs === null" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                viewBox="0 0 20 20" fill="currentColor">

                <path fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd" />
              </svg>
              <svg
                v-else-if="user_subs !== null && user_subs?.sub?.plan_id < cat.tier || today.isBetween(user_subs?.sub?.start_date, user_subs?.sub?.end_date) === false"
                xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                  clip-rule="evenodd" />
              </svg>


              <svg v-else-if="today.isBetween(user_subs.sub.start_date, user_subs.sub.end_date)"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
                <path fill-rule="evenodd"
                  d="M14.5 1A4.5 4.5 0 0010 5.5V9H3a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-1.5V5.5a3 3 0 116 0v2.75a.75.75 0 001.5 0V5.5A4.5 4.5 0 0014.5 1z"
                  clip-rule="evenodd" />
              </svg>

            </span>
            <small class="text-[9px] text-[gold] font-medium lowercase first-letter:uppercase">
              {{ cat.plan_name.replace(" PLAN", "") }} </small>
          </div>

        </div>
      </div>

    </slide-up-down>
    <div class="my-6 w-full">
      <div class="bg-black rounded-t-md">
        <div class="w-full flex justify-between px-2 py-3">
          <span v-for="(day, i) in days" :key="i" @click="setActiveDate(day)"
            :class="{ 'bg-white !text-black p-1 rounded-md': activeDay == day }" class="
              text-white
              font-bold
              cursor-pointer
              first:hidden first:md:block
              last:hidden last:md:block
            ">
            {{ addDays(day) }}
          </span>
        </div>
      </div>
      <div>
        <table class="table-auto w-full">
          <thead class="border-b border-b-black font-semibold text-black my-3 ">
            <tr>
              <th class="text-start pb-2 ml-1">Events</th>
              <th class="text-start pb-2">Predictions</th>
              <th class="text-start pb-2">Date</th>
              <th class="text-start pb-2 mr-1">Score</th>
            </tr>
          </thead>
          <tbody class="font-medium p-2 text-lg" v-if="loading">
            Loading...
          </tbody>
          <tbody v-else-if="predictions.length > 0">
            <tr class="
                even:bg-white
                odd:bg-[#F2F2F2]
                text-xs
                md:text-sm
                font-medium
                !px-3
              " v-for="game in predictions" :key="game.id">
              <td class="
                  py-2
                  flex flex-col
                  space-x-1
                  items-start
                  justify-center
                  space-y-2
                ">
                <div class="">
                  <div class="flex">
                    <span>
                      {{ `${game.team_a} vs ${game.team_b}` }}
                    </span>
                  </div>
                </div>
                <div class="flex items-center space-x-1.5 ml-2">
                  <span>
                    <img :src="`/svg/${game.logo}`" :alt="game.league.name" class="w-6 h-6" />
                  </span>
                  <span>{{ game.league.country.substring(0, 3).toUpperCase() }}</span>
                  <span>{{ `(${game.league.name})` }}</span>
                </div>
              </td>
              <td class="py-2">
                <div class="flex items-center justify-start space-x-1">
                  <span class="
                      inline-flex
                      items-center
                      justify-center
                      px-1
                      py-1
                      font-medium
                      text-[12px]
                      leading-none
                      text-white
                      bg-[#0D6EFD]
                      rounded
                      text-center
                    ">Tips : {{ game.tips }}</span>
                  <span class="
                      ml-1
                      inline-flex
                      items-center
                      justify-center
                      px-1
                      py-1
                      font-medium
                      text-[12px]
                      leading-none
                      text-white
                      bg-[#DC3545]
                      rounded
                      text-center
                    ">Odd: {{ game.odds }}</span>
                </div>
              </td>
              <td>{{ game.date_t }}</td>
              <td class="py-2">{{ `${game.score_a} - ${game.score_b}` }}</td>
            </tr>

          </tbody>


          <tbody class="text-red-500 font-medium p-2 text-lg" v-else>
            No predictions available for selected date.
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import SlideUpDown from "vue3-slide-up-down";
import moment from "moment";
import axios from "axios";

export default {

  created() {
    this.user = window.user;
    this.user_subs = window.subs;
    this.cats = window.cats;
    this.getPredictions(parseInt(localStorage.getItem("category")), 0, 1)
    this.category = parseInt(localStorage.getItem("category"))
    if (localStorage.getItem('category') === null) {
      localStorage.setItem('category', 1)
    }

  },
  methods: {
    async getPredictions(cat, d, tier) {
      this.loading = true;
      console.log(tier);
      const data = {
        userId: this.user ? this.user.id : null,
        days: d,
        category: cat
      };

      if (tier === 6) {
        if (this.user === null && this.user_subs === null) {
          console.log('here1');
          localStorage.setItem('category', 1);
          this.category = 1;
          window.location.assign('/login')
          return
        }
        if (this.user_subs.rollover === null) {
          console.log('here2');

          localStorage.setItem('category', 1);
          this.category = 1;
          window.location.assign('/payment')
        }
        else if (this.today.isBetween(this.user_subs.rollover.start_date, this.user_subs.rollover.end_date) === false) {
          console.log('here3');

          localStorage.setItem('category', 1);
          this.category = 1;
          window.location.assign('/payment')
        } else {
          console.log('here4');
          const res = await axios.post("/api/predictions/football", data);
          this.predictions = res.data.data;
          this.loading = false;
        }
      } else {
        if (cat <= 3) {
          const res = await axios.post("/api/predictions/football", data);
          this.predictions = res.data.data;
          this.loading = false;

        } else if (cat > 3 && this.user === null && this.user_subs === null) {
          console.log('here1');
          localStorage.setItem('category', 1);
          this.category = 1;
          window.location.assign('/login')
        }


        else if (cat > 3 && this.user_subs.sub.plan_id < tier || this.today.isBetween(this.user_subs.sub.start_date, this.user_subs.sub.end_date) === false) {


          localStorage.setItem('category', 1);
          this.category = 1;
          window.location.assign('/payment')
        } else if (cat > 3 && this.user_subs.sub.plan_id >= tier || this.today.isBetween(this.user_subs.sub.start_date, this.user_subs.sub.end_date)) {

          console.log('here6');

          const res = await axios.post("/api/predictions/football", data);
          this.predictions = res.data.data;
          this.loading = false;
        }

      }


    },
    changeCategory(category) {
      localStorage.setItem('category', category)
      this.category = category;
      this.getPredictions(category, 0, this.cats[category - 1].tier)
    },

    selectedTier(id) {
      console.log(parseInt(localStorage.getItem('category')) === id)
      return parseInt(localStorage.getItem('category')) === id;
    },

    setOtherSport(id) {
      this.activeSport = id;
    },
    addDays(n) {
      if (n === 0) {
        return `Today ${moment().format("MMM DD")}`;
      } else {
        return moment().add(n, "days").format("MMM DD");
      }
    },
    setActiveDate(n) {
      this.activeDay = n;
      this.getPredictions(parseInt(localStorage.getItem('category')), n, this.cats[this.category - 1].tier)
    },
    setOtherActiveDate(n) {
      this.otherActiveDay = n;
    },
    getCountryFlag(country) {
      return this.emblems.find((emblem) => emblem.country === country);
    },
    getColor(tier) {

      switch (tier) {
        case 1:
          return "bg-[#666666]";
          break;
        case 2:
          return "bg-blue-600";
          break;
        case 3:
          return "bg-green-800";
          break;
        case 4:
          return "bg-red-700";
          break;
        case 6:
          return "bg-red-700";
          break;
        case 5:
          return "bg-red-700";
          break;

      }


    }
  },
  computed: {
    today() {
      return moment();
    },
    

  },
  data() {
    return {
      loading: false,
      predictions: [],
      category: null,
      user: null,
      user_subs: null,
      cats: [],
      show: true,
      activeDay: 0,
      activeSport: 0,
      otherActiveDay: 0,
      other_sportz: [
        {
          id: 0,
          name: "BasketBall",
        },
        {
          id: 1,
          name: "Tennis",
        },
        {
          id: 2,
          name: "Boxing",
        },
        {
          id: 3,
          name: "Hockey",
        },
      ],
      days: [-3, -2, -1, 0, 1, 2, 3],
     
     
    };
  },
};
</script>

<style>
</style>