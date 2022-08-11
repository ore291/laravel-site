<template>
  <div class="max-w-6xl mx-auto bg-gray-100 p-5 py-14">
    <h1 class="text-center text-3xl font-semibold mb-8">FOOTBALL</h1>
    <div class="flex justify-between bg-white mx-2 items-center px-2">
      <h4 class="font-semibold text-2xl" id="infoTable">Draws Predictions</h4>
      <div class="cat-toggle p-1">
        <button
          class="btn btn-sm btn-primary"
          style="background: #000; color: #ee5253; border-color: #000"
          @click="() => (show = !show)"
        >
          <i class="fa fa-bars"></i> <small>Categories</small>
        </button>
      </div>
    </div>
    <slide-up-down v-model="show" :duration="300">
      <div
        class="
          grid grid-cols-1
          md:grid-cols-3
          lg:grid-cols-4
          gap-0
          divide-y divide-x divide-white divide-solid
        "
      >
        <div
          class="
            bg-black
            text-white
            p-1
            flex
            items-start
            justify-between
            cursor-pointer
          "
        >
          <p class="text-sm font-medium">Correct Score</p>
          <span class="text-xs font-semibold"> Free </span>
        </div>
        <div
          class="
            bg-[#666666]
            hover:bg-black
            text-white
            p-1
            flex
            items-start
            justify-between
            cursor-pointer
          "
        >
          <p class="text-sm font-medium">Double Chance</p>
          <span class="text-xs font-semibold"> Free </span>
        </div>
        <div
          class="
            bg-[#666666]
            hover:bg-black
            text-white
            p-1
            flex
            items-start
            justify-between
            cursor-pointer
          "
        >
          <p class="text-sm font-medium">Draw</p>
          <span class="text-xs font-semibold"> Free </span>
        </div>
        <div
          class="
            bg-blue-600
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Half Time/Full Time</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Regular </small>
        </div>
        <div
          class="
            bg-blue-600
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Over 1.5 Goals</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Regular </small>
        </div>
        <div
          class="
            bg-blue-600
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Over 2.5 Goals</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Regular </small>
        </div>
        <div
          class="
            bg-blue-600
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">BTTS/GG</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Regular </small>
        </div>
        <div
          class="
            bg-blue-600
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Take the Risk</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Regular </small>
        </div>
        <div
          class="
            bg-blue-600
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Handicap</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Regular </small>
        </div>
        <div
          class="
            bg-green-800
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Sure 3 Odds</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Basic </small>
        </div>
        <div
          class="
            bg-green-800
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Sure 2 Odds</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Basic </small>
        </div>
        <div
          class="
            bg-green-800
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Sure 5 Odds</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Basic </small>
        </div>
        <div
          class="
            bg-green-800
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Weekend 50 Odds</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Basic </small>
        </div>
        <div
          class="
            bg-red-700
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Bankers</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Premium </small>
        </div>
        <div
          class="
            bg-red-700
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Other Leagues</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Premium </small>
        </div>
        <div
          class="
            bg-red-700
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Combo</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Premium </small>
        </div>
        <div
          class="
            bg-red-700
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Super 10 Odds</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Premium </small>
        </div>
        <div
          class="
            bg-red-700
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Weekly Jackpot</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Premium </small>
        </div>
        <div
          class="
            bg-red-700
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Top Leagues</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Premium </small>
        </div>
        <div
          class="
            bg-red-700
            hover:bg-black
            text-white
            hover:text-red-600
            p-1
            flex flex-col
            items-center
            justify-between
            cursor-pointer
            space-y-1
          "
        >
          <p class="text-sm font-medium">Rollover Tips</p>
          <span class="text-xs text-[gold] font-semibold border-y">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              class="h-5 w-5"
              viewBox="0 0 20 20"
              fill="currentColor"
            >
              <path
                fill-rule="evenodd"
                d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                clip-rule="evenodd"
              />
            </svg>
          </span>
          <small class="text-[9px] text-[gold] font-medium"> Premium </small>
        </div>
      </div>
    </slide-up-down>
    <div class="my-6 w-full">
      <div class="bg-black rounded-t-md">
        <div class="w-full flex justify-between px-2 py-3">
          <span
            v-for="(day, i) in days"
            :key="i"
            @click="setActiveDate(day)"
            :class="{ 'bg-white text-black p-1 rounded-md': activeDay == day }"
            class="
              text-white
              font-bold
              cursor-pointer
              first:hidden first:md:block
              last:hidden last:md:block
            "
          >
            {{ addDays(day) }}
          </span>
        </div>
      </div>
      <div>
        <table class="table-auto w-full">
          <thead class="border-b border-b-black font-semibold text-black my-3 ">
            <tr >
              <th class="text-start pb-2 ml-1">Events</th>
              <th class="text-start pb-2">Predictions</th>
              <th class="text-start pb-2">Date</th>
              <th class="text-start pb-2 mr-1">Score</th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="
                even:bg-white
                odd:bg-[#F2F2F2]
                text-xs
                md:text-sm
                font-medium
                !px-3
              "
              v-for="game in formed_games"
              :key="game.id"
            >
              <td
                class="
                  py-2
                  flex flex-col
                  space-x-1
                  items-start
                  justify-center
                  space-y-2
                "
              >
                <div class="">
                  <div class="flex">
                    <span>
                      {{ game.vs }}
                    </span>
                  </div>
                </div>
                <div class="flex items-center space-x-1.5 ml-2">
                  <span>
                    <img
                      :src="`/img/emblem/${game.emblem.emblem}`"
                      alt=""
                      class="w-6 h-6"
                    />
                  </span>
                  <span>{{ game.country_code }}</span>
                  <span>{{ `(${game.league})` }}</span>
                </div>
              </td>
              <td class="py-2">
                <div class="flex items-center justify-start space-x-1">
                  <span
                    class="
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
                    "
                    >Tips : {{ game.tips }}</span
                  >
                  <span
                    class="
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
                    "
                    >Odd: {{ game.odds }}</span
                  >
                </div>
              </td>
              <td>{{ game.date_t }}</td>
              <td class="py-2">{{ game.score }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>

<script>
import SlideUpDown from "vue3-slide-up-down";
import moment from "moment";

export default {
  methods: {
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
    },
    setOtherActiveDate(n) {
      this.otherActiveDay = n;
    },
    getCountryFlag(country) {
      return this.emblems.find((emblem) => emblem.country === country);
    },
  },
  computed: {
    formed_games() {
      return this.response.map((game) => {
        var emblem = this.getCountryFlag(game.country);
        return {
          ...game,
          emblem,
          country_code: game.country.substring(0, 3).toUpperCase(),
          vs: `${game.teamA} vs ${game.teamB}`,
          score: `${game.scoreA} - ${game.scoreB}`,
        };
      });
    },
  },
  data() {
    return {
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
      response: [
        {
          id: "9524",
          country: "Europa League",
          league: "UEL",
          teamA: "Inter Club de",
          teamB: "Cluj",
          tips: "2",
          odds: "1.25",
          alt_tips: "",
          alt_odds: "",
          over: "",
          under: "",
          date_t: "2022-07-27",
          time_t: "16:00",
          scoreA: "-",
          scoreB: "-",
        },
        {
          id: "9525",
          country: "Europa League",
          league: "UEL",
          teamA: " Klaksvik",
          teamB: "Sutjeska",
          tips: "1X",
          odds: "1.10",
          alt_tips: "",
          alt_odds: "",
          over: "",
          under: "",
          date_t: "2022-07-27",
          time_t: "19:00",
          scoreA: "-",
          scoreB: "-",
        },
        {
          id: "9526",
          country: "Egypt",
          league: "Premier League",
          teamA: "Smouha",
          teamB: "Al Mokawloon",
          tips: "1X",
          odds: "1.30",
          alt_tips: "",
          alt_odds: "",
          over: "",
          under: "",
          date_t: "2022-07-27",
          time_t: "17:30",
          scoreA: "-",
          scoreB: "-",
        },
        {
          country: "Norway",
          league: "1st League",
          teamA: "Fredrikstad",
          teamB: "Raufoss IL",
          tips: "BTS",
          odds: "1.48",
          alt_tips: "",
          alt_odds: "",
          over: "",
          under: "",
          date_t: "2022-07-27",
          time_t: "18:00",
          scoreA: "-",
          scoreB: "-",
        },
        {
          id: "9528",
          country: "Bolivia",
          league: "Primera B",
          teamA: "Universitario",
          teamB: "Royal Pari",
          tips: "X2",
          odds: "1.40",
          alt_tips: "",
          alt_odds: "",
          over: "",
          under: "",
          date_t: "2022-07-27",
          time_t: "23:00",
          scoreA: "-",
          scoreB: "-",
        },
      ],
      emblems: [
        {
          id: "34",
          country: "Europa League",
          emblem: "108975786995.jpg",
        },
        {
          id: "34",
          country: "Europa League",
          emblem: "108975786995.jpg",
        },
        {
          id: "32",
          country: "Egypt",
          emblem: "561219086451.jpg",
        },
        {
          id: "98",
          country: "Norway",
          emblem: "841844815295.jpg",
        },
        {
          id: "144",
          country: "Bolivia",
          emblem: "913407201226.jpg",
        },
      ],
    };
  },
};
</script>

<style>
</style>