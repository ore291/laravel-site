<template>
  <div class="grid grid-cols-1 md:grid-cols-2 md:justify-center gap-3 gap-y-5">
    <div class="w-full">
      <div class="w-full bg-black text-white">
        <p class="text-center font-bold text-xl mt-2 mb-[5px]">
          Free Soccer Predictions
        </p>
      </div>
      <div class="bg-black">
        <div class="w-full flex justify-between px-2 py-3">
          <span v-for="(day, i) in days" :key="i" @click="setActiveDate(day)"
            :class="{ 'bg-white   !text-black p-1 rounded-md': activeDay == day }" class="
              text-white
              font-bold
              cursor-pointer
              
               text-[15px]
               leading-[1.3]
               text-center
            ">
            {{ addDays(day) }}
          </span>
          <!-- first:hidden first:md:block
              last:hidden last:md:block -->
        </div>
      </div>
      <div>
        <table class="table-auto w-full">
          <thead class="border-b border-b-black font-semibold text-black">
            <tr>
              <th class="text-start  text-xs md:text-sm  pb-2 ml-1">Matches</th>
              <th class="text-start  text-xs md:text-sm pb-2">Tips/Odds</th>
              <th class="text-start  text-xs md:text-sm pb-2 ">Score</th>
              <th class="text-start  text-xs md:text-sm pb-2 ">&nbsp;</th>
            </tr>
          </thead>
          <div class="w-full p-2" v-if="loading">
            <p>Loading...</p>
          </div>
          <div class=" text-xs md:text-sm  p-2 text-red-600" v-if="!loading && predictions.length < 1">
            <p>No Predictions available for the selected Date</p>
          </div>
          <tbody v-if="!loading && predictions.length > 0">
            <tr class="even:bg-white odd:bg-[#F2F2F2] text-xs !px-3" v-for="game in predictions" :key="game.id">
              <td class="py-2 flex space-x-1 items-center">
                <div class="flex items-center space-x-1.5 ml-2">
                  <span>
                    <img :src="`/svg/${game.logo}`" alt="" class="w-5 h-5" />
                  </span>
                  <span>{{ game.league.country.substring(0, 3).toUpperCase() }}</span>
                  <span>{{ `(${game.league.name})` }}</span>
                </div>
                <div class="ml-3">
                  <div class="flex">
                    <span>
                      {{ `${game.team_a} vs ${game.team_b}` }}
                    </span>
                  </div>
                </div>
              </td>
              <td class="py-2 text-sm">
                <span class="
                  
                    
                   
                    font-bold
                    uppercase
                  
                    leading-none
                   
                   
                  "> {{ game.tips }}</span>
                <span>/</span>
                <span class="
                   
                    font-bold
              
                    leading-none
               
                  "> {{ game.odds }}</span>
                <!-- <span class="
                    inline-flex
                    items-center
                    justify-center
                    px-1
                    py-1
                    font-medium
                  
                    leading-none
                    text-white
                    bg-[#0D6EFD]
                    rounded
                  ">Tips : {{ game.tips }}</span>
                <span class="
                    ml-1
                    inline-flex
                    items-center
                    justify-center
                    px-1
                    py-1
                    font-medium
              
                    leading-none
                    text-white
                    bg-[#DC3545]
                    rounded
                  ">Odds: {{ game.odds }}</span> -->
              </td>
              <td class="py-2">{{ `${game.score_a} - ${game.score_b}` }}</td>
              <td class="py-2">
                <span v-if="game.status == 0" class="px-2">


                  <i class="fa fa-question" aria-hidden="true"></i>
                </span>
                <span v-else-if="game.status == 1">

                  <i class="fa fa-check-circle text-green-700"></i>



                </span>
                <span v-else-if="game.status == 2">

                  <i class="fa fa-times-circle text-red-500" style="color:red;"></i>




                </span>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="w-full bg-black text-white">
          <p class="text-center  text-lg font-bold">{{name}}</p>
        </div>
      </div>
    </div>
    <div class="w-full">
      <div class="w-full bg-secBg text-white">
        <p class="text-center font-bold text-lg text-secText mt-2 mb-[1px]">
          Other Sport Predictions
        </p>
      </div>
      <div class="
          w-full
          flex
          items-center
          justify-around
          bg-secBg
          text-white
          mb-[1px]
        ">
        <p style="margin-bottom: 0px !important; padding-bottom: 0px !important;" v-for="sport in other_sportz"
          :key="sport.id" @click="setOtherSport(sport.id)" :class="{
            'bg-white text-black  rounded-md px-1 inline-flex items-center justify-center':
              activeSport == sport.id,
          }" class="text-center font-medium !pb-0">
          {{ sport.name }}
        </p>
      </div>
      <div class="my-.5 bg-secBg">
        <div class="w-full flex justify-between px-2 py-3">
          <span v-for="(day, i) in days" :key="i" @click="setOtherActiveDate(day)" :class="{
            'bg-white !text-black p-1 inline-flex items-center justify-center rounded-md':
              otherActiveDay == day,
          }" class="
              text-white
              font-bold
              cursor-pointer
            
              text-[15px]
               leading-[1.3]
               text-center
            ">
            {{ addDays(day) }}
          </span>
        </div>
      </div>
      <div>
        <table class="table-auto w-full">
          <thead class="border-b border-b-black font-semibold text-black">
            <tr>
              <th class="text-start  text-xs md:text-sm pb-2 ml-1">Matches</th>
              <th class="text-start  text-xs md:text-sm pb-2">Tips/Odds</th>
              <th class="text-start  text-xs md:text-sm pb-2 ">Score</th>
              <th class="text-start  text-xs md:text-sm pb-2 ">&nbsp;</th>
            </tr>
          </thead>
          <div class="w-full p-2" v-if="o_loading">
            <p>Loading...</p>
          </div>
          <div class="w-full text-xs md:text-sm p-2 text-red-600" v-if="!o_loading && other_predictions.length < 1">
            <p>No Predictions available for the selected Date</p>
          </div>
          <tbody v-if="!o_loading && other_predictions.length > 0">
            <tr class="even:bg-white odd:bg-[#F2F2F2] text-xs !px-3" v-for="game in other_predictions" :key="game.id">
              <td class="py-2 flex space-x-1 items-center">
                <div class="flex items-center space-x-1.5 ml-2">
                  <span>

                    <img v-if="game.sport_name === 'basketball'" src="/img/Basketball-1.png" alt="" class="w-5 h-5" />
                    <img v-if="game.sport_name === 'tennis'" src="/img/Tennis-1.png" alt="" class="w-5 h-5" />
                    <img v-if="game.sport_name === 'boxing'" src="/img/boxing.png" alt="" class="w-5 h-5" />
                    <img v-if="game.sport_name === 'ice hockey'" src="/img/Ice-Hockey-1.png" alt="" class="w-5 h-5" />
                  </span>
                  <!-- <span>{{ game.league.country.substring(0, 3).toUpperCase() }}</span> -->
                  <span>{{ `(${game.league_name})` }}</span>
                </div>
                <div class="ml-3">
                  <div class="flex">
                    <span>
                      {{ `${game.team_a} vs ${game.team_b}` }}
                    </span>
                  </div>
                </div>
              </td>
              <td class="py-2 text-sm">
                <span class="
                    
                    
                  
                    font-bold
                    uppercase
                  
                    leading-none
                   
                   
                  "> {{ game.tips }}</span>
                <span>/</span>
                <span class="
                   
                   
                   
                    font-bold
              
                    leading-none
                    
                   
                  "> {{ game.odds }}</span>
              </td>
              <td class="py-2">{{ `${game.score_a} - ${game.score_b}` }}</td>
              <td class="py-2"> <span v-if="game.status == 0" class="px-2">


                  <i class="fa fa-question" aria-hidden="true"></i>
                </span>
                <span v-else-if="game.status == 1">

                  <i class="fa fa-check-circle text-green-700"></i>



                </span>
                <span v-else-if="game.status == 2">

                  <i class="fa fa-times-circle text-red-500" style="color:red;"></i>



                </span>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="w-full   bg-secBg text-secText">
          <p class="text-center text-lg font-bold">{{name}}</p>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import moment from "moment";
