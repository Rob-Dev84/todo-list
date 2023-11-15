<template>
    <div class="flex items-center rounded-lg py-1 dark:bg-gray-600 dark:text-white">
        <input 
            type="checkbox" 
            @change="updateCheck()"
            v-model="item.completed"
            :checked="item.completed"
        />
        
        <span :class="[item.completed ? 'line-through' : '', 'ml-2 w-full']">
            {{ item.name }}
        </span>
        <button @click="removeItem()" class="flex justify-center tems-center">
        <!-- <button :buttonText="customButtonText" :clickHandler="removeItem()" /> -->
        <font-awesome-icon 
            icon="trash"
            :class="['bg-gray-100 text-red-500 w-5 h-5 cursor-pointer']"
            title="Delete this task"
        />
        </button>
    </div>
</template>

<script>
import axios from "axios";
// import CheckboxInput from "../../Components/CheckboxInput.vue";
// import Button from "../../Components/Button.vue";

export default {
    props: ['item'],//is this the item objects
    // components: {
    //     // CheckboxInput,
    //     // Button
    // },
    methods: {

        updateCheck() {
            axios.put('api/item/' + this.item.id, {
                item: this.item, //we pass the entire item object
            })
            .then( response => {
                if ( response.status == 200 ) {
                    this.$emit('itemchanged');
                }
            })
            .catch( error => {
                console.log(error);
            })
        },
        removeItem() {
            axios.delete('api/item/' + this.item.id)
            .then( response => {
                if ( response.status == 200 ) {
                    this.$emit('itemchanged');
                }
            })
            .catch( error => {
                console.log( error );
            })
        },
    }
}
</script>