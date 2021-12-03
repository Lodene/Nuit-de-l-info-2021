<script>
    import ResultStore from "../stores/ResultStore";

    export let searchValue;

    $: searchValue;
</script>


<div class="result-list">
    <h2>Résultats pour {searchValue}</h2>
    <div class="display-results">
        {#each $ResultStore as result}
            <div class="result">
                <img src="" alt="">
            </div>
        {/each}
    </div>
</div>


<style>
    .result-list {
        margin: 0 auto;
        width: 1000px;
    }
    
    .display-results {
        display: flex;
        justify-content: center;
    }
</style>