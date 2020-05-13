<template>
    <div>
        <Header class="header" />
        <mainContent />
        <Footer />
    </div>
</template>

<script>
import Header from "./Header.vue";
import mainContent from "./mainContent.vue";
import Footer from "./Footer";

export default {
    name: "Root",
    components: {
        Header,
        mainContent,
        Footer
    }
}
</script>

<style scoped>
</style>
