<template>
    <md-tabs md-sync-route md-alignment="centered" class="tabs">
      <md-tab id="tab-home md-swipeable" md-label="Home" to="/" exact></md-tab>
      <md-tab id="tab-experience md-swipeable" md-label="Experience" to="/experience"></md-tab>
      <md-tab id="tab-projects md-swipeable" md-label="Projects" to="/projects"></md-tab>
      <md-tab id="tab-contacts md-swipeable" md-label="Contacts" to="/contacts"></md-tab>
    </md-tabs>
</template>

<style lang="scss" scoped>
  .tabs {
    z-index: 5;
    top: 0;
    position: fixed;
    width: 100%;
  }
</style>