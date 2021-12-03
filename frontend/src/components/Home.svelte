<script>
    import { fade } from "svelte/transition";
</script>

<div in:fade>
    <h1>Bienvenue sur le site web des sauveteurs du Dunkerquois !</h1>
	<h2>Faites une recherche pour commencer...</h2>
</div>

<style>
    div {
        width: 100%;
        height: 550px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
</style>