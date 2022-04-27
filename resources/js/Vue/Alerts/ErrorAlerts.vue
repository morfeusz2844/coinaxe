<template>
    <div class="alert alert-danger">
        <ul>
            <li v-for="message in errors">{{ message }}</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: "ErrorAlerts",
    props: ['errors']
}
</script>

<style scoped>

</style>
