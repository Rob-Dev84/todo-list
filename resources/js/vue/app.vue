<template>
    <div class="">
        <div class="">
            <h2 id="title" class="text-3xl py-4 px-10 dark:text-white">Todo list</h2>
            <add-item-form
                v-on:reloadlist="getList()"
            />
            <list-view 
                :items="items"
                v-on:reloadlist="getList()"
             />

        </div>
    </div>
</template>

<script>
import axios from 'axios';
import addItemForm from './Pages/Items/addItemForm.vue';
import listView from './Pages/Items/listView.vue';

export default {
    components: {
        addItemForm,
        listView,
    },
    data() {
        return {
            items: []
        }
    },
    methods: {
        getList() {
            axios.get('api/items')
            .then( response => {
                this.items = response.data
            })
            .catch( error => {
                console.log(error);
            })
        }
    },
    created() {
        this.getList();
    }
}
</script>