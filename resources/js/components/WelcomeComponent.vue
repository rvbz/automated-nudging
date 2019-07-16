<template>
        <div>
            

            <loading :active.sync="isLoading" :color="'#359bd4'" :height="80" :width="80" :opacity="0.7"></loading>
            
            {{ nudge }}
    
            <modal-nudge v-if="nudge.id == 3" :slowProduct="slowProduct"></modal-nudge>

            <checkout-nudge v-else-if="nudge.id == 2" :slowProduct="slowProduct"></checkout-nudge>
            
            <visual-nudge v-else></visual-nudge>
        </div>
</template>

<script>
    import Loading from 'vue-loading-overlay';
    import ModalNudge from './ModalNudge.vue';
    import CheckoutNudge from './CheckoutNudge.vue';
    import VisualNudge from './VisualNudge.vue';

    import 'vue-loading-overlay/dist/vue-loading.css';

    Vue.component('modal-nudge', ModalNudge);
    Vue.component('checkout-nudge', CheckoutNudge);
    Vue.component('visual-nudge', VisualNudge);

    export default {
        components: { 
            Loading 
        },

        mounted() {

            // Get all products
            var $this = this;
            axios.get('api/nudges/getanudge').then(function(res){
                // $this.nudge = res.data;

                $this.nudge = { "id": 1, "name": "Visual products" };
            });
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                nudge: [],
                slowProduct: {"id":5,"name":"Candies","price":"4.00"},
                isLoading: true,
            }
        },
        methods: {
            
        },
    }
</script>
