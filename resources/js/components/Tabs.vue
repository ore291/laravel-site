<template>
  <div class="grid grid-cols-1 md:grid-cols-2 md:justify-center gap-x-3">
    <div class="w-full">
      <div class="w-full bg-black text-white">
        <p class="text-center font-bold text-xl mt-2 mb-[5px]">
          Free Football Predictions
        </p>
      </div>
      <div class="bg-black">
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
          <thead class="border-b border-b-black font-semibold text-black">
            <tr>
              <th class="text-start pb-2 ml-1">Matches</th>
              <th class="text-start pb-2">Tips/Odds</th>
              <th class="text-start pb-2 mr-1">Score</th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="even:bg-white odd:bg-[#F2F2F2] text-xs !px-3"
              v-for="game in formed_games"
              :key="game.id"
            >
              <td class="py-2 flex space-x-1 items-center">
                <div class="flex items-center space-x-1.5 ml-2">
                  <span>
                    <img
                      :src="`/img/emblem/${game.emblem.emblem}`"
                      alt=""
                      class="w-5 h-5"
                    />
                  </span>
                  <span>{{ game.country_code }}</span>
                  <span>{{ `(${game.league})` }}</span>
                </div>
                <div class="ml-3">
                  <div class="flex">
                    <span>
                      {{ game.vs }}
                    </span>
                  </div>
                </div>
              </td>
              <td class="py-2">
                <span
                  class="
                    inline-flex
                    items-center
                    justify-center
                    px-1
                    py-1
                    font-medium
                    text-[9px]
                    leading-none
                    text-white
                    bg-[#0D6EFD]
                    rounded
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
                    text-[9px]
                    leading-none
                    text-white
                    bg-[#DC3545]
                    rounded
                  "
                  >Odds: {{ game.odds }}</span
                >
              </td>
              <td class="py-2">{{ game.score }}</td>
            </tr>
          </tbody>
        </table>
        <div class="w-full bg-black text-white">
          <p class="text-center text-xs">Sportverified</p>
        </div>
      </div>
    </div>
    <div class="w-full">
      <div class="w-full bg-[#006600] text-white">
        <p class="text-center font-medium text-lg mt-2 mb-[1px]">
          Other Sport Free Predictions
        </p>
      </div>
      <div
        class="
          w-full
          flex
          items-center
          justify-around
          bg-[#006600]
          text-white
          mb-[1px]
        "
      >
        <p
          style="margin-bottom: 0px !important; padding-bottom: 0px !important;"
          v-for="sport in other_sportz"
          :key="sport.id"
          @click="setOtherSport(sport.id)"
          :class="{
            'bg-white text-black  rounded-md px-1 inline-flex items-center justify-center':
              activeSport == sport.id,
          }"
          class="text-center font-medium !pb-0"
        >
          {{ sport.name }}
        </p>
      </div>
      <div class="my-.5 bg-[#006600]">
        <div class="w-full flex justify-between px-2 py-3">
          <span
            v-for="(day, i) in days"
            :key="i"
            @click="setOtherActiveDate(day)"
            :class="{
              'bg-white text-black p-1 inline-flex items-center justify-center rounded-md':
                otherActiveDay == day,
            }"
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
          <thead class="border-b border-b-black font-semibold text-black">
            <tr>
              <th class="text-start pb-2 ml-1">Matches</th>
              <th class="text-start pb-2">Tips/Odds</th>
              <th class="text-start pb-2 mr-1">Score</th>
            </tr>
          </thead>
          <tbody>
            <tr
              class="even:bg-white odd:bg-[#F2F2F2] text-xs !px-3"
              v-for="game in formed_games"
              :key="game.id"
            >
              <td class="py-2 flex space-x-1 items-center">
                <div class="flex items-center space-x-1.5 ml-2">
                  <span>
                    <img
                      :src="`/img/emblem/${game.emblem.emblem}`"
                      alt=""
                      class="w-5 h-5"
                    />
                  </span>
                  <span>{{ game.country_code }}</span>
                  <span>{{ `(${game.league})` }}</span>
                </div>
                <div class="ml-3">
                  <div class="flex">
                    <span>
                      {{ game.vs }}
                    </span>
                  </div>
                </div>
              </td>
              <td class="py-2">
                <span
                  class="
                    inline-flex
                    items-center
                    justify-center
                    px-1
                    py-1
                    font-medium
                    text-[9px]
                    leading-none
                    text-white
                    bg-[#0D6EFD]
                    rounded
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
                    text-[9px]
                    leading-none
                    text-white
                    bg-[#DC3545]
                    rounded
                  "
                  >Odds: {{ game.odds }}</span
                >
              </td>
              <td class="py-2">{{ game.score }}</td>
            </tr>
          </tbody>
        </table>
        <div class="w-full   bg-[#006600] text-white">
          <p class="text-center text-xs">Sportverified</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import moment from "moment";
export default {
  methods: {
    setOtherSport(id){
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