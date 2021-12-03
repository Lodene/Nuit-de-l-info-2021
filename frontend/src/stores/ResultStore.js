import  { writable } from 'svelte/store';
const url = "http://localhost/";

export let searchValue;

const ResultStore = writable();

const postParams = new URLSearchParams();
postParams.append("research", searchValue);

fetch(url + 'dunkerquerescuer/backend/controler/getResult.php', { method: 'POST', body: postParams })
    .then(res => res.json())
    .then(data => {
        if(data.success == true){
            ResultStore = writable(data.result);
        }
        else {
            displayError();
        }
    });


export default ResultStore;