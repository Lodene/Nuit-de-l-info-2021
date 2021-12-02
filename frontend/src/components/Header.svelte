<script>
    import SearchBar from "./SearchBar.svelte";
</script>

<header>
    <div class="logo"></div>

    <SearchBar/>

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

