<template>
    <ErrorAlerts :errors="this.errors_messages" v-if="this.errors_messages.length > 0"/>
    <div class="row g-3">
        <div class="col-auto">
            <label for="first_number" class="form-label">First number</label>
            <input v-model.number="first_number" id="first_number" type="number" class="form-control">
        </div>
        <div class="col-auto">
            <label for="second_number" class="form-label">Second number</label>
            <input v-model.number="second_number" id="second_number" type="number" class="form-control">
        </div>
    </div>
    <div class="row g-3 mt-2">
        <div class="col-auto">
            <button type="submit" @click="makeCalc" class="btn btn-primary mb-3">Sum</button>
        </div>
    </div>
    <ResultAlert :result="this.count_the_sum" v-if="this.count_the_sum !== null"/>
</template>

<script>
import ErrorAlerts from "./Alerts/ErrorAlerts";
import ResultAlert from "./Alerts/ResultAlert";
export default {
    name: "CountTheSum",
    components: {ResultAlert, ErrorAlerts},
    data() {
        return {
            first_number: null,
            second_number: null,
            errors_messages: [],
            count_the_sum: null
        }
    },
    methods: {
        makeCalc: function () {
            this.errors_messages = [];
            this.count_the_sum = null;
            if (this.isEmpty(this.first_number)) {
                this.errors_messages.push("The first number field is required");
            }
            if (this.isEmpty(this.second_number)) {
                this.errors_messages.push("The second number field is required");
            }
            if (this.errors_messages.length === 0) {
                this.makeRequest();
            }
        },
        isEmpty: function (element) {
            return element === null;
        },
        makeRequest: function () {
            axios.post('/api/calc', {
                first_number: this.first_number,
                second_number: this.second_number
            }).then((response) => {
                this.count_the_sum = response.data.data.count_the_sum;
            }).catch(() => {
                this.errors_messages.push('Server error');
            })
        }
    }
}
</script>

<style scoped>

</style>
