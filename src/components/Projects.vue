<template>
    <div id="projects-section" class="main-section">
        <div class="greeting-section">
            <div class="md-layout md-alignment-top-left fit-content">
                <div class="md-display-3">Projects</div>
                <md-icon class="md-size-2x project-icon">rocket_launch</md-icon>
            </div>
            <div id="animation-container"></div>
            <div id="animation-2-container"></div>
            <div id="animation-3-container"></div>
        </div>
        <div class="projects">
            <div v-for="(item, index) in items" :key="item.name" class="project-item">
                <md-card class="md-elevation-7 project-card">
                    <md-card-header>
                        <a v-if="item.link" :href="item.link" class="md-title">{{ item.name }}</a>
                        <div v-else class="md-title">{{ item.name }}</div>
                        <div class="period">{{ item.period }}</div>
                    </md-card-header>
                    <md-card-content>{{ item.description }}</md-card-content>
                    <div class="skills">
                        <md-chip v-for="skill in item.skills" :key="skill" class="skill">{{ skill }}</md-chip>
                    </div>
                </md-card>
                <svg v-if="index !== (items.length - 1)" height="180" width="10" class="self-center"> 
                    <line class="solid-line" x1="0" y1="0" x2="0" y2="180" /> 
                </svg> 
            </div>
            <div class="md-display-1 cv-block">
                <a href="https://drive.google.com/file/d/1dB312FGSjqWaWdVFfOT5D2fecRLEgJJ6/view?usp=sharing">My Full CV link</a>
            </div>
        </div>
    </div>
</template>

<script>
    import bodymovin from 'lottie-web'

    export default {
        name: 'Projects',
        mounted() {
            this.createAnimation('animation-container', '/animation.json');
            this.createAnimation('animation-2-container', '/animation_2.json');
            this.createAnimation('animation-3-container', '/animation_3.json');
        },
        data() {
            return {
                items: [
                    {
                        name: 'Fin-tech reporting service',
                        period: 'Nov 2023 - Jul 2024',
                        description: 'Internal company Fin-tech reporting service with millions transactions being gathered and analysed. Maintained and moved company legacy service to newer versions of tech stack. Changed processes to improve performance using best tech practices',
                        skills: [
                            'PHP',
                            'Symphony',
                            'Python',
                            'Flask',
                            'JS',
                            'TypeScript',
                            'React.js',
                            'MongoDB',
                            'RabbitMQ',
                            'Redis',
                            'Grafana',
                            'Jenkins',
                            'Kubernetes'
                        ]
                    },
                    {
                        name: 'Crypto-currencies exchange service',
                        period: 'Jul 2023 - Nov 2023',
                        description: 'Developed and maintained service for crypto-currencies exchange (Bitcoin, Ethereum, Tron). Moved project to new infrastructure with Kubernetes. Suggested and implemented full redesign following best UI/UX practices',
                        skills: [
                            'PHP',
                            'Laravel',
                            'Python',
                            'FastAPI',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'MySQL',
                            'RabbitMQ',
                            'Kafka',
                            'Redis',
                            'Jenkins',
                            'Kubernetes'
                        ]
                    },
                    {
                        name: 'Parking system service',
                        period: 'May 2023 - July 2023',
                        description: 'Developed, maintained web service for large parking service located in 5 European countries and U.S. Moved infrastructure from monolith to micro-services',
                        skills: [
                            'PHP',
                            'Slim Framework',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'MySQL',
                            'RabbitMQ',
                            'Redis',
                            'Grafana',
                            'AWS'
                        ]
                    },
                    {
                        name: 'Ankorstore: Large wholesale marketplace',
                        link: 'www.ankorstore.com',
                        period: 'Apr 2022 - Apr 2023',
                        description: 'Developed web services and improved processes for large wholesale marketplace with over 30,000 brands and 300,000 retailers from 26 European countries',
                        skills: [
                            'PHP',
                            'Laravel',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'MySQL',
                            'Redis',
                            'Grafana',
                            'AWS',
                            'DigitalOcean',
                        ]
                    },
                    {
                        name: 'Multi-domain educational website',
                        period: 'Aug 2021 - Mar 2022',
                        description: 'Multi-tenant educational portal of cybersecurity for the students with educational videos, tests, and the admin panel to handle it and view the stats',
                        skills: [
                            'PHP',
                            'Laravel',
                            'Python',
                            'Flask',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'MySQL',
                            'RabbitMQ',
                            'Jenkins'
                        ]
                    },
                    {
                        name: 'Programming education website',
                        period: 'Nov 2021 - Feb 2022',
                        description: 'Educational project with examples of code best practices, well-known vulnerabilities, and fixes for them. Migrated some modules from Java to PHP',
                        skills: [
                            'PHP',
                            'Lumen Framework',
                            'Java',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'MongoDB',
                            'Jenkins'
                        ]
                    },
                    {
                        name: 'Insurance company services',
                        link: 'www.respectins.com',
                        period: 'Jul 2018 - Jul 2021',
                        description: "Insurance company websites linked to each other and a Telegram bot for inner business needs. Insurance agents used it to issue contracts via the website, generate PDF, import/export reports, use integrated services for getting payments from clients, handle sms, store and investigate clients' data for business needs (passports, taxpayer cards,etc).",
                        skills: [
                            'PHP',
                            'Laravel',
                            'JS',
                            'TypeScript',
                            'Vue.js',
                            'MySQL',
                            'RabbitMQ',
                            'Heroku'
                        ]
                    }
                ]
            }
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

<style lang="scss" scoped>
    .main-section {
        display: flex;
        flex-direction: row;
        margin-top: 160px;

        @media (max-width: 1000px) {
            flex-direction: column;
            margin-top: 120px;
            padding: 0 40px;
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

    .project-icon {
        margin-left: 20px;
    }

    .projects {
        padding-right: 10%;

        @media (max-width: 1000px) {
            padding-right: 0%;
        }
    }
    
    .project-item {
        display: flex;
        flex-direction: column;
    }

    .project-card {
        padding: 30px;
    }

    .period {
        margin-top: 10px;
    }

    .skill {
        margin: 7px;
    }

    .cv-block {
        margin-top: 80px;
    }

    .gear {
        height: 250px;
        width: 250px;
        margin-top: 320px;
        align-self: center;
        margin-left: 15%;
        animation: gear 8s linear infinite;
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

    .solid-line {
        stroke:gray;
        stroke-width: 20;
    }

    #animation-container {
        margin-top: 480px;
        width: 300px;

        @media (max-width: 1000px) {
            margin: 120px 0;
        }
    }

    #animation-2-container, #animation-3-container {
        margin-top: 640px;
        width: 300px;

        @media (max-width: 1000px) {
            display: none;
        }
    }
</style>