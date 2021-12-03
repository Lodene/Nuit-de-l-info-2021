<script>
    import ResultStore from "../stores/ResultStore";
    import { createEventDispatcher } from "svelte";

    let dispatch = createEventDispatcher();

    let searchValue = '';
    
    //const url = "http://localhost/";
    const url = "https://orp-ingenierie.fr/loc/";
    const postParams = new URLSearchParams();
    


    $: {
        dispatch('updateSearch', searchValue);
        postParams.append("research", searchValue);
        fetch(url + 'dunkerquerescuer/backend/controler/getResultRescuer.php', { method: 'POST', body: postParams })
        .then(res => res.json())
        .then(data => {
            if(data.success == true){
                console.log(data.result[0]);
                ResultStore.update(currentData => {
                    return data.result;
                });
            }
            else {
                displayError();
            }
        });
    }

    
</script>


<div class="searchBar">
    <input type="text" class="search" bind:value={searchValue} placeholder="Rechercher...">
</div>


<style>
    input {
        margin: 0px;
        font-size: 20px;
        width: 500px;
    }
</style>