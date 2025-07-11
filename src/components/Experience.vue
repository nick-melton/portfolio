<template>
    <div id="experience-section" class="main-section">
        <div class="greeting-section">
            <div class="md-layout md-alignment-top-left fit-content title-block">
                <div class="md-display-3 greeting-header">My experience</div>
                <div class="icon-block">
                    <md-icon class="md-size-2x experience-icon">badge</md-icon>
                </div>
            </div>
            <div class="gear-block">
                <img class="gear" src="@/assets/gear.svg" alt="">
            </div>
        </div>
        <div class="experiences">
            <div v-for="(item, index) in items" :key="item.name" class="experience-item">
                <md-card class="md-elevation-7 experience-card">
                    <md-card-header>
                        <div class="md-title">{{ item.name }}</div>
                        <div class="position md-subheading">{{ item.position }}</div>
                        <div class="period">{{ item.period }}</div>
                        <div class="location-block">
                            <div class="icon-block">
                                <md-icon>location_on</md-icon>
                            </div>
                            <div class="location">{{ item.location }}</div> 
                        </div>
                    </md-card-header>
                    <md-card-content>
                        <div class="achievement" v-for="achievement in item.achievements" :key="achievement">
                            <md-checkbox v-model="checkedBoxes" class="checkbox"></md-checkbox>
                            {{ achievement }}
                        </div>
                    </md-card-content>
                    <div class="skills">
                        <md-chip v-for="skill in item.skills" :key="skill" class="skill">{{ skill }}</md-chip>
                    </div>
                </md-card>
                <svg v-if="index !== (items.length - 1)" height="180" width="10" class="self-center"> 
                    <line class="dashed-line" x1="0" y1="0" x2="0" y2="180" /> 
                </svg> 
            </div>
            <div class="md-display-1 resume-link">
                <a href="https://drive.google.com/file/d/1NwRWCif9KerDepvPhytcX2hzqDGRpmYa/view?usp=sharing">My Full Resume link</a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Experience',
        data() {
            return {
                checkedBoxes: true,
                items: [
                    {
                        name: 'EcoOnline',
                        position: 'Senior Full-Stack Engineer',
                        location: 'Remote',
                        period: 'Aug 2024 - Jul 2025',
                        achievements: [
                            'Built the high-load solution for letting new company business clients to migrate 3 million PDF documents in the system daily',
                            'Developed a solution of recognition PDF documents related to a common vendor with 80% preciseness rate',
                            'Implemented sophisticated tech module to support the software part running on legacy OS',
                            'Boosted up the performance of legacy system by increasing document migration processes by 45%',
                        ],
                        skills: [
                            'PHP',
                            'Laravel',
                            'JS',
                            'TypeScript',
                            'React.js',
                            'Postgres',
                            'MongoDB',
                            'AWS',
                            'Kafka',
                            'ElasticSearch',
                            'Redis',
                            'Grafana',
                            'Datadog',
                            'Kubernetes'
                        ]
                    },
                    {
                        name: 'TheWhyKingz',
                        position: 'Senior Full-Stack Engineer',
                        location: 'Remote',
                        period: 'Jul 2023 - Jul 2024',
                        achievements: [
                            'Improved company quarterly reports generation performance by 30% by batching requests as messages for RabbitMQ instead of single full-loaded process',
                            'Developed validation of Fin-tech balances with prediction of 90% balance accuracy faults',
                            'Suggested and implemented full UI/UX redesign of company Fin-tech service',
                            'Fixed DB performance issues and gained background scripts execution speed by 25%',
                        ],
                        skills: [
                            'PHP',
                            'Laravel',
                            'Symphony',
                            'Python',
                            'Flask',
                            'FastAPI',
                            'JS',
                            'TypeScript',
                            'React.js',
                            'Vue.js',
                            'MySQL',
                            'MongoDB',
                            'RabbitMQ',
                            'Kafka',
                            'Redis',
                            'Grafana',
                            'Jenkins',
                            'Kubernetes'
                        ]
                    },
                    {
                        name: 'Sigma Software',
                        position: 'Senior Full-Stack Engineer',
                        location: 'Remote',
                        period: 'Aug 2021 - Jul 2023',
                        achievements: [
                            'Suggested and developed innovative solutions for marketplace that allowed to reduce 150k euro on 2022 budget of company',
                            'Decreased costs on supporting legacy codebase by migrating to new micro-service infrastructure',
                            'Set up projects pipelines (linters, tests, pre-commit), gained development speed by 15%',
                            'Integrated headless CMS to existing service to let management change the content via convenient tool',
                        ],
                        skills: [
                            'PHP',
                            'Laravel',
                            'Lumen Framework',
                            'Slim Frawemork',
                            'Python',
                            'Flask',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'Java',
                            'MySQL',
                            'MongoDB',
                            'RabbitMQ',
                            'Redis',
                            'Grafana',
                            'Jenkins',
                            'DigitalOcean',
                            'AWS'
                        ]
                    },
                    {
                        name: 'ISC Respect',
                        position: 'Full-Stack Engineer',
                        location: 'Ukraine',
                        period: 'Jun 2018 - Jul 2021',
                        achievements: [
                            'Increased the company income by 7% in 2019 by providing Fin-tech tools to issue insurance contracts and manage company operations',
                            'Reduced company costs by 10% on Customer Support department by providing Telegram bot tool to handle customers requests',
                            'Integrated partners services to gain processes efficiency and increase clients base by 2k+',
                            'Provided document archiving tool to free up 140GB+ of space',
                        ],
                        skills: [
                            'PHP',
                            'Laravel',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'RabbitMQ',
                            'MySQL',
                            'Jenkins',
                            'Heroku'
                        ]
                    }
                ]
            }
        }
    }
