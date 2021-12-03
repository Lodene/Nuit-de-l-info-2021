import  { writable } from 'svelte/store';
const url = "http://localhost/";

export let searchValue;

const postParams = new URLSearchParams();
postParams.append("research", searchValue);

fetch(url + 'dunkerquerescuer/backend/controler/getResult.php', { method: 'POST', body: postParams })
    .then(res => res.json())
    .then(data => {
        if(data.success == true){
            
        }
        else {
            displayError();
        }
    });


const ResultStore = writable([
    {id: '239245f9-b0ad-40e3-96ca-5d5eb026c2c3', type: "rescuer", title: "Antoine Adjamidis", resume: "Nombre de sauvetages : 8"},
    {id: '239245f9-b0ad-40e3-96ca-5d5eb026c2c3', type: "story", title: "Nauffrage du titanic", resume: "En 1905, Henry Polit sauva 35 personnes de la noyade lors"},
    {id: '239245f9-b0ad-40e3-96ca-5d5eb026c2c3', type: "rescuer", title: "Seb Lebg", resume: "Nombre de sauvetages : 10"},
    
]);

export default ResultStore;