<script>
    import { fade } from "svelte/transition";
    import ResultStore from "../stores/ResultStore";
    import Result from "./Result.svelte";

    export let searchValue;

    $: searchValue;
</script>


<div class="result-list" in:fade>
    <h2>Résultats pour {searchValue}</h2>
    <div class="display-results">
        {#each $ResultStore as result}
            <Result {result} on:updateSelection/>
        {/each}
    </div>
</div>


<style>
    .result-list {
        margin: 0 auto;
        width: 600px;
    }
    
    .display-results {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>