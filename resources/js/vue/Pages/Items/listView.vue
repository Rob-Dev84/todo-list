<template>
    <div>
        List view:
        <div v-for="(item, index) in items" :key="index">
            
            <list-item 
                :item="item"
                v-on:itemchanged="$emit('reloadlist')"
                class="bg-gray-200 mb-2 px-2"
            />

        </div>
    </div>
</template>

<script>
// import listItem from "./listItem";
// import ListItem from "./listItem.vue";

import listItem from "./listItem.vue";

export default {
    props: ['items'],
    components: {
        listItem
    }
}
</script>