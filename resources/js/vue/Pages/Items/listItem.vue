<template>
    <div class="flex items-center">
        <input 
            type="checkbox" 
            @chage="updateCheck()"
            v-model="item.completed"
        />
        <!-- <checkbox-input
            @change="updateCheck()"
            v-model="item.completed"
        /> -->
        <span :class="[item.completed ? 'line-through' : '', 'ml-2']">
            {{ item.name }}
        </span>
    </div>
</template>

<script>
import CheckboxInput from "../../Components/CheckboxInput.vue";

export default {
    data() {
        return {
            item: {
                completed: '',
            }
        }
    },
    props: ['item'],
    components: {
        CheckboxInput
    }
}
</script>