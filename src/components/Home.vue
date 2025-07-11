<template>
    <div class="home-section">
       <Info/>
       <Experience/>
       <Projects/>
       <Contacts/>
    </div>
</template>

<script>
    import Info from './Info.vue'
    import Experience from './Experience.vue'
    import Projects from './Projects.vue'
    import Contacts from './Contacts.vue'

    export default {
        name: 'Home',
        components: {
            Info,
            Experience,
            Projects,
            Contacts
        },
        watch:{
            $route (to){
                let slug = to.path.replace('/', '');

                if(!slug) {
                    slug = 'info';
                }

                const section = document.getElementById(`${slug}-section`);
                const y = section.getBoundingClientRect().top + window.scrollY;
                window.scroll({
                    top: y - 100,
                    behavior: 'smooth'
                });
            }
        } 
    }
</script>

<style lang="scss" scoped>
  .home-section {
    padding-bottom: 80px;
  }
</style>