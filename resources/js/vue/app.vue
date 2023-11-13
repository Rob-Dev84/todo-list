<template>
    <div class="">
        <div class="">
            <h2 id="title" class="text-3xl py-4 px-10">Todo list</h2>
            <add-item-form />
            <list-view />

        </div>
    </div>
</template>

<script>
import addItemForm from './Pages/Items/addItemForm.vue';
import listView from './Pages/Items/listView.vue';
export default {
    components: {
        addItemForm,
        listView,
    }
}
</script>