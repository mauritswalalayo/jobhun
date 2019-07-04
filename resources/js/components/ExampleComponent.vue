<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <input type="text" v-model="bil1">
                        +
                        <input type="text" v-model="bil2">
                        =
                        {{bil3}}

                        <button @click="hitung">Hitung</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return{
                bil1 :'',
                bil2 :'',
                bil3:''
            }
        },
        methods:{
            hitung: function(){
                if(this.bil1 == ''|| this.bil2 == ''){
                    alert("Sorry data kosong");
                } else
                {
                    this.bil3=parseInt(this.bil2)+parseInt(this.bil1);
                }
            }
        },
        computed:{
            bil4:function(){
                return parseInt(this.bil2)+parseInt(this.bil1);
            }
        }
    }
</script>
