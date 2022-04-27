<template>
    <div class="alert alert-primary" role="alert">
        Result: {{ result }}
    </div>
</template>

<script>
export default {
    name: "ResultAlert",
    props: ['result']
}
</script>

<style scoped>

</style>