import axios from "axios";
export default {


  created() {
    this.name = window.name;
    this.getFreePredictions(1, 0);
    if (localStorage.getItem('other_sport') === null) {
      localStorage.setItem('other_sport', 2)
      this.getFreeOtherPredictions(2, 0)
    } else {
      this.getFreeOtherPredictions(parseInt(localStorage.getItem('other_sport')), 0)
    }

  },
  methods: {
    setOtherSport(id) {
      this.activeSport = id;
      localStorage.setItem('other_sport', this.other_sportz[id].sport)
      this.getFreeOtherPredictions(this.other_sportz[id].sport, this.otherActiveDay)
    },
    getFreePredictions(id, days) {
      this.loading = true;
      axios.post(`/api/predictions/${id}`, {
        days: days,
        limit: 7
      }).then(res => {
        if (res.status === 200) {
          this.loading = false;
          this.predictions = res.data.data;
        }

      }).catch((err) => {
        console.log(err)
      })
    },
    getFreeOtherPredictions(id, days) {
      this.o_loading = true;
      axios.post(`/api/other_sports/${id}`, {
        days: days,
        limit: 7
      }).then(res => {
        if (res.status === 200) {
          this.o_loading = false;
          this.other_predictions = res.data.data;
        }

      }).catch((err) => {
        console.log(err)
      })
    },
    addDays(n) {
      if (n === 0) {
        return `TODAY ${moment().format("MMM Do, Y")}`;
      } else if (n === 1) {
        return `TOMMOROW ${moment().add(n, "days").format("MMM Do, Y")}`;
      } else {
        return `YESTERDAY ${moment().add(n, "days").format("MMM Do, Y")}`;
      }
    },
    setActiveDate(n) {
      this.activeDay = n;
      this.getFreePredictions(1, n)
    },
    setOtherActiveDate(n) {
      this.otherActiveDay = n;
      this.getFreeOtherPredictions(parseInt(localStorage.getItem('other_sport')), n)
    },


  },
  computed: {

  },
  data() {
    return {
      name : "",
      predictions: [],
      other_predictions: [],
      loading: false,
      o_loading: false,
      activeDay: 0,
      activeSport: 0,
      otherActiveDay: 0,
      other_sportz: [
        {
          id: 0,
          name: "BasketBall",
          sport: 2
        },
        {
          id: 1,
          name: "Tennis",
          sport: 3
        },
        {
          id: 2,
          name: "Boxing",
          sport: 4
        },
        {
          id: 3,
          name: "Hockey",
          sport: 5
        },
      ],
      days: [-1, 0, 1],


    };
  },
};
</script>