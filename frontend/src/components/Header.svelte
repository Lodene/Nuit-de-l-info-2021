<script>
    import SearchBar from "./SearchBar.svelte";
    import { createEventDispatcher } from "svelte";

    let dispatch = createEventDispatcher();
</script>

<header>
    <div class="logo"><img src="../ressources/logo.png" alt=""></div>

    <SearchBar on:updateSearch/>

    <div class="buttons">
        <div><img src="../ressources/iconsPlus.svg" alt="add"></div>
        <div><img src="../ressources/iconsPerson.png" alt="person"></div>
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


    .logo {
        width: 200px;
        height: 200px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .buttons {
        width: 250px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
</style>

