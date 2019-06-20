<template>
    <div class="modale_wrapper">
        <div class="modale">
            <div class="close" @click="close"><img src="../../../images/close.svg" alt="close"></div>
            <h3 v-if="!answered">{{infos.question}}</h3>
            <div v-if="!answered" class="choices">
                <input v-model="userAnswer" placeholder="Votre réponse..." type="text" name="text" id="text">
                <input @click="submit" type="submit" value="Répondre">
                <!-- <button class="choice"></button>
                <button class="choice"></button>
                <button class="choice"></button> -->
            </div>
            <div v-else class="answer">
                La réponse réelle est {{ infos.reponse }}. <br>
                <span v-if="goodAnswer">
                    Vous vous êtes de trompés de {{ Math.abs(parseInt(infos.reponse) - parseInt(userAnswer)) }}. <br>
                    Vous faites mieux que {{ percentage }}% des participants au questionnaire.
                </span>
                <input @click="close" type="submit" value="Suivant">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data () {
        return {
            userAnswer: '',
            percentage: 80,
            answered: false
        }
    },
    props: {
        infos: Object
    },
    computed: {
        goodAnswer () {
            return !isNaN(parseInt(this.userAnswer))
        }
    },
    methods: {
        submit () {
            console.log(this.userAnswer)
            this.answered = !this.answered
        },
        close () {
            this.$el.style.display = 'none'
            this.$emit('close')
        }
    }
}
</script>

<style lang="stylus" scoped>

.close
    margin-left auto
    cursor pointer

.modale_wrapper
    text-emphasis none
    position absolute
    width 100%

.modale
    width 740px
    margin auto
    background white
    display flex
    justify-content space-around
    align-items center
    flex-direction column
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    border-radius: 4px;
    box-sizing border-box
    padding 40px
    z-index: 10;
    position: relative;

    h3
        font-family: Rubik;
        font-style: normal;
        font-weight: 500;
        font-size: 34px;
        line-height: 40px;
        text-align: center;
        color: #333333;
        margin-bottom 50px

    .answer
        flex-direction column
        align-items flex-start
        font-family: Rubik;
        font-style: normal;
        font-weight: 300;
        font-size: 16px;
        line-height: 19px;
        color: #333333;

        span
            margin-top 30px

        input
            margin-top 50px

    .choices, .answer
        display flex
        align-items center
        justify-content space-around
        width 100%

        input[type="text"]
            border: 1px solid #067CFA;
            border-radius: 4px;
            padding 10px
        
        input[type="submit"]
            background: #067CFA;
            border-radius: 4px;
            color white
            cursor pointer

        input
            box-sizing: border-box;
            font-family: Roboto;
            width 195px
            height 40px
            font-style: normal;
            font-weight: normal;
            font-size: 14px;
            line-height: 16px;

</style>
