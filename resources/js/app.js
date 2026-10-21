import { createApp } from 'vue';
import axios from 'axios'; 
import Members from './Pages/Members.vue';
import Inventories from './Pages/Inventories.vue';
import Analytics from './Pages/Analytics.vue';
import Login from './Pages/Login.vue'; 

const token = localStorage.getItem('token');
if (token) {
    axios.defaults.headers.common['Authorization'] = 'Bearer ' + token;
}
axios.defaults.headers.common['Accept'] = 'application/json';

const path = window.location.pathname;

let currentComponent = Members;
if (path.includes('/inventories')) {
    currentComponent = Inventories;
} else if (path.includes('/analytics')) {
    currentComponent = Analytics;
} else if (path.includes('/login')) {
    currentComponent = Login; 
}

createApp(currentComponent).mount('#app');