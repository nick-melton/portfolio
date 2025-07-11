<template>
    <div id="info-section" class="main-section">
        <div class="greeting-section">
            <div class="md-layout md-alignment-center-left fit-content">
                <div class="md-display-3">Hello</div>
                <md-icon class="md-size-2x m-l-10">waving_hand</md-icon>
            </div>
            <div class="monitor-block">
                <img class="monitor" src="../assets/monitor.png" alt="">
                <div class="portrait-block">
                    <img ref="noise" class="noise" src="../assets/noise.jpg" alt="">
                    <img class="portrait" src="../assets/portrait.png" alt="">
                </div>
            </div>
        </div>
        <div>
            <div>
                <div class="md-display-2">I'm Nick Melton</div>
                <div class="md-layout md-alignment-center-left fit-content">
                    <span class="md-headline">Senior Full-Stack Engineer</span>
                    <md-icon class="md-size-2x m-l-10">terminal</md-icon>
                </div>
            </div>
            <md-content class="md-subheading md-elevation-10">
                As a Senior Full-Stack Engineer with 7 years of experience working in various domains, I combine
                technical skills and business knowledge to create innovative and scalable solutions. My most
                recent and impactful experience was developing Ecoonline, international multi-tenant platform
                which helps 10,000+ brands to comply safety standards of their business from more than 40
                countries
                <br>
                <br>
                I'm proficient at these technologies: React.js, Vue.js, Python, PHP and AWS. I contributed to improving 
                the company's processes and reducing annual costs by implementing fresh tech solutions.
            </md-content>
        </div>
    </div>
</template>

<style lang="scss" scoped>
    .main-section {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-top: 80px;

        @media (max-width: 1000px) {
            flex-direction: column-reverse;
        }
    }

    .main-section > * {
        width: 50%;

        @media (max-width: 1000px) {
            width: 100%;
            padding: 0 20px;
        }
    }

    .greeting-section {
        padding-left: 10%;
        margin-top: 100px;

        @media (max-width: 1000px) {
            margin-top: 80px;
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
            margin-right: 0;
        }
    }

    .monitor-block {
        margin-top: 80px;
        width: 400px;
        height: 400px;
        position: relative;

        @media (max-width: 1000px) {
            width: 100%;
        }
    }

    .portrait-block {
        position: absolute;
        margin: 15px 10px;
        width: calc(100% - 20px);
        height: 260px;
        left: 0;
        top: 0;
        z-index: 1;
    }

    .monitor {
        width: 100%;
        height: 100%;
        filter: brightness(0) invert(1);
        position: relative;
        z-index: 2;
    }

    .portrait-block > .portrait {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .portrait-block > .noise {
        position: absolute;
        z-index: 2;
        top: -10x;
        opacity: 0.5;
        width: 100%;
        height: calc(100% + 15px);
        background-size: 55px 10px;
        animation: noise 1s linear infinite;
    }

    @keyframes noise { 
        0% {
            top: -10px;
        }
        100% {
            top: 0px;
        } 
    }
</style>