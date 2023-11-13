<template>
    <div class="flex items-center">
        <font-awesome-icon 
            icon="plus-square"
            :class="[item.name ? 'text-green-500' : 'text-gray-500', 'w-12 h-12']"
        
        />
        <!-- <input type="text" v-model="item.name" /> -->
        <text-input 
            inputId="name"        
            v-model="item.name"
            labelText="Type todo task" 
        />
        

    </div>
</template>

<script>

import TextInput from '../../Components/TextInput.vue';

export default {

    data() {
        return {
            item: {
                name: '',
            }
        }
    },
    
    components: {
        TextInput,
    }

}
</script>


