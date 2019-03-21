<template>
    <div> Account details go here</div>

</template>


<keep-alive>
  <component v-bind:is="currentTabComponent"></component>
</keep-alive>