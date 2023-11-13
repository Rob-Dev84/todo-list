import './bootstrap';

import { createApp } from 'vue';
import app from './vue/app.vue';

/* import the fontawesome core */
import { library } from '@fortawesome/fontawesome-svg-core'
/* import font awesome icon component */
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
/* import specific icons */
import { faPlusSquare, faTrash } from '@fortawesome/free-solid-svg-icons'

/* Uncomment below to import all the free icons */
// import { fas } from '@fortawesome/free-solid-svg-icons'

/* Add all the icons to the library */
library.add(faPlusSquare, faTrash)

/* Uncomment below to add all the free icons */
// library.add(fas)

createApp(app)
        /* add font awesome icon component */
        .component('font-awesome-icon', FontAwesomeIcon)
        .mount("#app")

        