</script>

<style lang="scss" scoped>
    .main-section {
        display: flex;
        flex-direction: row;
        margin-top: 160px;

        @media (max-width: 1000px) {
            flex-direction: column;
        }
    }

    .main-section > * {
        width: 50%;

        @media (max-width: 1000px) {
            width: 100%;
        }
    }

    .greeting-section {
        padding-left: 10%;

        @media (max-width: 1000px) {
            padding-left: 0%;
        }
    }

    @media (max-width: 1000px) {
        .greeting-header {
            text-align: center;
        }
    }

    @media (max-width: 1000px) {
        .title-block {
            padding: 0 20px;
        }
    }

    .experience-icon {
        margin-left: 20px;

        @media (max-width: 1000px) {
            margin: 20px 0 0 0;
        }
    }

    @media (max-width: 1000px) {
        .icon-block {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    }

    .experiences {
        padding-right: 10%;

        @media (max-width: 1000px) {
            padding: 0 20px;
        }
    }

    .experience-item {
        display: flex;
        flex-direction: column;
    }

    .experience-card {
        padding: 30px;
    }

    .period {
        margin-top: 10px;
    }

    .position {
        margin-top: 10px !important;
    }

    .location-block {
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-top: 15px;
    }

    .location {
        margin-left: 10px;
    }

    .checkbox {
        pointer-events: none;
    }

    .achievement {
        display: flex;
        align-items: center;
    }

    .skill {
        margin: 7px;
    }

    .resume-link {
        margin-top: 80px;
    }

    @media (max-width: 1000px) {
        .gear-block {
            display: flex;
            justify-content: center;
            width: 100%;
        }
    }

    .gear {
        height: 250px;
        width: 250px;
        margin-top: 320px;
        align-self: center;
        margin-left: 15%;
        animation: gear 8s linear infinite;

        @media (max-width: 1000px) {
            margin: 150px 0;
        }
    }

    @keyframes gear { 
        100% { 
            -webkit-transform: rotate(360deg); 
            transform:rotate(360deg); 
        } 
    }

    .md-content {
        margin-top: 40px;
        margin-right: 20%;
        padding: 20px;
        display: inline-flex;
        justify-content: center;
        align-items: center;
    }

    .dashed-line {
        stroke:white;
        stroke-width: 20;
        stroke-dasharray: 20;
        animation: dash 5s infinite;
    }

    @keyframes dash {
        to {
            stroke-dashoffset: 200;
        }
    }
</style>