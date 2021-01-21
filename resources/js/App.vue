<template>
    <div id="app">
        <br/><br/><br/>
        <div class="container">
            <div class="row">
                <smile-component
                    v-for="smile in smiles"
                    v-bind="smile"
                    :key="smile.id"
                    @update="update"
                    @delete="del"
                ></smile-component>
            </div>
            <br/>
            <div>
                <b-button @click="create">Add</b-button>
            </div>
        </div>
    </div>
</template>

<script>
function Smile({id, emotion, name}) {
    this.id = id;
    this.emotion = emotion;
    this.name = name;
}

import SmileComponent from './components/Smile';

export default {
    data() {
        return {
            smiles: []
        }
    },
    methods: {
        async create() {
            let loader = this.$loading.show();
            const {data} = await window.axios.get('/api/smiles/create');
            this.smiles.push(new Smile(data));
            loader.hide();
        },
        async read() {
            let loader = this.$loading.show();
            const {data} = await window.axios.get('/api/smiles');
            data.forEach(smile => this.smiles.push(new Smile(smile)));
            loader.hide();
        },
        async update(id, emotion) {
            let loader = this.$loading.show();
            await window.axios.put(`/api/smiles/${id}`, {emotion});
            this.smiles.find(smile => smile.id === id).emotion = emotion;
            loader.hide();
        },
        async del(id) {
            let loader = this.$loading.show();
            await window.axios.delete(`/api/smiles/${id}`);
            let index = this.smiles.findIndex(smile => smile.id === id);
            this.smiles.splice(index, 1);
            loader.hide();
        }
    },
    components: {
        SmileComponent
    },
    created() {
        this.read();
    }
}
</script>
<style>

</style>
