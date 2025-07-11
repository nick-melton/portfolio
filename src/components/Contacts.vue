<template>
    <div id="contacts-section" class="main-section">
        <div class="greeting-section">
            <div class="md-layout md-alignment-center-left greeting-header">
                <div class="md-display-3">Any offers?</div>
                <div class="icon-block">
                    <md-icon class="md-size-2x greeting-icon">handshake</md-icon>
                </div>
            </div>
            <div id="animation-4-container"></div>
        </div>
        <div class="contacts-block">
            <div class="md-display-2">Then please contact me</div>
            <md-content class="md-subheading">
                <div class="content">
                    Email: <a href="mailto:nick.melton9470@gmail.com">nick.melton9470@gmail.com</a>
                    <br>
                    <br>
                    Phone: <a href="tel:+1 236-339-7222">+1 236-339-7222</a>
                    <br>
                    <br>
                    LinkedIn: <a href="https://www.linkedin.com/in/nick-melton12">https://www.linkedin.com/in/nick-melton12</a>
		    <br>
		    <br>
		    GitHub: <a href="https://github.com/nick-melton">https://github.com/nick-melton</a>
                </div>
            </md-content>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .greeting-icon {
        margin-left: 20px;

        @media (max-width: 1000px) {
            margin: 0;
        }
    }

    .greeting-header {
        width: fit-content;
    }

    .send-btn {
        margin-top: 80px;
    }

    .md-content {
        width: 80%;
    }

    .content {
        padding: 20px;
        width: 100%;
    }

    .main-section {
        display: flex;
        flex-direction: row;
        margin-top: 100px;

        @media (max-width: 1000px) {
            flex-direction: column;
            margin-top: 80px;
        }
    }

    .main-section > * {
        width: 50%;

        @media (max-width: 1000px) {
            width: 100%;
        }
    }

    @media (max-width: 1000px) {
        .icon-block {
            display: flex;
            justify-content: center;
            width: 100%;
            margin-top: 20px;
        }

        .contacts-block {
            padding: 0 40px;
        }
    }

    .greeting-section {
        padding-left: 10%;

        @media (max-width: 1000px) {
            padding: 0 40px;
        }
    }

    .md-content {
        margin-top: 40px;
        margin-right: 20%;
        padding: 20px;
        display: inline-flex;
        justify-content: center;
        align-items: center;

        @media (max-width: 1000px) {
            width: 100%;
        }
    }

    #animation-4-container {
        margin-top: 40px;
        width: 300px;

        @media (max-width: 1000px) {
            margin: 80px 0;
        }
    }
</style>

<script>
    import bodymovin from 'lottie-web'

    export default {
        name: 'Contacts',
        mounted() {
            this.createAnimation('animation-4-container', '/animation_4.json');
        },
        methods: {
            createAnimation(id, path) {
                bodymovin.loadAnimation({
                    container: document.getElementById(id),
                    path: path,
                    renderer: 'svg',
                    loop: true,
                    autoplay: true,
                    name: "animation",
                });
            }
        }
    }
</script>
