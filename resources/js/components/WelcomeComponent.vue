<template>
        <div>
            

            <loading :active.sync="isLoading" :color="'#359bd4'" :height="80" :width="80" :opacity="0.7"></loading>

            <modal-nudge v-if="nudge.id == 3"></modal-nudge>

            <checkout-nudge v-else-if="nudge.id == 2"></checkout-nudge>
            
            <visual-nudge v-else-if="nudge.id == 1"></visual-nudge>

            <div class="reveal large" id="welcome-modal" data-reveal data-close-on-click="false">
                <div class="grid-x movie-ticket">
                    <div class="cell medium-9 ticket-right">
                        <h2 class="title-bar"><strong>Wold Cinemas</strong></h2>

                        <div class="content-wrapper text-center">
                            <h2 class="text-center">Instructions</h2>
                            <p class="text-center">You have just booked 2 ticket to watch</p> 
                            <p class="text-center"><strong>AVENGERS ENDGAME</strong></p> 
                            <p class="text-center">in your preferred Cinema Theatre, now you are prompted to select the snacks you would like to add to your cart (if any) to accompany your tickets.</p>
                            
                            <form v-on:submit.prevent="initProject()" data-abide novalidate id="email-form">
                                <div class="grid-x grid-padding-x" v-if="emailField">
                                    <div class="small-2 cell">
                                      <label for="middle-label" class="text-right middle">E-mail</label>
                                    </div>
                                    <div class="small-10 cell">
                                      <input type="email" id="middle-label" placeholder="example@email.com" v-model="email" required aria-errormessage="errorMessage" pattern="email">
                                      <span class="form-error" id="errorMessage">
                                        I'm required!
                                      </span>
                                    </div>
                                </div>
                            </form>

                            <a href="#" class="button round-icon secondary-color" @click.prevent="initProject()">Begin</a>
                        </div>
                    </div>
                    <div class="cell medium-3 ticket-left">
                        <h2 class="title-bar text-center"><i class="fas fa-barcode"></i></h2>

                        <div class="content-wrapper text-center">
                            <p><span class="seat">28</span></p>
                            <p><span>seat</span></p>

                            <p class="barcode"><i class="fas fa-barcode"></i></p>
                        </div>

                        <button v-if="!emailField" class="close-button" data-close aria-label="Close modal" type="button">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            </div>

            <vue-snotify></vue-snotify>

        </div>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    import Snotify from 'vue-snotify';
    import ModalNudge from './ModalNudge.vue';
    import CheckoutNudge from './CheckoutNudge.vue';
    import VisualNudge from './VisualNudge.vue';

    import 'vue-loading-overlay/dist/vue-loading.css';

    Vue.use(Snotify);

    Vue.component('modal-nudge', ModalNudge);
    Vue.component('checkout-nudge', CheckoutNudge);
    Vue.component('visual-nudge', VisualNudge);

    export default {
        components: { 
            Loading 
        },

        mounted() {
            this.email = this.attremail;

            $(this.$el).foundation();
            $("#welcome-modal").foundation('open');

            // Get all products
            var $this = this;
                
            //get the slow-moving product
            axios.get('api/products/getslowmoving').then(function(response){

                $this.slowProduct = response.data;

                axios.get('api/nudges/getanudge').then(function(res){
                    // $this.nudge = res.data;

                    $this.nudge = { "id": 1, "name": "Visual products" };

                    
                });
            });
        },
        props: {
          attremail: {
                type: String,
                required: true
            },
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                nudge: [],
                slowProduct: {},
                isLoading: true,
                email: "",
                emailField: this.showEmailField(),
            }
        },
        methods: {
            initProject() {
                
                $('#email-form').on("formvalid.zf.abide", function(ev,frm) {
                    $('#welcome-modal').foundation('close');
                });

                $('#email-form').foundation('validateForm');
                
            },
            showEmailField() {
                var val = false;

                if (this.attremail == '') {
                    val = true;
                }
                return val;
            }
        },
    }
</script>
