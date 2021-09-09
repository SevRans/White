<template>
    <transition name="slide-fade">
        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">

                    <header class="modal-header">
                        <slot name="header">
                            Your question and answers not created!

                        </slot>
                    </header>

                    <section class="modal-body">
                        <slot name="body">
                            Your question and answers not created! You can go to
                            Test List
                            or you can create  question and answers again . Please Check your input data.
                        </slot>
                    </section>

                    <div class="modal-footer">

                        <button type="button" class="btn-warning" @click="direct">
                            Test List
                        </button>
                        <button type="button" class="btn-green" @click="close">
                            Close Modal
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </transition>
</template>

<script>

export default {
    name: "ModalComponent",
    data() {
        return {
            show: false,
        }
    },
    mounted() {

    },
    methods: {
        close() {
            this.$emit('close')
        },
        direct() {
            location.href = '/testVueJS'
        }
    }
}

</script>

<style scoped>
.modal {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    display: flex;
    justify-content: center;
    align-items: center;
    font-width: bold;
    border-radius: 10px;
}

.modal-dialog {
    border-radius: 10px;
    background: #FFFFFF;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
    display: flex;
    flex-direction: column;
}


.modal-footer {
    padding: 15px;
    display: flex;
}

.modal-header {
    position: relative;
    border-bottom: 1px solid #eeeeee;
    color: #4AAE9B;
    justify-content: space-between;
}

.modal-footer {
    border-top: 1px solid #eeeeee;
    /*flex-direction: column;*/
    justify-content: flex-end;
    position: relative;
}

.modal-body {
    position: relative;
    padding: 20px 10px;
}


.btn-green {
    color: white;
    background: red;
    border: 1px solid #4AAE9B;
    border-radius: 10px;
}

.btn-warning {
    background-color: forestgreen;
    color: white;
    border: 1px solid #4AAE9B;
    border-radius: 10px;
}

.slide-fade-enter-active {
    /*transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);*/
    animation: bounce-in .8s;
}

.slide-fade-leave-active {
    /*transition: all .8s cubic-bezier(1.0, 0.5, 0.8, 1.0);*/
    animation: bounce-in .8s reverse;
}

/*.slide-fade-enter, .slide-fade-leave-to*/
    /* .slide-fade-leave-active below version 2.1.8 */
/*{*/
/*    transform: translateX(10px);*/
/*    opacity: 0;*/
/*}*/
@keyframes bounce-in {
    0% {
        transform: scale(0);
    }
    50% {
        transform: scale(1.5);
    }
    100% {
        transform: scale(1);
    }
}

</style>
