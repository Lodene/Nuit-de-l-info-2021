<script>
    import ResultStore from "../stores/ResultStore";
    import { createEventDispatcher } from "svelte";

    let dispatch = createEventDispatcher();

    let searchValue = '';

    $: {
        dispatch('updateSearch', searchValue);
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