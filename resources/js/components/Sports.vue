<template>
  <div class="max-w-6xl mx-auto bg-gray-100 p-1 md:p-5 py-14">
    <h1 class="text-center text-3xl font-semibold mb-8 uppercase">{{ otherSport.sport_name }}</h1>


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
              <th class="text-start pb-2 ">&nbsp;</th>
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
                    <p class="text-lg font-semibold">
                      {{ `${game.team_a} vs ${game.team_b}` }}
                    </p>
                  </div>
                </div>
                <div class="flex items-center space-x-1.5 ml-2">
                  <span>

                    <img v-if="game.sport_name === 'basketball'" src="/img/Basketball-1.png" alt="" class="w-6 h-6" />
                    <img v-if="game.sport_name === 'tennis'" src="/img/Tennis-1.png" alt="" class="w-6 h-6" />
                    <img v-if="game.sport_name === 'boxing'" src="/img/boxing.png" alt="" class="w-6 h-6" />
                    <img v-if="game.sport_name === 'ice hockey'" src="/img/Ice-hockey-1.png" alt="" class="w-6 h-6" />
                  </span>
                  <p class="font-medium">{{ `(${game.league_name})` }}</p>
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
              <td class="py-2"><span v-if="game.status == 0"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="stroke-2 w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                  </svg>
                </span>
                <span v-else-if="game.status == 1"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                    class="w-6 h-6 stroke-2 text-green-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>

                </span>
                <span v-else-if="game.status == 2"><svg xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                      d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>


                </span>
              </td>
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
import moment from "moment";
import axios from "axios";

export default {
  created() {
    this.otherSport = window.sport;
    this.getPredictions(0);
  },
  computed: {
    today() {
      return moment();
    },
  },
  methods: {
    getPredictions(days) {
      this.loading = true;
      axios.post(`/api/predictions/${this.otherSport.id}`, {
        days: days,
        limit: 100
      }).then(res => {
        if (res.status === 200) {
          this.loading = false;
          this.predictions = res.data.data;
        }
      }).catch((err) => {
        console.log(err)
      })
    },
    setActiveDate(n) {
      this.activeDay = n;
      this.getPredictions(n)
    },
    addDays(n) {
      if (n === 0) {
        return `Today ${moment().format("MMM DD")}`;
      } else {
        return moment().add(n, "days").format("MMM DD");
      }
    },
  },
  data() {
    return {
      otherSport: {},
      predictions: [],
      activeDay: 0,
      loading: false,
      days: [-3, -2, -1, 0, 1, 2, 3],
    }
  }
}
</script>

<style>
</style>