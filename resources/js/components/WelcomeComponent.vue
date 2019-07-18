<template>
        <div>
            

            <loading :active.sync="isLoading" :color="'#359bd4'" :height="80" :width="80" :opacity="0.7"></loading>
            
            {{ nudge }}
            {{ slowProduct }}
    
            <modal-nudge v-if="nudge.id == 3"></modal-nudge>

            <checkout-nudge v-else-if="nudge.id == 2"></checkout-nudge>
            
            <visual-nudge v-else-if="nudge.id == 1"></visual-nudge>
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
                
            //get the slow-moving product
            axios.get('api/products/getslowmoving').then(function(response){

                $this.slowProduct = response.data;

                axios.get('api/nudges/getanudge').then(function(res){
                    $this.nudge = res.data;

                    // $this.nudge = { "id": 3, "name": "Discount" };

                    
                });
            });
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                nudge: [],
                slowProduct: {},
                isLoading: true,
            }
        },
        methods: {
            
        },
    }
</script>
