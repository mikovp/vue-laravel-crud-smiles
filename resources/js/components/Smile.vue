<template>
    <div class="col-md-3 my-2">
        <b-card
            :title="name | properCase"
            :img-src="image"
            img-top
            tag="article"
            style="max-width: 19rem;"
        >
            <select @change="update" class="form-select">
                <option
                    v-for="col in [ 'happy', 'ok' ]"
                    :value="col"
                    :key="col"
                    :selected="col === emotion ? 'selected' : ''"
                >{{ col | properCase }}
                </option>
            </select>
            <b-button class="float-right" @click="del">Delete</b-button>
        </b-card>
    </div>
</template>
<script>
export default {
    computed: {
        image() {
            return `/images/${this.emotion}.webp`;
        }
    },
    methods: {
        update(val) {
            this.$emit('update', this.id, val.target.selectedOptions[0].value);
        },
        del() {
            this.$emit('delete', this.id);
        }
    },
    props: ['id', 'emotion', 'name'],
    filters: {
        properCase(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    }
}
</script>
<style>

</style>
