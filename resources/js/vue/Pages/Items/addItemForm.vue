<template>
    <div class="flex items-center">
        
        <!-- <input type="text" v-model="item.name" /> -->
        <text-input 
            inputId="name"        
            v-model="item.name"
            labelText="Type todo task" 
        />

        <font-awesome-icon 
            icon="plus-square"
            @click="addItem()"
            :class="[item.name ? 'text-green-500 cursor-pointer' : 'text-gray-500', 'w-12 h-12']"
            title="Add a new task"
        />
        

    </div>
</template>

<script>

import axios from 'axios';
import TextInput from '../../Components/TextInput.vue';

export default {

    data() {
        return {
            item: {
                name: '',
            }
        }
    },
    methods: {
        addItem() {
            if (this.item.name == '') {
                return 'You need to provide a task';
            }

            axios.post('api/item/store', {
                item: this.item
            })
            .then( response => {
                if ( response === 201) {
                    this.item.name = '';
                }
            })
            .catch( error =>  {
                console.log( error )
            })
        }
        
    },
    components: {
        TextInput,
    }

}
</script>


