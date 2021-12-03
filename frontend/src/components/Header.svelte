<script>
    import SearchBar from "./SearchBar.svelte";
    import { createEventDispatcher } from "svelte";

    let dispatch = createEventDispatcher();
</script>

<header>
    <div class="logo"></div>

    <SearchBar on:updateSearch/>

    <div class="buttons">
        <div></div>
        <div></div>
    </div>

</header>

<style>
    header {
        background-color: #EEE5E9;
        height: 200px;
        width: 100%;
        display: flex;
        justify-content: space-around;
        align-items: center;
    }

    header > * {
        border: 1px solid black;
    }

    .logo {
        width: 100px;
        height: 100px;
        
    }

    .buttons {
        width: 200px;
        height: 100px;
    }
</style>

