<template>
    <div class="p-2 max-w-5xl  mx-auto">
        <div class="max-w-2xl mx-auto">
            <div class="flex items-stretch gap-2 ">
                <div @click="setStep(i)" v-for="(step, i) in totalSteps" :key="i"
                    class=" cursor-pointer h-2 mt-2 mb-5 w-full rounded text-green-500" style="border: 1px solid;"
                    :class="{ 'bg-green-500 ': step - 1 <= currentStep }"></div>
            </div>
        </div>

        <div v-show="currentStep === 0">
            <h1 class="text-green-700  my-5 text-xl md:text-3xl italic text-center lg:text-start font-bold uppercase">
                Select payment option
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2 md:gap-5 place-content-center ">
                <div @click="selectPaymentOption(option.value)"
                    class="cursor-pointer transition ease-out hover:scale-105" v-for="(option, i) in ng_payment_options"
                    :key="i">
                    <img :src="option.image" alt="" class="object-cover h-[300px]">
                    <div class="w-full bg-red-600 flex items-center justify-center  ">
                        <p class="text-white font-bold text-lg">{{ option.name }}</p>
                    </div>

                </div>
            </div>

        </div>
        <!-- <div v-show="currentStep === 1 &&  selectCard === true">
            <h1 class="text-green-700  mb-5 text-3xl italic text-center lg:text-start font-bold uppercase">
                Select payment method
            </h1>
            <div class="flex justify-center place-content-center ">
                <div @click="selectPaymentMethod(option.value)"
                    class="flex flex-col items-center justify-center cursor-pointer transition ease-out hover:scale-105 p-10"
                    v-for="(option, i) in ng_payment_methods" :key="i">
                    <img :src="option.image" alt="" class="object-cover h-[250px]">
                  

                    <div class="w-full bg-red-600 flex items-center justify-center h-8 ">
                        <p class="text-white font-bold text-lg">{{ option.name }}</p>
                    </div>

                </div>
            </div>

        </div> -->


        <div v-show="currentStep === 1 && selectCard === false">

            <h1 class="text-green-700  mb-5 text-3xl italic text-center lg:text-start font-bold uppercase">
                Select Pricing Plan
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="border border-black" v-for="plan in f_plans" :key="plan.id">
                    <div class="w-full bg-green-700 text-white h-8 flex items-center justify-center">
                        <h2 class="text-center font-bold text-xl">
                            {{ plan.name }}
                        </h2>
                    </div>
                    <div class="p-2" v-html="plan.content"></div>
                    <br>
                    <ul class="p-2 flex flex-col space-y-1 items-start">
                        <button @click="selectPlan(plan, 'w')" v-if="plan.sms_plan === 1">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{ plan.n_weekly_f
                                    }} -
                                    Weekly</b>
                            </li>
                        </button>
                        <button @click="selectPlan(plan, 'm')">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{
                                            plan.k_per_month_f
                                    }} -
                                    Monthly</b></li>
                        </button>
                        <button @click="selectPlan(plan, '6m')" v-if="plan.id != 6">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{
                                            plan.k_per_6months_f
                                    }}
                                    - 6
                                    Months</b></li>
                        </button>
                        <button @click="selectPlan(plan, 'y')" v-if="plan.id != 6">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{
                                            plan.k_per_year_f
                                    }} -
                                    1
                                    Year</b></li>
                        </button>
                    </ul>

                    <br>
                </div>
            </div>
        </div>
        <div v-show="currentStep === 1 && selectCard === true">

            <h1 class="text-green-700  mb-5 text-3xl italic text-center lg:text-start font-bold uppercase">
                Select Pricing Plan
            </h1>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-2">
                <div class="border border-black" v-for="plan in f_plans" :key="plan.id">
                    <div class="w-full bg-green-700 text-white h-8 flex items-center justify-center">
                        <h2 class="text-center font-bold text-xl">
                            {{ plan.name }}
                        </h2>
                    </div>
                    <div class="p-2" v-html="plan.content"></div>
                    <br>
                    <ul class="p-2 flex flex-col space-y-1 items-start">
                        <button @click="selectPlan(plan, 'w')" v-if="plan.sms_plan === 1">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{ plan.n_weekly_f
                                    }} -
                                    Weekly</b>
                            </li>
                        </button>
                        <button @click="selectPlan(plan, 'm')">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{
                                            plan.k_per_month_f
                                    }} -
                                    Monthly</b></li>
                        </button>
                        <button @click="selectPlan(plan, '6m')" v-if="plan.id != 6">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{
                                            plan.k_per_6months_f
                                    }}
                                    - 6
                                    Months</b></li>
                        </button>
                        <button @click="selectPlan(plan, 'y')" v-if="plan.id != 6">
                            <li><span class="glyphicon glyphicon-ok "></span> &nbsp; <b
                                    class="cursor-pointer  hover:text-green-700 underline">{{
                                            plan.k_per_year_f
                                    }} -
                                    1
                                    Year</b></li>
                        </button>
                    </ul>

                    <br>
                </div>
            </div>
        </div>

        <div v-show="currentStep === 3 && payment_option === 0 && selectCard === true">
            <div class="w-full">


                <h1
                    style="font-size: 20px; dtext-align: center; font-family: arial black; font-style: italic; color: Green;">
                </h1>
                <div class="w-full" style="dheight: 300px; dborder:solid; border-width: thin; padding-top: 20px;">
                    <div class="w-full"
                        style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                        CONFIRM UPGRADE <span style="font-size: 15px;"></span></div>
                    <div class="w-full"
                        style="background-color: white; border:solid; border-width: thin;  border-top: none;   margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">


                        <ul style="text-align: left; font-size: 20px; font-weight: bold; font-family: calibri;">
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp;{{ selectedPlan.name }}</li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp; {{ getDurationText }}</li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp;<b id="email">{{ user.email }}</b>
                            </li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp; {{ getAmount.b }}</li>
                        </ul>
                        <!--</form>---->


                        <div class="w-full flex justify-center ">


                            <button
                                class="cursor-pointer w-[200px] my-3 py-2 rounded-full bg-green-700 text-white flex items-center justify-center"
                                @click="makePaymentFlutterWave(this.selectedPlan, this.selectedDuration, this.payment_method)">
                                <p>Click to Pay</p>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div v-show="currentStep === 3 && payment_option === 1 && selectCard === true">
            <div class="w-full">


                <h1
                    style="font-size: 20px; dtext-align: center; font-family: arial black; font-style: italic; color: Green;">
                </h1>
                <div class="w-full" style="dheight: 300px; dborder:solid; border-width: thin; padding-top: 20px;">
                    <div class="w-full"
                        style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                        CONFIRM UPGRADE <span style="font-size: 15px;"></span></div>
                    <div class="w-full"
                        style="background-color: white; border:solid; border-width: thin;  border-top: none;   margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">


                        <ul style="text-align: left; font-size: 20px; font-weight: bold; font-family: calibri;">
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp;{{ selectedPlan.name }}</li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp; {{ getDurationText }}</li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp;<b id="email">{{ user.email }}</b>
                            </li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp; {{ getAmount.b }}</li>
                        </ul>
                        <!--</form>---->
                        <div class="flex w-full items-center justify-center p-1">
                            <qrcode-vue :value="value" :size="size" level="H" />
                        </div>


                        <div class=" mx-auto p-2 md:px-20">

                            <div
                                class="form-control wizard-form-control flex flex-col md:flex-row items-center space-x-2  testing-code md:mx-[18px] mb-[10px]">
                                <span class="title">{{crypto_name}} Wallet Address: </span>
                                <span class="code text-green-600">{{ " " }}{{ value }}</span>
                                <span
                                    class="w-[140px] h-8 cursor-pointer hover:scale-105 transform rounded-md bg-black flex items-center justify-center  btn btn-info text-white copy-btn ml-auto"
                                    @click.stop.prevent="copyTestingCode">
                                    Copy
                                </span>
                                <input type="hidden" id="testing-code" :value="value">
                            </div>

                        </div>




                        <br />
                        <p class="text-sm md:text-lg" style="text-align: left; padding-left: 10px; font-weight: normal;">You can activate or
                            upgrade your {{ site_name }} account by making the appropriate payments in {{crypto_name}} to our wallet address as shown above.

                        </p>
                        <p class="text-sm md:text-lg"  style="text-align: left; padding-left: 10px; font-weight: normal; margin-bottom: 20px;">
                            After making payments, ensure you send your Name, Email address, Amount and Plan and to the
                            agent number: <b>{{ con_trans }}</b> or email: <b>{{email}} </b>to confirm your payment.
                            <br> Your {{ site_name }} account will be upgraded once payment has been confirmed.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <div v-show="currentStep === 3 && payment_option === 2 && selectCard === true">
            <div class="w-full">


                <h1
                    style="font-size: 20px; dtext-align: center; font-family: arial black; font-style: italic; color: Green;">
                </h1>
                <div class="w-full" style="dheight: 300px; dborder:solid; border-width: thin; padding-top: 20px;">
                    <div class="w-full"
                        style="background-color: green; height: 40px; margin-top: 30px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px; color: white;">
                        Continue Payment Process <span style="font-size: 15px;"></span></div>
                    <div class="w-full"
                        style="background-color: white; border:solid; border-width: thin;  border-top: none;   margin-top: 0px; padding: 4px; padding-top: 6px; text-align: center; font-weight: bold; font-size: 18px;">
                        <ul style="text-align: left; font-size: 20px; font-weight: 400; font-family: calibri;">
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp;{{ selectedPlan.name }}</li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp; {{ getDurationText }}</li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp;<b id="email">{{ user.email }}</b>
                            </li>
                            <li><span class="glyphicon glyphicon-ok"></span> &nbsp; {{ getAmount.b }}</li>
                        </ul>
                        <br />
                        <p style="text-align: left; padding-left: 10px; font-weight: normal;">You can activate or
                            upgrade your {{ site_name }} account by making the appropriate payments to our East Africa
                            Agent via Mpesa.

                            <br> <b> MPESA Name : {{ mpesa_name }} </b>

                            <br> <b> Account Number : {{ mpesa_acct }} </b>

                        </p>
                        <p style="text-align: left; padding-left: 10px; font-weight: normal; margin-bottom: 20px;">
                            After making payments, ensure you send your Name, Email address, Amount and Plan and to the
                            agent number {{ con_trans }} to confirm your payment.
                            <br> Your {{ site_name }} account will be upgraded once payment has been confirmed.
                        </p>






                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import paystack from "vue3-paystack";
import QrcodeVue from 'qrcode.vue'
import { toRaw } from "vue"




export default {
    props: ['plans', 'subs'],

    components: {
        QrcodeVue

    },
    created() {
        this.user = window.user;
        this.mpesa_name = window.mpesa_name;
        this.mpesa_acct = window.mpesa_acct;
        this.con_trans = window.con_trans;
        this.site_name = window.app_name;
        this.email = window.email;
        this.crypto_name = window.crypto_name;
        this.value = window.wallet_address;
    },
    data() {
        return {
            crypto_name : "",
            email : "",
            value: '##############################',
            size: 250,
            mpesa_name: "",
            mpesa_acct: "",
            con_trans: "",
            site_name: "",
            publicKey: "pk_test_9da36d88c1d36b3beaab17754e6a92d2ad64ccaf",
            user: null,
            selectedPlan: {},
            selectedDuration: "",
            totalSteps: 2,
            selectCard: false,
            currentStep: 0,
            payment_option: null,
            payment_method: 0,
            //   subs: [],
            //   plans: [],

            ng_payment_options: [
                {
                    name: "Pay with Debit/Credit Card",
                    image: "/img/guy_card2.jpg",
                    value: 0
                },
                {
                    name: "Pay with Crypto",
                    image: "/img/crypto.jpg",
                    value: 1
                },
                {
                    name: "Pay with MPESA",
                    image: "/img/mpesa.png",
                    value: 2
                }
            ],
            ng_payment_methods: [
                {
                    name: "Pay using Flutterwave",
                    image: "/img/guy_card2.jpg",
                    value: 0
                },


            ]
        }
    },
    computed: {
        f_plans() {
            return this.plans
                .filter(plan => plan.id !== 5)

        },
        reference() {
            let text = "";
            let possible =
                "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (let i = 0; i < 10; i++)
                text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
        },
        getDurationText: function () {
            if (this.selectedDuration === "w") {
                return "1 week";
            }
            else if (this.selectedDuration === "m") {
                return "1 month"
            }
            else if (this.selectedDuration === "6m") {
                return "6 months"
            } else if (this.selectedDuration === "y") {
                return "1 year"
            }
            else {
                return ""
            }
        },
        getAmount: function () {
            if (this.selectedDuration === "w") {
                return {
                    a: this.selectedPlan.n_weekly,
                    b: this.selectedPlan.n_weekly_f
                };
            }
            else if (this.selectedDuration === "m") {
                return {
                    a: this.selectedPlan.k_per_month,
                    b: this.selectedPlan.k_per_month_f
                };
            }
            else if (this.selectedDuration === "6m") {
                return {
                    a: this.selectedPlan.k_per_6months,
                    b: this.selectedPlan.k_per_6months_f
                };
            } else if (this.selectedDuration === "y") {
                return {
                    a: this.selectedPlan.k_per_year,
                    b: this.selectedPlan.k_per_year_f
                };
            }
            else {
                return 0
            }
        },
    },

    methods: {
        copyTestingCode() {
            let testingCodeToCopy = document.querySelector('#testing-code')
            testingCodeToCopy.setAttribute('type', 'text')    // 不是 hidden 才能複製
            testingCodeToCopy.select()

            try {
                var successful = document.execCommand('copy');
                var msg = successful ? 'successfully' : 'unsuccessful';
                alert('Wallet Address was copied ' + msg);
            } catch (err) {
                alert('Oops, unable to copy');
            }

            /* unselect the range */
            testingCodeToCopy.setAttribute('type', 'hidden')
            window.getSelection().removeAllRanges()
        },
    
    onSuccessfulPayment: function (response) {
        this.sendUpgradeRequest(response.reference);
    },
    onCancelledPayment: function () {
        console.log("Payment cancelled by user");
    },


    makePaymentFlutterWave(selectedPlan, selectedDuration, payment_method) {
        this.$launchFlutterwave({
            tx_ref: this.reference,
            amount: this.getAmount.a,
            currency: this.plans[0].currency,
            country: "NG",
            payment_options: 'card,mobilemoney,ussd',
            customer: {
                email: this.user.email,
                phonenumber: this.user.mobile,
                name: this.user.name,
            },
            callback: function (data,) {
                // specified callback function
                const body = {
                    plan: toRaw(selectedPlan),
                    duration: selectedDuration,
                    payment_method: payment_method,
                    transactionId: data.transaction_id,
                    amount: data.amount,

                };

                axios.post(`/api/upgrade-package/${window.user.id}`, body).then((res) => {
                    if (res.data.status == "success") {
                        modal.close();
                        window.location.assign('/dashboard')
                    } else {
                        alert("Something went wrong. Please try again")

                        window.location.reload
                    }
                }).catch((err) => {
                    console.log(err);
                })
            },
            customizations: {
                title: this.site_name,
                description: 'Upgrade Plan',

            }
        })
    },
    sendUpgradeRequest(transactionId) {
        const data = {
            plan: this.selectedPlan,
            duration: this.selectedDuration,
            payment_method: this.payment_method,
            transactionId: transactionId,
            amount: this.getAmount.a,
        };

        axios.post(`/api/upgrade-package/${window.user.id}`, data).then((res) => {
            if (res.data.status == "success") {
                window.location.assign('/dashboard')
            } else {
                alert("Something went wrong. Please try again")
                window.location.reload
            }
        }).catch((err) => {
            console.log(err);
        })
    },
    selectPlan(plan, type) {
        this.selectedPlan = plan;
        this.selectedDuration = type;
        this.setStep(3);
        window.scrollTo(0, 0);
    },
    setStep(step) {
        if (step != 2 && this.payment_option !== null) {
            this.currentStep = step;
        }

    },
    // getPlans() {
    //   axios
    //     .get('/api/plans')
    //     .then((res) => {
    //       // assign state users with response data
    //       this.plans = res.data.data;

    //     })
    //     .catch((error) => {
    //       console.log(error.res.data);
    //     });
    // },
    // getSubs() {
    //   axios
    //     .get(`/api/subs/${window.user.id}`)
    //     .then((res) => {
    //       // assign state users with response data
    //       this.subs = res.data.data;
    //       console.log(res)

    //     })
    //     .catch((error) => {
    //       console.log(error.res.data);
    //     });
    // },
    previousStep() {
        this.currentStep--;
    },
    nextStep() {
        setTimeout(() => {
            this.currentStep++;
        }, 500);

    },
    selectPaymentOption(value) {
        if (value === 0 || 1) {
            this.payment_option = value;
            this.selectCard = true;
            this.nextStep();

        } else {
            this.payment_option = value;
            this.selectCard = false;
            this.payment_method = null;
            this.nextStep();
        }
    },
    selectPaymentMethod(value) {
        this.payment_method = value;
        this.selectCard = true;
        this.nextStep();
    }


},


}
</script>

<style>
</style>